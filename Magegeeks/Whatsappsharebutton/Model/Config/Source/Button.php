<?php

namespace Magegeeks\Whatsappsharebutton\Model\Config\Source;

class Button implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('Small Button')],
            ['value' => 2, 'label' => __('Medium Button')],
            ['value' => 3, 'label' => __('Large Button')],
        ];
    }
}