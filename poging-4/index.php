<?php
// Report all PHP errors
error_reporting(-1);
ini_set('display_errors', -1);

include('model/Book.php');
include('model/Copy.php');
include('model/Library.php');

$library = new Library();
$library->init();

function showInventory($library)
{
?>
<table>
    <tr>
        <?php
    foreach (Book::getHeaderNames() as $header) {
        echo "<th>$header</th>";
    }
        ?>
        <th>Exemplaren</th>
    </tr>
    <?php
    $books = $library->getBooks();
    foreach ($books as $book) {
        echo "<tr>";
        $values = $book->getValues();
        foreach ($values as $value) {
            echo "<td>$value</td>";
        }
        $numbers = $book->getActiveCopyNumbers();
        $count = count($numbers);
        echo "<td>$count";
        if ($count > 0) {
            echo ": " . implode(' ', $numbers);
        }
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>
<?php
}
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Poging 4</title>
    <link rel="stylesheet" type="text/css" href="../style/general.css">
</head>

<body>
    <h1>Bibliotheek - poging 4</h1>
    <h2>Vóór</h2>
    <?php
    showInventory($library);
    ?>

    <h2>Ná</h2>
    <?php
    $library->writeOff(1012);
    showInventory($library);
    ?>
</body>

</html>