<?php
namespace Magegeeks\Whatsappsharebutton\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	/*
    * @return string
    */
    public function getConfig($config_path)
    {
        return $this->scopeConfig->getValue(
            $config_path,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}