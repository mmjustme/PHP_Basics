<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Types</h1>
    <h3>Scalar Types</h3>
    <ul>
        <li>bool</li>
        <li>int</li>
        <li>string</li>
        <li>float(double)</li>
    </ul>
    <p>PHP оголошує змінну і її тип під час виконання коду</p>
    <?php
    
    $comleted = true;
    $score = 75;
    $price = 3.22;
    $greeting = "Hello Dy";

    echo $comleted . '<br>';
    echo $score . '<br>';
    echo $price . '<br>';
    echo $greeting . '<br>';

    echo '<br>','<br>';

    # визначення типу
    echo gettype($comleted);
    echo '<br>';
    # визначення типу, тут повертається все, що відомо про змінну
    var_dump($comleted);    # bool(true)   
    var_dump($score);   # int(75)
    var_dump($price);   # float(3.22)
    var_dump($greeting);    # string(8) "Hello Dy"   
    
    ?>

<h3>Compound Types</h3>
    <ul>
        <li>array</li>
        <li>object</li>
        <li>callable</li>
        <li>iterable</li>
    </ul>


    <?php
    # Array
    $companies = ["1a",2,3,0.5,-9.2, "A", true];
    echo $companies; // Array + warning
    echo '<br>';
    print_r($companies)

    # Інші типу будуть в окремих відео
    ?>

<h3>Special Types</h3>
    <ul>
        <li>resource</li>
        <li>null</li>        
    </ul>

<!-- 
        Важливо розуміти що PHP динамічно змінює типи
    наприклад при додаванні стрінги і числа стрінга автоматично спробує перетворитися на число.
    Так само якщо ми оголсимо число і потім додамо до нього 0.5 PHP змінить тип на float.    
    Також можна оголосити в функції додавання двох чисел але передати число і стрінгу, 
    знову ж буде динамічно зміненно тип на число.
    
    Такі операції нормально, але їх можливо обмежити через строгий тип declare(strict_types=1).
    В такому випадку при оголошенні одного типу данних а передачі іншого ми отримаємо попередження.
    І тут теж є виняток це поєднання числ і чисел з крапкою, помилок не буде.
-->
<h3>Type Casting</h3>
    <?php
    $x ="5"; // string
    var_dump($x); //string(2) " 5"
    // force casting to int 
    $x = (int) "5";
    echo '<br>';
    var_dump($x); //int(5)
    ?> 
</body>
</html>