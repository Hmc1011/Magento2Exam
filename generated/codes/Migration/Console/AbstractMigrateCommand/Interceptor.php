<?php
namespace Migration\Console\AbstractMigrateCommand;

/**
 * Interceptor class for @see \Migration\Console\AbstractMigrateCommand
 */
class Interceptor extends \Migration\Console\AbstractMigrateCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Migration\Config $config, \Migration\Logger\Manager $logManager, \Migration\App\Progress $progress)
    {
        $this->___init();
        parent::__construct($config, $logManager, $progress);
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
