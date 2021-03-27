<?php

namespace Packt\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{

	/** @var \Magento\Framework\View\Result\PageFactory
	 */

	protected $resultPageFactory;
	protected $objectManager;
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory
		$resultPageFactory,
		\Magento\Framework\ObjectManagerInterface $objectManager

	) {
		$this->objectManager= $objectManager;
		$this->resultPageFactory = $resultPageFactory;
		parent::__construct($context);
	}
	public function execute()
	{
		 $subscription = $this->objectManager->create("Packt\HelloWorld\Model\Subscription");
		//  var_dump($subscription);
		for ($i=0; $i <3; $i++) 
		{
			\Magento\Framework\Profiler::start('HOANGCONG1111');
			sleep(1);
			echo "Hoangcong";
		\Magento\Framework\Profiler::stop('HOANGCONG1111');
		}

	}
}
