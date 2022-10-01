<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    public function testView()
    {
        $this->get('/hello')
            ->assertSeeText('Hello Daffa');

        $this->get('/hello-again')
            ->assertSeeText('Hello Daffa');
    }

    public function testNested()
    {
        $this->get('/hello-world')
            ->assertSeeText('World Daffa');
    }

    public function testTemplate()
    {
        $this->view('hello', ['name' => 'Daffa'])
            ->assertSeeText('Hello Daffa');

        $this->view('hello.world', ['name' => 'Daffa'])
            ->assertSeeText('World Daffa');
    }


}
