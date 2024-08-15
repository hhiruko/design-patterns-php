<?php

namespace Creational\FactoryMethod;

class ConcreteCreatorA extends Creator
{
    public function factoryMethod(): Product
    {
        return new ProductA();
    }
}