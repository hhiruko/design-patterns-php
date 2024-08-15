<?php

namespace Structural;

use PHPUnit\Framework\TestCase;
use Structural\Proxy\Proxy;
use Structural\Proxy\RealSubject;

class ProxyTest extends TestCase
{

    public function testProxyAndRealSubjectOperations()
    {
        $subject = new RealSubject();
        $proxy = new Proxy($subject);

        $this->assertEquals($subject->operation(), $proxy->operation());
        $this->assertTrue(in_array($subject->operation(), $proxy->logs));
    }

}