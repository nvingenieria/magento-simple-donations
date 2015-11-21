<?php

$installer = $this;
$installer->startSetup();

$installer->run("
    DROP TABLE IF EXISTS {$this->getTable('donations/donations')};
    CREATE TABLE {$this->getTable('donations/donations')} (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `order_id` int(10) NOT NULL,
        `customer_firstname` varchar(255) NULL,
        `customer_lastname` varchar(255) NULL,
        `customer_email` varchar(255) NULL,
        `amount` decimal(12,4) NOT NULL,
        `created_at` timestamp NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");

$installer->endSetup();
