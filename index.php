<!DOCTYPE html>
<html lang="nl">

    <head>
        <meta charset="UTF-8">
        <title>Bibliotheek</title>
        <style>
            * {
                font-family: Verdana, Arial, sans-serif;
            }
            a.item {
                display: block;
                margin: 3px;
            }
        </style>
    </head>

    <body>
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <a class="item" target="poging-<?= $i ?>" href="poging-<?= $i ?>">Poging <?= $i ?></a>
        <?php } ?>
        <p>
            Get the sources from
            <a target="github" href="https://github.com/spijkerbak/php-library-examples">github</a>.
        </p>
    </body>
    
    <?php 
        $dummy = 1;
    ?>
</html>
