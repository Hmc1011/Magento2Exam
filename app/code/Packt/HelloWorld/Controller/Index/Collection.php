<?php

namespace Packt\HelloWorld\Controller\Index;

class Collection extends
\Magento\Framework\App\Action\Action
{
    public function execute()
    {

        $productCollection = $this->_objectManager
            ->create('Magento\Catalog\Model\ResourceModel\Product\Collection')
            ->addAttributeToSelect([
                'name',
                'price',
                'image'
            ])->addAttributeToFilter('name',  array('like'=> '%product2%' )  ) ;

        $output = '';
       $debug=   $productCollection->setDataToAll('price', 20);

        echo "<h1> ".var_dump($debug===$productCollection). "</h1>";
        echo "<pre>";

        foreach ($productCollection as $product) {
            $output .=  var_dump ($product->debug()) ;
        }
        $this->getResponse()->setBody($output);
    }
}
