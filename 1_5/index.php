<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Boolean, Integers</h1>
    <h2>Boolean</h2>
    <h3>False:</h3>
    <ul>
        <li>int 0, -0</li>
        <li>float 0.0, -0.0</li>
        <li>empty string ""</li>
        <li>zero like string "0"</li>
        <li>empty array []</li>
        <li>null</li>
    </ul>
    <?php

$condition = 0;
if($condition){
    echo "This is true";
} else {
    echo "This is false";
};

echo "<br>";
var_dump($condition); // int(0)

echo "<br>";
echo "<br>", is_bool($condition); // пусто
var_dump(is_bool($condition)); // bool(false)

# echo виводить 1 якщо true і нічого якщо false
# тому, що PHP зводить true і false до стрінги, false="", true="1"

echo "<br>", $condition;  // 0

   

    ?>
    <hr>
    <h2>Integers</h2>
    <h3>Casting</h3>

    <?php
        $x = (int) true; // int(1)
        $x1 = (int) false; // int(0)
        $x2 = (int) 5.66; // 5
        $x3 = (int) "4.22"; // 4
        $x4= (int) "4 Hello"; // 4
        // $x5 (integer) "test"; // error or 0
        // $x5 (int) null; // error or 0

        var_dump($x2);
        # перевірка на int, повертає true, false
        echo "<br>";
        var_dump(is_int($x2));

        # варіанти запису великих чисел
        echo "<br>";
        $d = 200_000_000; // 200000000 все ще інтеджер
         # max value PHP_INTEGER_MAX / MIN

    ?>


    

</body>
</html>