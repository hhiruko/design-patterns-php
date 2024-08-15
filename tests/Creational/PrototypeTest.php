<?php

namespace Creational;

use Creational\Prototype\ComponentWithBackReference;
use Creational\Prototype\Prototype;
use DateTime;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    private Prototype $prototype;
    private Prototype $clone;

    protected function setUp(): void
    {
        $prototype = new Prototype();
        $prototype->primitive = 'Prototype';
        $prototype->component = new DateTime();
        $prototype->circularReference = new ComponentWithBackReference($prototype);
        $clone = clone $prototype;

        $this->prototype = $prototype;
        $this->clone = $clone;
    }

    /**
     * In reality, we do not need this test, because PHP handles cloning itself.
     * But I will leave it for the sake of structure.
     */
    public function testPrimitiveCanBeCloned()
    {
        $this->assertEquals($this->prototype->primitive, $this->clone->primitive);
    }

    public function testComponentCanBeCloned()
    {
        $this->assertEquals($this->prototype->component, $this->clone->component);
    }

    public function testCircularReferencesIsLinkedToClone()
    {
        $this->assertNotSame($this->prototype->circularReference->prototype, $this->clone->circularReference->prototype);
        $this->assertSame($this->clone, $this->clone->circularReference->prototype);
    }
}