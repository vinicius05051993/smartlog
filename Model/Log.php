<?php

/**
 *
 * @package Biz\SmartLog
 * @author Vinícius Henrique
 * @copyright Copyright (c) 2019 Bizcommerce (based on Imagination media module )
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

namespace Biz\SmartLog\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;

class Log extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'biz_smartlog_log';

    protected $_cacheTag = 'biz_smartlog_log';

    protected $_eventPrefix = 'biz_smartlog_log';

    protected function _construct()
    {
        $this->_init('Biz\SmartLog\Model\ResourceModel\Log');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}