<?php

class NV_Donations_Adminhtml_Donations_IndexController extends Mage_Adminhtml_Controller_Action {
  
    /**
     * Render donations list
     */
    function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * Export order grid to CSV format
     */
    public function exportDonationsCsvAction() {
        $fileName = 'donations.csv';
        $grid = $this->getLayout()->createBlock('donations/adminhtml_donations_grid');
        $this->_prepareDownloadResponse($fileName, $grid->getCsv());
    }

    /**
     *  Export order grid to Excel XML format
     */
    public function exportDonationsExcelAction() {
        $fileName = 'donations.xml';
        $grid = $this->getLayout()->createBlock('donations/adminhtml_donations_grid');
        $this->_prepareDownloadResponse($fileName, $grid->getExcel($fileName));
    }
}
