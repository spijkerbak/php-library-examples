<?php

class Book {

    // fields
    private $isbn;
    private $year;
    private $title;
    private $author;
    // relations
    private $copies = [];
    private $library; // book knows library to register copies

    // constructor
    function __construct($library, $isbn, $year, $title, $author) {
        $this->library = $library;
        $this->isbn = $isbn;
        $this->year = $year;
        $this->title = $title;
        $this->author = $author;
    }

    function getISBN() {
        return $this->isbn;
    }

    function addCopies($count) {
        for ($i = 0; $i < $count; $i++) {
            $copy = new Copy($this);
            $this->copies[] = $copy;
            $this->library->addCopy($copy);
        }
    }

    function getActiveCopyNumbers() {
        $numbers = [];
        foreach ($this->copies as $copy) {
            if (!$copy->isWrittenOff()) {
                $numbers[] = $copy->getNumber();
            }
        }
        return $numbers;
    }

    // 'view' methods
    static function getHeaderNames() {
        return ['Schrijver', 'Jaar', 'Titel', 'ISBN'];
    }

    function getValues() {
        return [$this->author, $this->year, $this->title, $this->isbn];
    }

}
