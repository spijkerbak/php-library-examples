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
?>
<table>
    <tr>
        <th>boek</th>
        <th>isbn</th>
        <th>aantal</th>
        <th>nummers</th>
    </tr>
    <?php
        foreach ($this->books as $book) {
            $numbers = $book->getCopyNumbers();
            $count = count($numbers);
            echo "<tr>";
            echo "<td>$book</td>";
            echo "<td>{$book->getISBN()}</td>";
            echo '<td class="number">';
            switch ($count) {
                case 0:
                    echo '';
                    break;
                default:
                    echo $count;
                    break;
            }
            echo "</td>";
            echo "<td>";
            echo implode(', ', $numbers);
            echo "</td>";
            echo "</tr>\n";
        }
        echo "</table>\n";
    }

}