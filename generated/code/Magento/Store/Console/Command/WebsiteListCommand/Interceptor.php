<?php
namespace Magento\Store\Console\Command\WebsiteListCommand;

/**
 * Interceptor class for @see \Magento\Store\Console\Command\WebsiteListCommand
 */
class Interceptor extends \Magento\Store\Console\Command\WebsiteListCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Api\WebsiteRepositoryInterface $websiteManagement)
    {
        $this->___init();
        parent::__construct($websiteManagement);
    }

    /**
     * {@inheritdoc}
     */
    public function ignoreValidationErrors()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'ignoreValidationErrors');
        if (!$pluginInfo) {
            return parent::ignoreValidationErrors();
        } else {
            return $this->___callPlugins('ignoreValidationErrors', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setApplication(?\Symfony\Component\Console\Application $application = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setApplication');
        if (!$pluginInfo) {
            return parent::setApplication($application);
        } else {
            return $this->___callPlugins('setApplication', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setHelperSet(\Symfony\Component\Console\Helper\HelperSet $helperSet)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHelperSet');
        if (!$pluginInfo) {
            return parent::setHelperSet($helperSet);
        } else {
            return $this->___callPlugins('setHelperSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHelperSet()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHelperSet');
        if (!$pluginInfo) {
            return parent::getHelperSet();
        } else {
            return $this->___callPlugins('getHelperSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getApplication()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApplication');
        if (!$pluginInfo) {
            return parent::getApplication();
        } else {
            return $this->___callPlugins('getApplication', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEnabled');
        if (!$pluginInfo) {
            return parent::isEnabled();
        } else {
            return $this->___callPlugins('isEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        if (!$pluginInfo) {
            return parent::run($input, $output);
        } else {
            return $this->___callPlugins('run', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCode(callable $code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCode');
        if (!$pluginInfo) {
            return parent::setCode($code);
        } else {
            return $this->___callPlugins('setCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function mergeApplicationDefinition($mergeArgs = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'mergeApplicationDefinition');
        if (!$pluginInfo) {
            return parent::mergeApplicationDefinition($mergeArgs);
        } else {
            return $this->___callPlugins('mergeApplicationDefinition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDefinition($definition)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDefinition');
        if (!$pluginInfo) {
            return parent::setDefinition($definition);
        } else {
            return $this->___callPlugins('setDefinition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefinition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefinition');
        if (!$pluginInfo) {
            return parent::getDefinition();
        } else {
            return $this->___callPlugins('getDefinition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNativeDefinition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNativeDefinition');
        if (!$pluginInfo) {
            return parent::getNativeDefinition();
        } else {
            return $this->___callPlugins('getNativeDefinition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addArgument($name, $mode = null, $description = '', $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addArgument');
        if (!$pluginInfo) {
            return parent::addArgument($name, $mode, $description, $default);
        } else {
            return $this->___callPlugins('addArgument', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addOption($name, $shortcut = null, $mode = null, $description = '', $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOption');
        if (!$pluginInfo) {
            return parent::addOption($name, $shortcut, $mode, $description, $default);
        } else {
            return $this->___callPlugins('addOption', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setName');
        if (!$pluginInfo) {
            return parent::setName($name);
        } else {
            return $this->___callPlugins('setName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setProcessTitle($title)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProcessTitle');
        if (!$pluginInfo) {
            return parent::setProcessTitle($title);
        } else {
            return $this->___callPlugins('setProcessTitle', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        if (!$pluginInfo) {
            return parent::getName();
        } else {
            return $this->___callPlugins('getName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setHidden($hidden)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHidden');
        if (!$pluginInfo) {
            return parent::setHidden($hidden);
        } else {
            return $this->___callPlugins('setHidden', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isHidden()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isHidden');
        if (!$pluginInfo) {
            return parent::isHidden();
        } else {
            return $this->___callPlugins('isHidden', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDescription');
        if (!$pluginInfo) {
            return parent::setDescription($description);
        } else {
            return $this->___callPlugins('setDescription', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDescription');
        if (!$pluginInfo) {
            return parent::getDescription();
        } else {
            return $this->___callPlugins('getDescription', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setHelp($help)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHelp');
        if (!$pluginInfo) {
            return parent::setHelp($help);
        } else {
            return $this->___callPlugins('setHelp', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHelp()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHelp');
        if (!$pluginInfo) {
            return parent::getHelp();
        } else {
            return $this->___callPlugins('getHelp', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessedHelp()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProcessedHelp');
        if (!$pluginInfo) {
            return parent::getProcessedHelp();
        } else {
            return $this->___callPlugins('getProcessedHelp', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAliases($aliases)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAliases');
        if (!$pluginInfo) {
            return parent::setAliases($aliases);
        } else {
            return $this->___callPlugins('setAliases', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAliases');
        if (!$pluginInfo) {
            return parent::getAliases();
        } else {
            return $this->___callPlugins('getAliases', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSynopsis($short = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSynopsis');
        if (!$pluginInfo) {
            return parent::getSynopsis($short);
        } else {
            return $this->___callPlugins('getSynopsis', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addUsage($usage)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUsage');
        if (!$pluginInfo) {
            return parent::addUsage($usage);
        } else {
            return $this->___callPlugins('addUsage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUsages()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUsages');
        if (!$pluginInfo) {
            return parent::getUsages();
        } else {
            return $this->___callPlugins('getUsages', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHelper($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHelper');
        if (!$pluginInfo) {
            return parent::getHelper($name);
        } else {
            return $this->___callPlugins('getHelper', func_get_args(), $pluginInfo);
        }
    }
}
