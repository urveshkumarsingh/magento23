<?php
namespace Xelits\Homepage\Block;

class HomePage extends \Magento\Framework\View\Element\Template
{
    public function getMessage()
    {
        $msg = "Hello World";
        return $msg;
    }
}