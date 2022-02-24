<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use mana\Logger;
use mana\AppWithLogger;

class MyAppWithLoggerTest extends TestCase
{
    /**
     * @return void
     * @covers AppWithLogger::run
     */
    public function testThatRunLogsApplicationStartWithMock() {

        // erstellen des observer !! Dies ist der Mock !!
        $mock = $this->createMock(Logger::class);
        $mock->expects($this->once())
             ->method('log')
             ->with('Applikation mit Logger gestartet');

        // start der Applikation mit Logger und dem Observer,
        // der sicherstellt, dass die log-Methode aufgerufen wird
        $appWithLogger = new AppWithLogger();
        $appWithLogger->run($mock);

    }
}


