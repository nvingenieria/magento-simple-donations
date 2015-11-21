<?php

$installer = $this;
$installer->startSetup();

$installer->run("
    ALTER TABLE {$this->getTable('donations/donations')}
    ADD COLUMN `increment_id` varchar(255) NOT NULL AFTER order_id
");

$installer->run("
    ALTER TABLE {$this->getTable('donations/donations')}
    ADD COLUMN `store_id` smallint(5) NOT NULL AFTER increment_id
");

$installer->run("
    ALTER TABLE {$this->getTable('donations/donations')}
    ADD COLUMN `currency` varchar(255) NOT NULL AFTER amount
");

$installer->endSetup();
