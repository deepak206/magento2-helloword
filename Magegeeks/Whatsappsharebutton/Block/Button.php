<?php

namespace Magegeeks\Whatsappsharebutton\Block;

use Magento\Framework\View\Element\Template;
/**
 * Class Button
 * @package Magegeeks\Whatsappsharebutton\Block
 */
class Button extends Template
{
    protected $helper;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magegeeks\Whatsappsharebutton\Helper\Data $helper,
        array $data = []
    )
    {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    public function getMessage()
    {
    	$message = $this->helper->getConfig('whatsappsharebutton/configuration/message');
    	if($message) {
    		return str_replace("{url}",$this->getCurrentUrl(), $message);
    	}
    	else {
    		return "Default Message";
    	}
    }

    public function getCurrentUrl()
    {
    	return $this->getUrl('*/*/*', ['_current' => true, '_use_rewrite' => true]);
    }

    public function getLable(){
    	return ($this->helper->getConfig('whatsappsharebutton/configuration/buttonlable')) ? $this->helper->getConfig('whatsappsharebutton/configuration/buttonlable'):"Share on Whatsapp";
    }

    public function getButtonType(){
    	$buttonClass = array(
	    		'1' => 'w3_whatsapp_btn_small',
	    		'2' => 'w3_whatsapp_btn_medium',
	    		'3' => 'w3_whatsapp_btn_large'
    		);

    	return ($this->helper->getConfig('whatsappsharebutton/configuration/type')) ? $buttonClass[$this->helper->getConfig('whatsappsharebutton/configuration/type')]:"w3_whatsapp_btn_large";
    }
}