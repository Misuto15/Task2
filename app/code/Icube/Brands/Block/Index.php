<?php
/**
 * Copyright © 2017 Icube. All rights reserved.
 */
 
namespace Icube\Brands\Block;

class Index extends \Magento\Framework\View\Element\Template
{

    protected $_brandFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Icube\Brands\Model\BrandFactory $brandFactory
    ) {
         $this->_brandFactory = $brandFactory;
        parent::__construct($context);
    }
    
    
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    
    public function getBrands()
    {
        $collection = $this->_brandFactory->create()->getCollection();
        $collection->addFieldToFilter('is_active', \Icube\Brands\Model\Status::STATUS_ENABLED);
        $collection->setOrder('name', 'ASC');
        $charBarndArray = [];
        foreach ($collection as $brand) {
            $name = trim($brand->getName());
            $charBarndArray[strtoupper($name[0])][] = $brand;
        }
        
        return $charBarndArray;
    }
    public function getImageMediaPath()
    {
        return $this->getUrl('pub/media', ['_secure' => $this->getRequest()->isSecure()]);
    }
    
    public function getFeaturedBrands()
    {
        // $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        // $model = $objectManager->create(
        //     'Magento\Catalog\Model\ResourceModel\Eav\Attribute'
        // )->setEntityTypeId(
        //     \Magento\Catalog\Model\Product::ENTITY
        // );

        // $model->loadByCode(\Magento\Catalog\Model\Product::ENTITY,'manufacturer');
        // return $model->getOptions();

        $collection = $this->_brandFactory->create()->getCollection();
        $collection->addFieldToFilter('is_active', \Icube\Brands\Model\Status::STATUS_ENABLED);
        $collection->addFieldToFilter('featured', \Icube\Brands\Model\Status::STATUS_ENABLED);
        $collection->setOrder('sort_order', 'ASC');
        return $collection;
    }
}
