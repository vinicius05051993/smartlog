<?php

/**
 *
 * @package Biz\SmartLog
 * @author Vinícius Henrique
 * @copyright Copyright (c) 2019 Bizcommerce (based on Imagination media module )
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

namespace Biz\SmartLog\Model\ResourceModel\Log;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'entity_id';
    protected $_eventPrefix = 'biz_smartlog_log_collection';
    protected $_eventObject = 'log_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Biz\SmartLog\Model\Log', 'Biz\SmartLog\Model\ResourceModel\Log');
    }
}