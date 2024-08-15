<?php

namespace Creational\FactoryMethod;

class ProductB implements Product
{
    public function getName(): string
    {
        return 'ProductB';
    }
}