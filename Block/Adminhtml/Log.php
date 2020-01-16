<?php
namespace Biz\SmartLog\Block\Adminhtml;

class Log extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_log';
        $this->_blockGroup = 'Biz_SmartLog';
        $this->_headerText = __('Logs');
        parent::_construct();
    }
}
