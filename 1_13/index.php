<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Some Operators p.2</h1>
    <h3>Error control Operator (@)</h3>

    <?php
    # симуляція помилки
    $x = file('foo.txt'); // Warning: file(foo.txt): Failed to open stream
    $x = @file('foo.txt'); // забирає помилку
    # використовувати взагалі не бажано!    
    ?>

    <h3>Increment / Decrement (++,--)</h3>

    <?php
    # працює лише з числами і стрінгами
    $v = 5;

    # POST increment
    # отже спочатку повертається значення це 5
    echo $v++; // 5
    # а далі збільшується на 1, тому зверху 5 а далі вже 6
    echo $v; // 6
    
    # PRE increment
    $g = 5;
    # спочатку значення зростає на 1, а тоді одразу повертається, тому 6
    echo "<br>";
    echo ++$g; // 6
    
    # на стрінгу має вплив ++$p (PRE increment ++)
    echo "<br>";
    $p="abc";
    echo --$p; // abc - без змін
    echo "<br>";
    echo ++$p; // abd
    ?>

<h3>Logical operators - &&, ||, ! "and" or "xor"</h3>

    <p>&& - пошук першого false значення</p>
    <ul>
        <li>(true && true)  - true</li>
        <li>(false && true)  - false</li>
        <li>(true && false)  - false</li>
        <li>(false && false)  - false</li>
    </ul>
    <p>|| - пошук першого true значення</p>
    <ul>
        <li>(true && true)  - true</li>
        <li>(false && true)  - true</li>
        <li>(true && false)  - true</li>
        <li>(false && false)  - false</li>
    </ul>
<?php
   # ! - зміную значення на протележне !true буде false
   # !! - зміную значення на протележне двічі !true буде false 
   var_dump(!true); // bool(false)
   var_dump(!!true); // bool(true)

   echo'<br>','<br>';
    # "and" - працює інакше && розглянемо окремо
    $a = true;
    $b = false;   
    $c = $a && $b; 
    var_dump($c); // bool(false)
    
    # замінемо && на and
    # пріо спочатку "=" а потім "and" тому визначається $c = $a перше значення а далі вже and
    $c = $a and $b; 
    var_dump($c) // bool(true)

    # && має більший пріо ніж || тому впершу чергу операції з &&
?>

<h3>Bitwise operators (бітові оператори) - &, |, ^, ~, <<, >></h3>

    <?php
    # поки пропускаю
    $p = 6;
    $v = 3;
    
    var_dump($p & $v)
    ?>

<h3>Array operators +  == === !== <> !===</h3>

<?php
$q = ['a', 'b', 'c'];
$r = ['e', 'd', 'f', 'g', 'h'];

# другий масив має індекси 0,1,2,3,4, при + він перевірить 
# чи на аналогічних індексах в першому масиві є дані
# якщо є тоді залишаються дані з першого масиву, якщо ні дописуються дані з другого
# тому на індексах 0,1,2 залишається "abc" ана індексах 3,4 нічого, тому дописалися "g,h"

$ar = $q+$r;
print_r($ar);

# з асоціативним масивом будуть порівнюватися ключі і відповідно 
# унікальні ключі будуть записуватися в в перший масив а ключі які ідентичні
# будуть залишатися зі значенням які в першому масиві
$q1 = ['a'=>1, 'b'=>2, 'c'=>3];
$r1 = ['a'=>9, 'd'=>15, 'f'=>22];
$ar1 = $q1+$r1;
# ключ а співпадає, тому значення залишається з першого масиву 

echo "<pre>";
print_r($ar1);
echo "</pre>";

echo "<br>";
$q2 = ['a'=>1, 'b'=>2, 'c'=>3];
$r2 = ['a'=>9, 'b'=>15, 'c'=>22];
$ar2 = $q2==$r2;

# '==' повертає true якщо усі ключі та їх значення однакові між масивами  
# '===' повертає true якщо усі ключі та їх значення однакові і мають один тип 
# та навіть порядок данних між масивами 
# аналогічно з !==, !===, а <> альтернативний варіант для !==
var_dump($ar2); // bool(false)

?>


   

</body>
</html>