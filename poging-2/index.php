<!DOCTYPE html>
<?php

// Report all PHP errors
error_reporting(-1);
ini_set('display_errors', -1);

class Book
{

    // fields
    private string $isbn;
    private string $year;
    private string $title;
    private string $author;

    // relations
    private $copies = [];

    // methods
    function __construct(string $isbn, string $year, string $title, string $author)
    {
        $this->isbn = $isbn;
        $this->year = $year;
        $this->title = $title;
        $this->author = $author;
    }

    function __toString(): string
    {
        return "{$this->author} ({$this->year}). {$this->title}. ";
    }

    function addCopy(int $number): void
    {
        $copy = new Copy($this, $number);
        $this->copies[] = $copy;
    }

    function countCopies(): int
    {
        return count($this->copies);
    }

}

class Copy
{
    // fields
    private int $number;
    private string $dateIn;
    private string $dateOut;

    // relations
    private $book;

    // methods
    function __construct(Book $book, int $number)
    {
        $this->book = $book;
        $this->number = $number;
        $this->dateIn = date('Y-m-d');
    }

    function writeOff(): void
    {
        $this->dateOut = date('Y-m-d');
    }

    function __toString(): string
    {
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

?>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Poging 2</title>
    <link rel="stylesheet" type="text/css" href="../style/general.css">
</head>

<body>
    <h1>Bibliotheek - poging 2</h1>
    <?php
    // write output
    foreach ($books as $book) {
        echo "<p>";
        echo $book->countCopies() . " x $book \n";
        echo "</p>";
    }
    ?>
</body>

</html>