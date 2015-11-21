<?php

class NV_Donations_Model_Observer {
        
    /**
     *  Save donation when the order reach specified status
     */
    function orderSaveAfter(Varien_Event_Observer $observer) {

        // Get order from event
        $order = $observer->getEvent()->getOrder();
        
        // Get old and new data for comparing
        $original_data = $order->getOrigData();
        $new_data = $order->getData();
        
        // Detect order reach configured status
        $status = Mage::getSingleton('donations/config')->getOrderStatus();
        if ($original_data['status'] != $status && $new_data['status'] == $status) {
          
            // Check if donation was done
            $donatedAmount = 0;
            $pid = Mage::getSingleton('donations/config')->getProductId();
            foreach ($order->getAllVisibleItems() as $item) {
                if ($item->getProductId() == $pid) {
                    $donatedAmount += $item->getBaseRowTotal();
                }
            }
            
            // If donation was made, add to the table
            if ($donatedAmount > 0) {
                
                // Try to load donation or new object
                $donation = Mage::getModel('donations/donations')->getCollection()
                                  ->addFieldToFilter('order_id', $order->getId())
                                  ->getFirstItem();
                if (!is_object($donation) || $donation->getId() == '') {
                  $donation = Mage::getModel('donations/donations');
                }
                
                // Set data and save
                $donation->setOrderId($order->getId());
                $donation->setIncrementId($order->getIncrementId());
                $donation->setStoreId($order->getStoreId());
                $donation->setCustomerFirstname($order->getCustomerFirstname());
                $donation->setCustomerLastname($order->getCustomerLastname());
                $donation->setCustomerEmail($order->getCustomerEmail());
                $donation->setAmount($donatedAmount);
                $donation->setCurrency($order->getOrderCurrencyCode());
                $donation->setCreatedAt(Varien_Date::now());
                $donation->save();
            }
        }
    }      
}
