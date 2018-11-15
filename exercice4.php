<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $country = 'France';
        echo "La" . $country . " " . "est un pays de taille moyenne dans le monde.";
        $population = 66;
        echo "<br>";
        echo "Sa population est d'environ" . " ". $population . " " . "millions d'habitants.";
        $nationalGrowthEconomy = 1.5;
        echo "<br>";
        echo "Elle connait un croissance assez faible de l'ordre de " . $nationalGrowthEconomy . "%.";
        $richCountry = true;
        echo "<br>";
        echo "Index de richesse du pays compris entre 0 et 1 :" . " " . $richCountry;
        ?>
    </body>
</html>
