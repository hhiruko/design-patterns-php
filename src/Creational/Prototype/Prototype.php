<?php

namespace Creational\Prototype;

use DateTime;

class Prototype
{
    public string $primitive;
    public DateTime $component;
    public ComponentWithBackReference $circularReference;

    public function __clone()
    {
        $this->circularReference = clone $this->circularReference;
        $this->circularReference->prototype = $this;
    }
}