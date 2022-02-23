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

        $stub->method('readUserInput')
            ->will($this->onConsecutiveCalls("yes","junk"));

        // stub gibt "yes" zurück
        $answer = $stub->getYesNoAnswer("Student? (yes/no)");
        $this->assertSame("yes",$answer);

        // stub gibt Null bei dem Eingabewert "junk" zurück
        $answer = $stub->getYesNoAnswer("Student? (yes/no)");
        $this->assertNull($answer);

    }

}
