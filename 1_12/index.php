<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Some Operators</h1>
    <h2>+, /</h2>
    <?php
    $x = '10';
    # перетворення стрігги "10" в int через знаки + або -
    var_dump(+$x); // int(10)


    # при діленні результат буде int лише якщо обидва числа int
    # в іншому випадку float
    $y = 10;    
    $y2 = 3;
    
    var_dump($y / $y2); // float(3.3)


    # ділення на 0 видасть помилку і поверне IFN
    # для уникнення помилки викор. fdiv
    $a = 10;    
    $b = 0;

    var_dump(fdiv($a,$b)) // float(INF)

    ?>

    <h2>%, . конкатинація, .= конкатинація теж</h2>
    <?php
    # ділення з остачею перетворює float в int
    # тому ділення 10.5 на 2.9 буде попередження 
    # оск числа прирівняється до 10 і 2, знаки після коми ми втратили
    $r = 10.5;
    $f = 2.9;
    # Deprecated: Implicit conversion from float 2.9 to int loses precision
    var_dump($r % $f); // int(0)
    echo "<br>";
    # для уникнення помилки викор. fmod
    var_dump(fmod($r, $f));  // float(1.8000000000000003)

    # при 10 % -3 = 1,(мінус втратили) при -10 % 3 = -1,  
    # відємне значення буди лише якщо перше число відємне

    $j= "Hello";
    $j = $j . " World";
    
    echo '<br>', $j; // Hello World
    # спрощуємо
    $k = "Hello";
    $k.= " World";
    echo '<br>', $k; // Hello World

    # 0 перетвориться а стрінгу при такому порівннні
    echo '<br>','<br>';
    var_dump(0 == "hello"); // bool(false)
    
    echo '<br>'; 
    # "0" перетвориться на число тому true
    var_dump(0 == "0"); // bool(true)    
?>

<h2>важливе про "=="</h2>
<?php

$bob = "Hello World";
# знайдемо індекс "H"
$index = strpos($bob, "H"); // 0

# $index == false буде як 0 == false а далі 0 стає false 
# і все перетворюється на false == false що дає true
# тому важливо саме === строге порівння
if($index == false){
    echo "H not found";
} else {
    echo "H found at inex" . $index;
}

?>

<h2>умовний оператор - ??, тернарка - ?:</h2>
<?php
$res= $index === false ? "H not found" : "H found at inex " . $index;
echo $res; // H found at inex 0

echo "<br><br>";

# умовний оператор обере наступне значення якщо перше null або не визначене
$vi = null;
$dol = $vi ?? "Hello";

var_dump($dol); // string(5) "Hello"

echo "<br>";

# в іншому випадку $dol = першому не null значенню
$vi= false;
$dol = $vi ?? "Hello";
var_dump($dol); // bool(false)
?>
    
</body>
</html>