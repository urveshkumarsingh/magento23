<?php
namespace Magento\Widget\Model\Widget;

/**
 * Interceptor class for @see \Magento\Widget\Model\Widget
 */
class Interceptor extends \Magento\Widget\Model\Widget implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Escaper $escaper, \Magento\Widget\Model\Config\Data $dataStorage, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\View\Asset\Source $assetSource, \Magento\Framework\View\FileSystem $viewFileSystem, \Magento\Widget\Helper\Conditions $conditionsHelper)
    {
        $this->___init();
        parent::__construct($escaper, $dataStorage, $assetRepo, $assetSource, $viewFileSystem, $conditionsHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function getWidgetByClassType($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWidgetByClassType');
        if (!$pluginInfo) {
            return parent::getWidgetByClassType($type);
        } else {
            return $this->___callPlugins('getWidgetByClassType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigAsXml($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigAsXml');
        if (!$pluginInfo) {
            return parent::getConfigAsXml($type);
        } else {
            return $this->___callPlugins('getConfigAsXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigAsObject($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigAsObject');
        if (!$pluginInfo) {
            return parent::getConfigAsObject($type);
        } else {
            return $this->___callPlugins('getConfigAsObject', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWidgets($filters = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWidgets');
        if (!$pluginInfo) {
            return parent::getWidgets($filters);
        } else {
            return $this->___callPlugins('getWidgets', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWidgetsArray($filters = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWidgetsArray');
        if (!$pluginInfo) {
            return parent::getWidgetsArray($filters);
        } else {
            return $this->___callPlugins('getWidgetsArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWidgetDeclaration($type, $params = [], $asIs = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWidgetDeclaration');
        if (!$pluginInfo) {
            return parent::getWidgetDeclaration($type, $params, $asIs);
        } else {
            return $this->___callPlugins('getWidgetDeclaration', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPlaceholderImageUrl($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPlaceholderImageUrl');
        if (!$pluginInfo) {
            return parent::getPlaceholderImageUrl($type);
        } else {
            return $this->___callPlugins('getPlaceholderImageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPlaceholderImageUrls()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPlaceholderImageUrls');
        if (!$pluginInfo) {
            return parent::getPlaceholderImageUrls();
        } else {
            return $this->___callPlugins('getPlaceholderImageUrls', func_get_args(), $pluginInfo);
        }
    }
}
