<?php

class Library
{

    private $books = []; // all books, indexed by isbn
    private $copies = []; // all copies, indexed by copyNumber

    function addBook(Book $book): void
    {
        $isbn = $book->getISBN();
        $this->books[$isbn] = $book;
    }

    function getBook(string $isbn): Book
    {
        return $this->books[$isbn];
    }

    function writeOff(int $copyNumber): void
    {
        $copy = $this->copies[$copyNumber];
        $copy->writeOff();
    }

    function addCopy(Copy $copy): void
    {
        $copyNumber = $copy->getNumber();
        $this->copies[$copyNumber] = $copy;
    }

    function showInventory(): void
    {
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