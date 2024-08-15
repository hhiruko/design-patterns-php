<?php

namespace Creational\FactoryMethod;

abstract class Creator
{
    abstract public function factoryMethod(): Product;

    public function criticalOperation(): string
    {
        $product = $this->factoryMethod();
        return $product->getName();
    }
}