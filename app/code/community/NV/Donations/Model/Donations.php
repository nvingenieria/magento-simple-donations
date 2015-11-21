<?php 

class NV_Donations_Model_Donations extends Mage_Core_Model_Abstract {
    
    protected function _construct() {
        parent::_construct();
        $this->_init('donations/donations');
    }
}
