<?php

namespace Creational\FactoryMethod;

class ConcreteCreatorB extends Creator
{
    public function factoryMethod(): Product
    {
        return new ProductB();
    }
}