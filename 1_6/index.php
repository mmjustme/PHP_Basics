<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Float, Null</h1>
    
    <h2>Float</h2>
    <?php
       $r = 13.5e3; // 13500
       echo $r;

       echo "<br>";

       $r2 = 13.5e-3; // 0.0135
       echo $r2;
       # для читабельності можна застосувати "_"
       echo "<br>";
       $r3 = 13_000.5; // 13000.5
       echo $r3;

       # max value PHP_FLOAT_MAX / MIN
       
       # Заокруглення до меншого
       echo "<br>";
       echo floor(4.55); // 4
       # Заокруглення до більшого
       echo "<br>";
       echo ceil(4.55); //5

       # неочікувані значення
        echo "<br><br>";
      
        echo floor((0.1+0.7)*10); // 7 тому, що (0.1+0.7)*10=7.9999999999118 +floor зменшує до 7
        echo "<br>";
        echo ceil((0.1+0.2)*10); // 4 тому, що 0.1+0.2=0.300000000005 *10 = 3.000000000000005

       # неочікувані значення
       echo "<br><br>";
       $a = 0.23; 
       $b = 1- 0.77;
       if($a == $b) { // not same
           echo "same";
        } else {
            echo "not same";
        } 
        # виведе not same тому порівняння float не бажане!
        echo "<br><br>";
        echo INF; // infinite - коли ми перевищили ліміт і число не можу бути виведене
        echo "<br>";       
        echo NAN; // not a number

        # первірка на NAN INF
        echo "<br><br>";
        $b=PHP_FLOAT_MAX *2;
        var_dump(is_infinite($b)); // true
        echo "<br>";  
        var_dump(is_nan($b)); // true
    ?>

        <h3>Casting float</h3>
        <?php

        $k = 5; // int
        $k2 = (float) 5; // float(5)
        $lo = (float) "xsxsx"; // float(0)
        $lo2 = (float) "12zx"; // float(12)

        var_dump($lo2)
        ?>
<hr>
<h2>Null</h2>
<?php

# null constant
$x = null;
echo $x; // нічого, оск null перетв в стрінгу пусту ""
echo "<br>";
var_dump($x); // null
echo "<br>";
var_dump(is_null($x)); // bool(true)

# ще спосіб перевірити на null
echo "<br>";
var_dump($x === null); // bool(true)

# null after unset
echo "<br>","<br>";
$n = 123;
var_dump($n); // int(123)
echo "<br>";
unset($n);
var_dump($n); // Warning: Undefined variable $n. NULL

?>

<h3>Casting null</h3>

<?php
$m = null;
var_dump((string)$m); // '' empty string
echo "<br>";
var_dump((int)$m); // int(0)
echo "<br>";
var_dump((bool)$m); // bool(false)
echo "<br>";
var_dump((array)$m); // array(0)[] empty array

?>

</body>
</html>