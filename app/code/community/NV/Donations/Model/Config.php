<?php

class NV_Donations_Model_Config {
    
    const CONFIG_DONATIONS_ENABLED_PATH = 'donations/general/enable';
    const CONFIG_DONATIONS_PRODUCT_ID_PATH = 'donations/general/product_id';
    const CONFIG_DONATIONS_ORDER_STATUS_PATH = 'donations/general/order_status';
    
    public function isEnabled() {
        return Mage::getStoreConfig(self::CONFIG_DONATIONS_ENABLED_PATH);
    }
    
    public function getProductId() {
        return Mage::getStoreConfig(self::CONFIG_DONATIONS_PRODUCT_ID_PATH);
    }
    
    public function getOrderStatus() {
        return Mage::getStoreConfig(self::CONFIG_DONATIONS_ORDER_STATUS_PATH);
    }
}
