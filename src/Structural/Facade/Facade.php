<?php

namespace Structural\Facade;

class Facade
{
    private Subsystem1 $subsystem1;
    private Subsystem2 $subsystem2;

    public function __construct(Subsystem1 $subsystem1 = null, Subsystem2 $subsystem2 = null)
    {
        $this->subsystem1 = $subsystem1 ?: new Subsystem1();
        $this->subsystem2 = $subsystem2 ?: new Subsystem2();
    }

    public function operation(): string
    {
        $result = $this->subsystem1->operation1();
        $result += $this->subsystem2->operation2();
        $result .= $this->subsystem1->operationN();
        $result .= $this->subsystem2->operationZ();
        return $result;
    }
}