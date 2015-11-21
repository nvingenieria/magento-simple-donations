<?php

  class NV_Donations_Model_Resource_Donations extends Mage_Core_Model_Mysql4_Abstract
  {
      function _construct() {
          $this->_init('donations/donations', 'id');
      }
  }
