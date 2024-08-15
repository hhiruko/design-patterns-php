<?php

namespace Creational;

use Creational\Builder\Builder;
use Creational\Builder\ConcreteBuilder;
use Creational\Builder\Director;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    private Builder $builder;
    private Director $director;

    protected function setUp(): void
    {
        $this->builder = new ConcreteBuilder();
        $this->director = new Director();
        $this->director->setBuilder($this->builder);
    }

    public function testDirectorBuildsMinimalProduct()
    {
        $this->director->buildMinimal();
        $this->assertEquals(['PartA'], $this->builder->getProduct()->parts);
    }

    public function testDirectorBuildFullProduct()
    {
        $this->director->buildFull();
        $this->assertEquals(['PartA', 'PartB', 'PartC'], $this->builder->getProduct()->parts);
    }

    public function testBuilderBuildCustomProduct()
    {
        $this->builder->producePartB();
        $this->builder->producePartC();
        $this->assertEquals(['PartB', 'PartC'], $this->builder->getProduct()->parts);
    }
}