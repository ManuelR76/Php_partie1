<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $km = 1;
        echo "J'ai marché" . " " . $km . "km.";
        $km += 2; 
        echo "<br>";
        echo "Puis j'ai couru" . " " . $km . "kms.";
        $km += 122;
        echo "<br>";
        echo "Enfin j'ai terminé par " . " " . $km . "kms en vélo.";
        ?>
    </body>
</html>
