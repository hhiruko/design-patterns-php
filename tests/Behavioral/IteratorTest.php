<?php

namespace Behavioral;

use Behavioral\Iterator\Collection;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testCanIterate()
    {
        $collection = new Collection();
        $collection->addItem('First');
        $collection->addItem('Second');
        $collection->addItem('Last');

        $output = [];
        foreach ($collection->getReverseIterator() as $item){
            $output[] = $item;
        }

        $this->assertEquals(['Last', 'Second', 'First'], $output);
    }
}