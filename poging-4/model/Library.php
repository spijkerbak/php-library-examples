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

    function showInventory() {
        foreach ($this->books as $book) {
            echo $book . "\n";
            $numbers = $book->getActiveCopyNumbers();
            $count = count($numbers);
            switch ($count) {
                case 0:
                    echo "  geen exemplaren";
                    break;
                case 1:
                    echo "  $count exemplaar: ";
                    break;
                default:
                    echo "  $count exemplaren: ";
                    break;
            }
            echo implode(', ', $numbers) . "\n\n";
        }
    }

}
