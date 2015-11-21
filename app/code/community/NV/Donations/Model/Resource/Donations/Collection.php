<?php

class NV_Donations_Model_Resource_Donations_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {
    
    function _construct() {
        $this->_init('donations/donations');
    }
}
