<?php

declare(strict_types=1);

namespace  mana;

class Answer
{
    // Liest von der Konsole die Antwort ein und gibt diese bei Yes oder No zurück.
    // ansonsten wird null zurückgegeben
    public function getYesNoAnswer($prompt) {

        $answer = $this->readUserInput($prompt);

        $answer = strtolower($answer);
        if (($answer === "yes") || ($answer === "no")) {
            return $answer;
        } else {
            return null;
        }

    }

    // einfacher konsolenaufruf mit der antwort
    public function readUserInput($prompt) {
        return readline($prompt);
    }

}
