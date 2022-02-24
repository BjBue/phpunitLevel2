<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use mana\Answer;

class AnswerTest extends TestCase
{
    /**
     * @return void
     * @covers Answer::getYesNoAnswer
     */
    public function testYesNoAnswer() {
//        Fehler zeigen den phpUnit selbst korrigiert!
//        $stub = $this->getMockBuilder(Answer::class)
//            ->addMethods(["readUserInput"])
//            ->getMock();

        $stub = $this->getMockBuilder(Answer::class)
            ->onlyMethods(["readUserInput"])
            ->getMock();

        // Eine Alternative zum Einrichten einer Rückrufmethode kann darin bestehen,
        // eine Liste gewünschter Rückgabewerte anzugeben.
        // Das kann mit der $this->onConsecutiveCalls()-Methode gemacht werden
        $stub->method('readUserInput')
            ->will($this->onConsecutiveCalls("yes", "junk", "no", "Doof"));

        // stub gibt "yes" zurück
        $answer = $stub->getYesNoAnswer("Student? (yes/no)");
        $this->assertSame("yes",$answer);

        // stub gibt Null bei dem Eingabewert "junk" zurück
        $answer = $stub->getYesNoAnswer("Blödmann? (Hallodriho/Yehaw!)");
        $this->assertNull($answer);

        // stub gibt "no" zurück
        $answer = $stub->getYesNoAnswer("Depp? (Bim/Bam)");
        $this->assertSame("no",$answer);

        // stub gibt Doof zurück was ein Null auslöst
        $answer = $stub->getYesNoAnswer("Bambam? (Bam/Bam)");
        $this->assertNull($answer);

    }

}
