<?php

class Copy {

    private static $copyNumber = 1000; // first unique copy number
    // fields
    private $number;
    private $dateIn;
    private $dateOut;
    // relations
    private $book;

    function __construct($book) {
        $this->book = $book;
        $this->dateIn = date('Y-m-d');
        $this->dateOut = null;
        $this->number = self::$copyNumber;
        self::$copyNumber++;
    }

    function writeOff() {
        $this->dateOut = date('Y-m-d');
    }

    function isWrittenOff() {
        return $this->dateOut !== null;
    }
    
    function getNumber() {
        return $this->number;
    }

    function __toString() {
        return "{$this->book} {$this->number}";
    }

}
