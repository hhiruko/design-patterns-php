<?php

namespace Creational;

use Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testOnlyOneInstanceExists()
    {
        $singleton = Singleton::getInstance();
        $singleton->setConfig('first singleton');

        $this->assertSame($singleton->getConfig(), Singleton::getInstance()->getConfig());
    }
}