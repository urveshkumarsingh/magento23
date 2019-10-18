<?php
namespace Magento\CatalogUrlRewrite\Model\Storage\DynamicStorage;

/**
 * Interceptor class for @see \Magento\CatalogUrlRewrite\Model\Storage\DynamicStorage
 */
class Interceptor extends \Magento\CatalogUrlRewrite\Model\Storage\DynamicStorage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\UrlRewrite\Service\V1\Data\UrlRewriteFactory $urlRewriteFactory, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\App\ResourceConnection $resource, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Catalog\Model\ResourceModel\ProductFactory $productFactory, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($urlRewriteFactory, $dataObjectHelper, $resource, $config, $productFactory, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteByData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteByData');
        if (!$pluginInfo) {
            return parent::deleteByData($data);
        } else {
            return $this->___callPlugins('deleteByData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function findAllByData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'findAllByData');
        if (!$pluginInfo) {
            return parent::findAllByData($data);
        } else {
            return $this->___callPlugins('findAllByData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function findOneByData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'findOneByData');
        if (!$pluginInfo) {
            return parent::findOneByData($data);
        } else {
            return $this->___callPlugins('findOneByData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function replace(array $urls)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'replace');
        if (!$pluginInfo) {
            return parent::replace($urls);
        } else {
            return $this->___callPlugins('replace', func_get_args(), $pluginInfo);
        }
    }
}
