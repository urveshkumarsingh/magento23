<?php
namespace Magento\Framework\App\Http\Context;

/**
 * Interceptor class for @see \Magento\Framework\App\Http\Context
 */
class Interceptor extends \Magento\Framework\App\Http\Context implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $data = [], array $default = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($data, $default, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function setValue($name, $value, $default)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setValue');
        if (!$pluginInfo) {
            return parent::setValue($name, $value, $default);
        } else {
            return $this->___callPlugins('setValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsValue($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsValue');
        if (!$pluginInfo) {
            return parent::unsValue($name);
        } else {
            return $this->___callPlugins('unsValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValue($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValue');
        if (!$pluginInfo) {
            return parent::getValue($name);
        } else {
            return $this->___callPlugins('getValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData();
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVaryString()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVaryString');
        if (!$pluginInfo) {
            return parent::getVaryString();
        } else {
            return $this->___callPlugins('getVaryString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray();
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }
}
