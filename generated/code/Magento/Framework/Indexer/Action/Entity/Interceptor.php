<?php
namespace Magento\Framework\Indexer\Action\Entity;

/**
 * Interceptor class for @see \Magento\Framework\Indexer\Action\Entity
 */
class Interceptor extends \Magento\Framework\Indexer\Action\Entity implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\Framework\App\ResourceConnection\SourceFactory $sourceFactory, \Magento\Framework\Indexer\HandlerPool $handlerPool, \Magento\Framework\Indexer\SaveHandlerFactory $saveHandlerFactory, \Magento\Framework\Indexer\FieldsetPool $fieldsetPool, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Framework\Indexer\IndexStructureInterface $indexStructure, $data = [])
    {
        $this->___init();
        parent::__construct($resource, $sourceFactory, $handlerPool, $saveHandlerFactory, $fieldsetPool, $string, $indexStructure, $data);
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
