<?php
/**
 * Unit test for \Magento\Framework\Filesystem\FileResolver
 *
 * Only one method is unit testable, other methods require integration testing.
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Filesystem\Test\Unit;

use Magento\Framework\Test\Unit\TestFramework\Helper\ObjectManager;

class FileResolverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Magento\Framework\Filesystem\FileResolver
     */
    protected $model;

    public function setUp()
    {
        $this->model = (new ObjectManager($this))->getObject('Magento\Framework\Filesystem\FileResolver');
    }

    public function testGetFilePath()
    {
        $this->assertSame('Path/To/My/Class.php', $this->model->getFilePath('Path\To\My_Class'));
    }
}
