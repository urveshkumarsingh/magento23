<?php
namespace Magento\Framework\App\State;

/**
 * Interceptor class for @see \Magento\Framework\App\State
 */
class Interceptor extends \Magento\Framework\App\State implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Config\ScopeInterface $configScope, $mode = 'default')
    {
        $this->___init();
        parent::__construct($configScope, $mode);
    }

    /**
     * {@inheritdoc}
     */
    public function getMode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMode');
        if (!$pluginInfo) {
            return parent::getMode();
        } else {
            return $this->___callPlugins('getMode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsDownloader($flag = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsDownloader');
        if (!$pluginInfo) {
            return parent::setIsDownloader($flag);
        } else {
            return $this->___callPlugins('setIsDownloader', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAreaCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAreaCode');
        if (!$pluginInfo) {
            return parent::setAreaCode($code);
        } else {
            return $this->___callPlugins('setAreaCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAreaCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAreaCode');
        if (!$pluginInfo) {
            return parent::getAreaCode();
        } else {
            return $this->___callPlugins('getAreaCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isAreaCodeEmulated()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAreaCodeEmulated');
        if (!$pluginInfo) {
            return parent::isAreaCodeEmulated();
        } else {
            return $this->___callPlugins('isAreaCodeEmulated', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function emulateAreaCode($areaCode, $callback, $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'emulateAreaCode');
        if (!$pluginInfo) {
            return parent::emulateAreaCode($areaCode, $callback, $params);
        } else {
            return $this->___callPlugins('emulateAreaCode', func_get_args(), $pluginInfo);
        }
    }
}
