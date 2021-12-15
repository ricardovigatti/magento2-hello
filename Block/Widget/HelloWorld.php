<?php namespace Bowie\HelloWorld\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class HelloWorld extends Template implements BlockInterface {

	protected $_template = "widget/hello.phtml";

}
