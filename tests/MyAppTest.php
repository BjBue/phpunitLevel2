<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use mana\App;


class MyAppTest extends TestCase
{

    /** @var myApp */
    public $myApp;

    public function setUp(): void
    {
        parent::setUp();

        $this->myApp = new App();
    }

    /**
     * @return void
     * @covers App::sayHello
     */
    public function testMyWebsite(): void
    {
        $expect = $this->myApp->sayHello();

        $this->assertEquals("Hello!", $expect);
    }

}
