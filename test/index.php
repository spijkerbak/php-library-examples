<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Page</title>
</head>

<body>
    <h1>Welkom</h1>
    <p>Ha!</p>
    <table border=1>
    <?php
    for($i = 1; $i <= 10; $i++) {
        $r = $i * 10;
        echo "<tr>";
        echo "<td>$i x 10</td>";
        echo "<td>$r</td>";
        echo "</tr>\n";
    }
    ?>
    </table>
</body>

</html>