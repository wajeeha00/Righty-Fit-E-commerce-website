<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WishlistTest extends TestCase
{
    public function test0()
{
    $this->assertTrue(true);
}

public function test1()
{
    $this->assertTrue(true, 'This test ');
}

public function test2()
{
    $value = 10;
    $this->assertEquals($value, $value, 'assertion.');
}

public function test3()
{
    $data = [
        [1, 1],
        [2, 2],
        [3, 3],
    ];

    foreach ($data as $item) {
        $this->assertEquals($item[0], $item[1]);
    }
}

}
