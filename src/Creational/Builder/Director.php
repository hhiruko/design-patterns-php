<?php

namespace Creational\Builder;

class Director
{
    private Builder $builder;

    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildMinimal(): void
    {
        $this->builder->producePartA();
    }

    public function buildFull(): void
    {
        $this->builder->producePartA();
        $this->builder->producePartB();
        $this->builder->producePartC();
    }
}