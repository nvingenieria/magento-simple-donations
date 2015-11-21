<?php

class NV_Donations_Block_Abstract extends Mage_Core_Block_Template {
    
    /**
     * Check if block is enabled
     */
    public function isEnabled() {
        return Mage::getSingleton('donations/config')->isEnabled();
    }
    
    /**
     * Check if the donation product is yet in cart
     */
    public function isProductInCart() {
        $pid = Mage::getSingleton('donations/config')->getProductId();
        $cart = Mage::getSingleton('checkout/session')->getQuote();
        foreach ($cart->getAllVisibleItems() as $item) {
            if ($pid == $item->getProductId()) {
                return true;
            }
        }
        return false;
    }
    
    /**
     * Gets configured product for donation
     */
    public function getProduct() {
        $pid = Mage::getSingleton('donations/config')->getProductId();
        $product = Mage::getModel('catalog/product')->load($pid);
        return $product;
    }
}
