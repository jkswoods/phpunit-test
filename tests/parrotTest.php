<?php

namespace ParrotLibrary\Tests;

use PHPUnit\Framework\TestCase;
use ParrotLibrary\Parrot;

class parrotTest extends TestCase
{
    public function testParrot()
    {
        // Check the parrot is working.
        $parrot = new Parrot;
        $this->assertEquals($parrot->talk('testing'), 'testing');
    }
}