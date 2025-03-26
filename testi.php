<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $a = 10;
        $b = 4;

        $c = 5;

        $name = "Aurora";
        $height = "1.6m";
        $salary = "3.5k/month";
        $String = "Hei, nimeni on $name";
        $d = strtoupper("Adidakset vaiko Niket, molemmat");
        $len = strlen($d);
        $longtext = "Mulla on ne molemmat <br> Ennen piti valita <br> Mut nyt mä otan molemmat";
        $fruits = array("kiivi", "kvitteni", "kvitteni");

        echo "First PHP program";
        echo "<br>";

            echo $longtext;

        echo "<br>"; 

            echo var_dump($fruits);

        echo "<br>";

            echo $d;

        echo "<br>";

            echo "Lauseen pituus on: $len";

        echo "<br>";

            echo var_dump($String);

        echo "<br>";
        
            echo var_dump($name);

        echo "<br>";

            echo var_dump($height);

            //It lets yoy know what it is for example it says that its string and how many marks it has.

        echo "<br>";

            echo $salary;

        echo "<br>";

            echo ++$c;

        echo "<br>";

            echo $a + $b;

        echo "<br>";
        //array tells you how many words in has abd how many marks each has.
        //A string is a sequence of characters enclosed between the double quotes "..."
    ?>
</body>
</html>