<?php
namespace Packt\HelloWorld\Test\Unit\Block\Adminhtml\Subscription;
use PHPUnit\Framework\TestCase;
use Magento\Framework\App\Bootstrap;
use Magento\Framework\App\Http;
use phpDocumentor\Reflection\Types\Iterable_;

class GridTest extends TestCase {
/**
* @var \Packt\HelloWorld\Block\Adminhtml\Subscription\Grid
*/
protected $block;
protected function setUp():void {
    Bootstrap::create(BP, $_SERVER)->createApplication(Http::class);
    $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
    $this->block = $objectManager->getObject('Packt\HelloWorld\Block\Adminhtml\Subscription\Grid'); 
    // $target= $objectManager->getObject('Psr\Log\LoggerInterface')->debug( print_r($this->block->debug(), true ));
    // var_dump($this->block->debug());
}
protected function tearDown():void {
    $this->block = null;
}
public function testDecorateStatus() {
    $this->assertTrue( str_contains($this->block->decorateStatus('pending'),'grid-severity-minor'));
    $this->assertTrue( str_contains($this->block->decorateStatus('declined'),'grid-severity-critical'));
    $this->assertTrue( str_contains($this->block->decorateStatus(6),'grid-severity-critical'));
    $this->assertTrue( str_contains($this->block->decorateStatus(null),'grid-severity-critical'));

}
}