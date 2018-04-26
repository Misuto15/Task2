<?php
/**
 * Copyright 2018 aheadWorks. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace Aheadworks\Blog\Test\Unit\Model\Source\Config\Related;

use Aheadworks\Blog\Model\Source\Config\Related\BlockPosition;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

/**
 * Test \Aheadworks\Blog\Model\Source\Status
 */
class BlockPositionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var BlockPosition|\PHPUnit_Framework_MockObject_MockObject
     */
    private $model;

    /**
     * Init mocks for tests
     *
     * @return void
     */
    public function setUp()
    {
        $objectManager = new ObjectManager($this);
        $this->model = $objectManager->getObject(
            BlockPosition::class,
            []
        );
    }

    /**
     * Testing of toOptionArray method
     */
    public function testToOptionArray()
    {
        $this->assertTrue(is_array($this->model->toOptionArray()));
    }
}
