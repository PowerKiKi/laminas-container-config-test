<?php
/**
 * @see       https://github.com/zendframework/zend-container-test for the canonical source repository
 * @copyright Copyright (c) 2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-container-test/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace ZendTest\ContainerTest;

use Psr\Container\ContainerInterface;
use Zend\ServiceManager\ServiceManager;

class ServiceManagerTest extends BaseContainerTest
{
    public function createContainer(array $config) : ContainerInterface
    {
        return new ServiceManager($config);
    }
}
