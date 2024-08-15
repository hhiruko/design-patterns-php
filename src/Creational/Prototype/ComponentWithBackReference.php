<?php

namespace Creational\Prototype;

class ComponentWithBackReference
{
    public Prototype $prototype;

    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }
}