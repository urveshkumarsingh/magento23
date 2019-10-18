<?php
namespace Magento\Quote\Model\Quote\Item\Processor;

/**
 * Interceptor class for @see \Magento\Quote\Model\Quote\Item\Processor
 */
class Interceptor extends \Magento\Quote\Model\Quote\Item\Processor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\Quote\ItemFactory $quoteItemFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\State $appState)
    {
        $this->___init();
        parent::__construct($quoteItemFactory, $storeManager, $appState);
    }

    /**
     * {@inheritdoc}
     */
    public function init(\Magento\Catalog\Model\Product $product, \Magento\Framework\DataObject $request) : \Magento\Quote\Model\Quote\Item
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'init');
        if (!$pluginInfo) {
            return parent::init($product, $request);
        } else {
            return $this->___callPlugins('init', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(\Magento\Quote\Model\Quote\Item $item, \Magento\Framework\DataObject $request, \Magento\Catalog\Model\Product $candidate) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepare');
        if (!$pluginInfo) {
            parent::prepare($item, $request, $candidate);
        } else {
            $this->___callPlugins('prepare', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Magento\Quote\Model\Quote\Item $source, \Magento\Quote\Model\Quote\Item $target) : \Magento\Quote\Model\Quote\Item
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'merge');
        if (!$pluginInfo) {
            return parent::merge($source, $target);
        } else {
            return $this->___callPlugins('merge', func_get_args(), $pluginInfo);
        }
    }
}
