<?php

// Report all PHP errors
error_reporting(-1);
ini_set('display_errors', -1);

// No HTML,just plain text
header('content-type: text/plain');

echo "Bibliotheek - poging 4\n\n";

include('model/Book.php');
include('model/Copy.php');
include('model/Library.php');

$library = new Library();

$library->addBook(new Book($library, '9789043026970', 2013, 'Computernetwerken, een top-down benadering', 'James F. Kurose, Keith W. Ross'));
$library->addBook(new Book($library, '9789026331404', 2016, 'Huidpijn', 'Saskia Noort'));
$library->addBook(new Book($library, '9789401605113', 2016, 'Ibiza', 'Kiki van Dijk'));
$library->addBook(new Book($library, '9789057523137', 2015, 'ICT Security', 'Boris Sondagh'));
$library->addBook(new Book($library, '9789086664467', 2018, 'Karakterstrijd', 'Marco Verkooijen'));
$library->addBook(new Book($library, '9780593078754', 2017, 'Origin', 'Dan Brown'));

$library->getBook('9789043026970')->addCopies(1);
//$library->getBook('9789026331404')->addCopies(3);
$library->getBook('9789401605113')->addCopies(4);
$library->getBook('9789057523137')->addCopies(3);
$library->getBook('9789086664467')->addCopies(10);
$library->getBook('9780593078754')->addCopies(2);

echo "BEFORE\n";
$library->showInventory();    

$library->writeOff(1012);

echo "AFTER\n";
$library->showInventory();    
