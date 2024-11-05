<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Basic Syntax</h1>
    <h4>Print data</h4>
    <?php
        echo "Hello world";
        echo "<br>";

        print "Hello World TEST";    
        echo "<br>";
       
        echo print "Hello World"; # Hello World1
        echo "<br><br>";
        #  Hello World1 це тому, що print вертає 1 
        # і може бути використаний як вираз

        print ("Hello World"); //Hello World
        echo "<br>";
        echo("Hello World");//Hello World
        echo "<br>";
        echo "Hello"," ", "World";//Hello World
        
        echo "<h4>Виведення даних з апострофом (')</h4>";
        echo "<p>Апостроф може зіпсувати стрінгу, перервати її.
        Щоб цього уникнути можна використати подвійні лапки</p>";        
        echo "Jone's invoice"; //Jone's invoice 
        echo "<p>Або спец символ '\'</p>";
        echo 'Jone\'s invoice'; //Jone's invoice 
     ?>

    <hr>
    <h1>Variables</h1>
    <h4>Змінні починаються з '_' або літер. НЕ з цифр чи спец. символів або слів які заборонені "$this".</h4>    
    
    <?php    
    $name = "Joe"; //Joe
    echo $name . "<br>";
    $_Name = "Joe"; //Joe
    echo $_Name . "<br>";
    $_name = "Joe"; //Joe
    echo $_name . "<br>";
    // $2name = "Joe" // error
    // $%&name = "Joe" // error

    echo "<h4>Виведення змінних</h4>";

    echo 'Hello $name' . "<br>"; // Hello $name
    echo "Hello $name" . "<br>"; // Hello Joe  
    echo "Hello {$name}" . "<br>"; // Hello Joe
    ?>

<h4>Призначення змінних за значенням і за посиланням</h4>
<h4>за значенням</h4>
<?php

    $x = 1;
    $y = $x;
    echo "x = ",$x;
    echo "<br>";
    echo "y = ", $y;

    $x = 32;

    echo "<br>","змінюємо x = 32","<br>";
    echo "x = ",$x;
    echo "<br>";
    echo "y = ", $y;
    # Оскільки, змінна "y" призначається за значенням то зміна значення "x" не впливає на "y"
?>

<h4>за посиланням</h4>
<?php

    $x = 1;
    $y = &$x; # призначення змінної за посиланням
    echo "x = ",$x;
    echo "<br>";
    echo "y = ", $y;
    # змінюємо $x і бачимо як на "y" це впливає
    $x = 32;

    echo "<br>","змінюємо x = 32","<br>";
    echo "x = ",$x;
    echo "<br>";
    echo "y = ", $y;
    echo "<p>Оскільки, змінна 'y' призначається за посиланням (&) то зміна значення 'x' впливає і на 'y'.</p>"
?>
<hr>
<h4>PHP в HTML</h4>
    <p><?php echo "Hello World"?></p>
    
    <p>Аналог echo - <?= "Hello World"?></p> 
    # PHP with HTML поє`днання
    <p><?php 
        $f=10;
        $h=2;
        echo '<h4>' . $f . ", " . $h . '<h4>';
    ?></p>
</body>
</html>