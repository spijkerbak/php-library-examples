<?php

class Library
{

    private $books = []; // array of Book objects

    function addBook(Book $book): void
    {
        $isbn = $book->getISBN();
        $this->books[$isbn] = $book;
    }

    function getBook(string $isbn): ?Book
    {
        return $this->books[$isbn];
    }

    function showInventory(): void
    {
        foreach ($this->books as $book) {
            echo $book . "\n";
            $numbers = $book->getCopyNumbers();
            $count = count($numbers);
            echo "  ";
            switch ($count) {
                case 0:
                    echo "geen exemplaren";
                    break;
                case 1:
                    echo $count . " exemplaar: ";
                    break;
                default:
                    echo $count . " exemplaren: ";
                    break;
            }
            echo implode(', ', $numbers) . "\n\n";
        }
    }

}