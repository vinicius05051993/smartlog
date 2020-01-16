<?php

/**
 *
 * @package Biz\SmartLog
 * @author Vinícius Henrique
 * @copyright Copyright (c) 2019 Bizcommerce (based on Imagination media module )
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

namespace Biz\SmartLog\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use \Magento\Framework\Model\ResourceModel\Db\Context;

class Log extends AbstractDb
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('smartlog_registry', 'entity_id');
    }
}