<?php
namespace Migration\Console\MigrateDeltaCommand;

/**
 * Interceptor class for @see \Migration\Console\MigrateDeltaCommand
 */
class Interceptor extends \Migration\Console\MigrateDeltaCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Migration\Config $config, \Migration\Logger\Manager $logManager, \Migration\App\Progress $progress, \Migration\Mode\Delta $deltaMode)
    {
        $this->___init();
        parent::__construct($config, $logManager, $progress, $deltaMode);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
