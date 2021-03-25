<?php
namespace Magento\Customer\Model\Authentication;

/**
 * Interceptor class for @see \Magento\Customer\Model\Authentication
 */
class Interceptor extends \Magento\Customer\Model\Authentication implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Model\CustomerRegistry $customerRegistry, \Magento\Backend\App\ConfigInterface $backendConfig, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Framework\Encryption\EncryptorInterface $encryptor)
    {
        $this->___init();
        parent::__construct($customerRepository, $customerRegistry, $backendConfig, $dateTime, $encryptor);
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate($customerId, $password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'authenticate');
        return $pluginInfo ? $this->___callPlugins('authenticate', func_get_args(), $pluginInfo) : parent::authenticate($customerId, $password);
    }
}
