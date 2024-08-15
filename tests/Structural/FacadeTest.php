<?php

namespace Structural;

use PHPUnit\Framework\TestCase;
use Structural\Facade\Facade;

class FacadeTest extends TestCase
{
    public function testFacade()
    {
        $facade = new Facade();
        $this->assertEquals('3NZ', $facade->operation());
    }
}