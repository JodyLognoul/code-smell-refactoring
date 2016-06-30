<?php
use PHPUnit\Framework\TestCase;

class Person {
    public function __construct($name, $officeAreaCode, $officeNumber)
    {
        $this->name = $name;
        $this->officeAreaCode = $officeAreaCode;
        $this->officeNumber = $officeNumber;
    }

    public function details()
    {
        return $this->name . ': ' . $this->officeAreaCode . '/' . $this->officeNumber;
    }
}
//
class Telephone
{
    public function __construct($officeAreaCode, $officeNumber)
    {
        $this->officeAreaCode = $officeAreaCode;
        $this->officeNumber = $officeNumber;
    }

    public function getFullNumber()
    {
        return $this->officeAreaCode . '/' . $this->officeNumber;
    }
}

class RefactoredPerson {
    public function __construct($name, Telephone $tel)
    {
        $this->name = $name;
        $this->tel = $tel;
    }

    public function details()
    {
        return $this->name . ': ' . $this->tel->getFullNumber();
    }
}

Class PersonTest extends TestCase {
    public function testGetTelephoneNumberDetail()
    {
        $this->assertEquals(
            "Aria Stark: 043/79797900",
            (new Person('Aria Stark', '043', '79797900'))->details()
        );
        $this->assertEquals(
            "Aria Stark: 043/79797900",
            (new RefactoredPerson('Aria Stark', new Telephone('043', '79797900')))->details()
        );
    }
}