<?php


namespace Tests\Feature;

use Test\TestCase;

class OtherBasicTest extends TestCase
{
    /**
     *  test examples
     */
    public function testNumericTest()
    {
        assertFalse(1 == 2);
        assert(10 == 2 * 5);
    }
}