<?php

class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        $this->bot
            ->receives('Hi')
            ->assertReply('Hello!');
    }
}
