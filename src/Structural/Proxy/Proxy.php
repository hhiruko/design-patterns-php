<?php

namespace Structural\Proxy;

class Proxy implements Subject
{
    private Subject $subject;

    public array $logs = [];

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
    }

    public function operation(): string
    {
        $operation = $this->subject->operation();
        $this->logs[] = $operation;
        return $operation;
    }
}