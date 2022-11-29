<?php

// Report all PHP errors
error_reporting(E_ALL);

// No HTML,just plain text
header('content-type: text/plain');

echo "Bibliotheek - poging 2\n\n";

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

    function addCopy($number) {
        $copy = new Copy($this, $number);
        $this->copies[] = $copy;
    }

    function countCopies() {
        return count($this->copies);
    }

}

class Copy {

    // fields
    private $number;
    private $dateIn;
    private $dateOut;
    
    // relations
    private $book;

    // methods
    function __construct($book, $number) {
        $this->book = $book;
        $this->number = $number;
        $this->dateIn = date('Y-m-d');
    }

    function writeOff() {
        $this->dateOut = date('Y-m-d');
    }

    function __toString() {
        return "{$this->book} {$this->number}";
    }

}

$books = [];

$books[] = new Book('9789043026970', 2013, 'Computernetwerken, een top-down benadering', 'James F. Kurose, Keith W. Ross');
$books[] = new Book('9789026331404', 2016, 'Huidpijn', 'Saskia Noort');
$books[] = new Book('9789401605113', 2016, 'Ibiza', 'Kiki van Dijk');
$books[] = new Book('9789057523137', 2015, 'ICT Security', 'Boris Sondagh');
$books[] = new Book('9789086664467', 2018, 'Karakterstrijd', 'Marco Verkooijen');
$books[] = new Book('9780593078754', 2017, 'Origin', 'Dan Brown');

$books[0]->addCopy(101);
$books[0]->addCopy(102);
$books[0]->addCopy(103);
$books[0]->addCopy(104);
$books[1]->addCopy(105);
$books[1]->addCopy(106);
$books[2]->addCopy(107);
$books[2]->addCopy(108);
$books[2]->addCopy(109);
$books[3]->addCopy(110);
$books[3]->addCopy(111);
$books[3]->addCopy(112);
$books[3]->addCopy(113);

foreach ($books as $book) {
    echo $book->countCopies() . ' x ' . $book . "\n";
}
    