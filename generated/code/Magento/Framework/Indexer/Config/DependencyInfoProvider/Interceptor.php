<?php
namespace Magento\Framework\Indexer\Config\DependencyInfoProvider;

/**
 * Interceptor class for @see \Magento\Framework\Indexer\Config\DependencyInfoProvider
 */
class Interceptor extends \Magento\Framework\Indexer\Config\DependencyInfoProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Indexer\ConfigInterface $config)
    {
        $this->___init();
        parent::__construct($config);
    }

    /**
     * {@inheritdoc}
     */
    public function getIndexerIdsToRunBefore(string $indexerId) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIndexerIdsToRunBefore');
        if (!$pluginInfo) {
            return parent::getIndexerIdsToRunBefore($indexerId);
        } else {
            return $this->___callPlugins('getIndexerIdsToRunBefore', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIndexerIdsToRunAfter(string $indexerId) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIndexerIdsToRunAfter');
        if (!$pluginInfo) {
            return parent::getIndexerIdsToRunAfter($indexerId);
        } else {
            return $this->___callPlugins('getIndexerIdsToRunAfter', func_get_args(), $pluginInfo);
        }
    }
}
