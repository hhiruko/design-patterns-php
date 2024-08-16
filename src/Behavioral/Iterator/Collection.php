<?php

namespace Behavioral\Iterator;

use Traversable;

class Collection implements \IteratorAggregate
{
    private array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(string $item): void
    {
        $this->items[] = $item;
    }

    public function getIterator(): Traversable
    {
        return new Iterator($this);
    }

    public function getReverseIterator(): Traversable
    {
        return new Iterator($this, true);
    }
}