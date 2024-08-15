<?php

namespace Creational\FactoryMethod;

class ProductA implements Product
{
    public function getName(): string
    {
        return 'ProductA';
    }
}