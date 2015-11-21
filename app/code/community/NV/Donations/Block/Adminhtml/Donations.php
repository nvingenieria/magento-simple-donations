<?php

  class NV_Donations_Block_Adminhtml_Donations extends Mage_Adminhtml_Block_Widget_Grid_Container {

    public function __construct() {
        parent::__construct();
      
        $this->_blockGroup = 'donations';
        $this->_controller = 'adminhtml_donations';
        $this->_headerText = $this->__('Donations');
        
        $this->_removeButton('add');
    }
  }