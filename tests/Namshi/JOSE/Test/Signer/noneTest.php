<?php

namespace Namshi\JOSE\Test\Signer;

use \PHPUnit_Framework_TestCase as TestCase;
use Namshi\JOSE\Signer\none;

class noneTest extends TestCase
{
    public function testVerificationWorksProperly()
    {
        $signer = new none;

        $this->assertTrue($signer->verify('bar', '', 'aaa'));
    }

    public function testSigningWorksProperly()
    {
        $signer = new none;
        $signature = $signer->sign('aaa', 'foo');

        $this->assertTrue($signature === '');
    }
}
