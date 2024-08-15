<?php

namespace Creational;

use Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testOnlyOneInstanceExists()
    {
        $singleton = Singleton::getInstance();

        $this->assertSame($singleton, Singleton::getInstance());
    }
}