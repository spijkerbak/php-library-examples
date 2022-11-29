<?php

class Book {

    // fields
    private $isbn;
    private $year;
    private $title;
    private $author;
    
    // relations
    private $copies = [];

    // methods
    function __construct($isbn, $year, $title, $author) {
        $this->isbn = $isbn;
        $this->year = $year;
        $this->title = $title;
        $this->author = $author;
    }

    function __toString() {
        return "{$this->author} ({$this->year}). {$this->title}. ";
    }

    function getISBN() {
        return $this->isbn;
    }

    function addCopies($count) {
        for ($i = 0; $i < $count; $i++) {
            $this->copies[] = new Copy($this);
        }
    }

    function countCopies() {
        return count($this->copies);
    }

    function getCopyNumbers() {
        $numbers = [];
        foreach($this->copies as $copy) {
            $numbers[] = $copy->getNumber();
        }
        return $numbers;
    }

}
