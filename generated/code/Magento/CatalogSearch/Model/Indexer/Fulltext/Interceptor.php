<?php
namespace Magento\CatalogSearch\Model\Indexer\Fulltext;

/**
 * Interceptor class for @see \Magento\CatalogSearch\Model\Indexer\Fulltext
 */
class Interceptor extends \Magento\CatalogSearch\Model\Indexer\Fulltext implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogSearch\Model\Indexer\Fulltext\Action\FullFactory $fullActionFactory, \Magento\CatalogSearch\Model\Indexer\IndexerHandlerFactory $indexerHandlerFactory, \Magento\CatalogSearch\Model\ResourceModel\Fulltext $fulltextResource, \Magento\CatalogSearch\Model\Indexer\IndexSwitcherInterface $indexSwitcher, \Magento\CatalogSearch\Model\Indexer\Scope\StateFactory $indexScopeStateFactory, \Magento\Framework\Indexer\DimensionProviderInterface $dimensionProvider, array $data, ?\Magento\Indexer\Model\ProcessManager $processManager = null)
    {
        $this->___init();
        parent::__construct($fullActionFactory, $indexerHandlerFactory, $fulltextResource, $indexSwitcher, $indexScopeStateFactory, $dimensionProvider, $data, $processManager);
    }

    /**
     * {@inheritdoc}
     */
    public function execute($entityIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($entityIds);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeByDimensions(array $dimensions, ?\Traversable $entityIds = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeByDimensions');
        if (!$pluginInfo) {
            return parent::executeByDimensions($dimensions, $entityIds);
        } else {
            return $this->___callPlugins('executeByDimensions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        if (!$pluginInfo) {
            return parent::executeFull();
        } else {
            return $this->___callPlugins('executeFull', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        if (!$pluginInfo) {
            return parent::executeList($ids);
        } else {
            return $this->___callPlugins('executeList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        if (!$pluginInfo) {
            return parent::executeRow($id);
        } else {
            return $this->___callPlugins('executeRow', func_get_args(), $pluginInfo);
        }
    }
}
