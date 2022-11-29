<?php

class Library {

    private $books = []; // all books, indexed by isbn
    private $copies = []; // all copies, indexed by copyNumber

    function addBook($book) {
        $isbn = $book->getISBN();
        $this->books[$isbn] = $book;
    }

    function getBook($isbn) {
        return $this->books[$isbn];
    }

    function writeOff($copyNumber) {
        $copy = $this->copies[$copyNumber];
        $copy->writeOff();
    }

    function addCopy($copy) {
        $copyNumber = $copy->getNumber();
        $this->copies[$copyNumber] = $copy;
    }

    function getBooks() {
        return $this->books;
    }

    function init() {
        $this->addBook(new Book($this, '9789043026970', 2013, 'Computernetwerken, een top-down benadering', 'James F. Kurose, Keith W. Ross'));
        $this->addBook(new Book($this, '9789026331404', 2016, 'Huidpijn', 'Saskia Noort'));
        $this->addBook(new Book($this, '9789401605113', 2016, 'Ibiza', 'Kiki van Dijk'));
        $this->addBook(new Book($this, '9789057523137', 2015, 'ICT Security', 'Boris Sondagh'));
        $this->addBook(new Book($this, '9789086664467', 2018, 'Karakterstrijd', 'Marco Verkooijen'));
        $this->addBook(new Book($this, '9780593078754', 2017, 'Origin', 'Dan Brown'));

        $this->getBook('9789043026970')->addCopies(1);
        $this->getBook('9789026331404')->addCopies(3);
        $this->getBook('9789401605113')->addCopies(4);
        $this->getBook('9789057523137')->addCopies(3);
        $this->getBook('9789086664467')->addCopies(10);
        $this->getBook('9780593078754')->addCopies(2);
    }

}
