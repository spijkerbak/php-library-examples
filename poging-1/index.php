<?php

// Report all PHP errors
error_reporting(E_ALL);

// No HTML,just plain text
header('content-type: text/plain');

echo "Bibliotheek - poging 1\n\n";

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

// write output
echo "Bibliotheek\n\n";

foreach ($books as $book) {
    echo "$book\n";
}