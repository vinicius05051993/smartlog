<?php

/**
 *
 * @package Biz\SmartLog
 * @author Vinícius Henrique
 * @copyright Copyright (c) 2019 Bizcommerce (based on Imagination media module )
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

namespace Biz\SmartLog\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

/**
 * Data setup for use during installation / upgrade
 *
 * @package Biz\SmartLog\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $tableName = 'smartlog_registry';

        if (!$installer->tableExists($tableName)) {

            $table = $installer->getConnection()->newTable(
                $installer->getTable($tableName)
            )->addColumn(
                'entity_id',
                Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'nullable' => false,
                    'primary'  => true,
                    'unsigned' => true,
                ]
            )->addColumn(
                'module_name',
                Table::TYPE_TEXT,
                255
            )->addColumn(
                'group',
                Table::TYPE_TEXT,
                255
            )->addColumn(
                'message',
                Table::TYPE_TEXT,
                65536
            )->addColumn(
                'date_of_registry',
                Table::TYPE_DATETIME
            );

            $installer->getConnection()->createTable($table);
        }

        $installer->endSetup();
    }
}