<?php

namespace Creational;

use Creational\FactoryMethod\ConcreteCreatorA;
use Creational\FactoryMethod\ConcreteCreatorB;
use Creational\FactoryMethod\Creator;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{

    public function testCreateProductAB()
    {
        $this->assertEquals('ProductA', $this->criticalOperation(new ConcreteCreatorA()));
        $this->assertEquals('ProductB', $this->criticalOperation(new ConcreteCreatorB()));
    }

    private function criticalOperation(Creator $creator): string
    {
        return $creator->criticalOperation();
    }

}