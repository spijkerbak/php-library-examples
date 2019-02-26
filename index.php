<!DOCTYPE html>
<html lang="nl">

    <head>
        <meta charset="UTF-8">
        <title>Bibliotheek</title>
        <style>
            * {
                font-family: Verdana, Arial, sans-serif;
            }
            a {
                display: block;
                margin: 3px;
            }
        </style>
    </head>

    <body>
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <a target="poging-<?= $i ?>" href="poging-<?= $i ?>">Poging <?= $i ?></a>
        <?php } ?>
    </body>
</html>
