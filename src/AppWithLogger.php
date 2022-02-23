<?php

namespace mana;

class AppWithLogger
{
    public function run(Logger $logger)
    {
        // Meldung übe den Start der Applikation
        $logger->log('Applikation mit Logger gestartet');
    }
}