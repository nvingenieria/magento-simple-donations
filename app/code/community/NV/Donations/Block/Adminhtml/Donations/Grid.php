<?php

class NV_Donations_Block_Adminhtml_Donations_Grid extends Mage_Adminhtml_Block_Widget_Grid {
    
    public function _construct() {
        $this->setDefaultSort('id');
        $this->setId('donations_grid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }
     
    protected function _getCollectionClass() {
        return 'donations/donations_collection';
    }
     
    protected function _prepareCollection() {
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);        
        return parent::_prepareCollection();
    }
     
    protected function _prepareColumns() {
        
        $this->addColumn('id',
            array(
                'header'=> $this->__('ID'),
                'align' =>'left',
                'index' => 'id',
                'type'  => 'number',
            )
        );
      
        $this->addColumn('increment_id',
            array(
                'header'=> $this->__('Order #'),
                'align' =>'left',
                'index' => 'increment_id'
            )
        );
      
        $this->addColumn('created_at',
            array(
                'header'=> $this->__('Created at'),
                'align' =>'left',
                'index' => 'created_at',
                'type' => 'datetime',
            )
        );
      
        $this->addColumn('customer_firstname',
            array(
                'header'=> $this->__('Customer Firstname'),
                'align' =>'left',
                'index' => 'customer_firstname'
            )
        );
      
        $this->addColumn('customer_lastname',
            array(
                'header'=> $this->__('Customer Lastname'),
                'align' =>'left',
                'index' => 'customer_lastname'
            )
        );
      
        $this->addColumn('customer_email',
            array(
                'header'=> $this->__('Customer Email'),
                'align' =>'left',
                'index' => 'customer_email'
            )
        );
      
        $this->addColumn('amount',
            array(
                'header'=> $this->__('Amount'),
                'align' =>'left',
                'index' => 'amount',
                'type'  => 'price',
                'currency_code' => 'EUR',
            )
        );
         
        $this->addExportType('*/*/exportDonationsCsv', Mage::helper('donations')->__('CSV'));
        $this->addExportType('*/*/exportDonationsExcel', Mage::helper('donations')->__('Excel XML'));

        return parent::_prepareColumns();
    }
     
    public function getRowUrl($row) {
        return false;
    }
}
