<?php

namespace Structural\Proxy;

class RealSubject implements Subject
{
    public function operation(): string
    {
        return 'RealSubject';
    }
}