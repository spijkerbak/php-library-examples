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
        echo "<table>\n";
        foreach ($this->books as $book) {
            $numbers = $book->getCopyNumbers();
            $count = count($numbers);
            echo "<tr><td>$book</td><td>";
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
            echo "</td><td>";
            echo implode(', ', $numbers) . "\n\n";
            echo "</td></tr>\n";
        }
        echo "</table>\n";
    }

}