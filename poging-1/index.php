<!DOCTYPE html>
<?php

// Report all PHP errors
error_reporting(-1);
ini_set('display_errors', -1);

class Book
{

    // fields
    private string $isbn;
    private string $title;
    private string $author;

    // constructor
    function __construct(string $isbn, string $title, string $author)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
    }

    function __toString(): string
    {
        return "{$this->isbn} {$this->title}; {$this->author}";
    }

}

// create an empty array
$books = [];

// add new Books to array
$books[] = new Book('9789057523137', 'ICT Security', 'Boris Sondagh');
$books[] = new Book('9789026331404', 'Huidpijn', 'Saskia Noort');
$books[] = new Book('9789401605113', 'Ibiza', 'Kiki van Dijk');
$books[] = new Book('9789043026970', 'Computernetwerken, een top-down benadering', 'James F. Kurose, Keith W. Ross');
$books[] = new Book('9789086664467', 'Karakterstrijd', 'Marco Verkooijen');
$books[] = new Book('9780593078754', 'Origin', 'Dan Brown');
?>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Poging 1</title>
    <link rel="stylesheet" type="text/css" href="../style/general.css">
</head>

<body>
    <h1>Bibliotheek - poging 1</h1>
    <?php
    // write output
    foreach ($books as $book) {
        echo "<p>$book</p>\n";
    }
    ?>
</body>

</html>