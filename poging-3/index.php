<?php

// Report all PHP errors
error_reporting(E_ALL);

// No HTML,just plain text
header('content-type: text/plain');

echo "Bibliotheek - poging 3\n\n";

include('Book.php');
include('Copy.php');
include('Library.php');

$library = new Library();

$library->addBook(new Book('9789043026970', 2013, 'Computernetwerken, een top-down benadering', 'James F. Kurose, Keith W. Ross'));
$library->addBook(new Book('9789026331404', 2016, 'Huidpijn', 'Saskia Noort'));
$library->addBook(new Book('9789401605113', 2016, 'Ibiza', 'Kiki van Dijk'));
$library->addBook(new Book('9789057523137', 2015, 'ICT Security', 'Boris Sondagh'));
$library->addBook(new Book('9789086664467', 2018, 'Karakterstrijd', 'Marco Verkooijen'));
$library->addBook(new Book('9780593078754', 2017, 'Origin', 'Dan Brown'));

$library->getBook('9789043026970')->addCopies(1);
//$library->getBook('9789026331404')->addCopies(3);
$library->getBook('9789401605113')->addCopies(4);
$library->getBook('9789057523137')->addCopies(12);
$library->getBook('9789086664467')->addCopies(1);
$library->getBook('9780593078754')->addCopies(2);

$library->showInventory();    