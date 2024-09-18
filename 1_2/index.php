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
        print "Hello World";    
        echo "<br>";

        #  Hello World1 це тому, що print вертає 1 
        # і може бути використаний як вираз
        echo print "Hello World"; # Hello World1
        echo "<br><br>"; 

        print ("Hello World");
        echo "<br>";
        echo("Hello World");

        echo "<br>";
        echo "Hello"," ", "World";
        
        # Виведення даних з апострофом (')
        echo "<br><br>"; 
        echo "Jone's invoice";
        echo "<br>";
        echo 'Jone\'s invoice';
     ?>

    <h4>Variables</h4>
    <?php
    # змінні починаються з _ або літер. НЕ з цифр чи спец. знаків взагалі
    # слова які заборонені $this
    $name = "Joe";
    $_Name = "Joe";
    $_name = "Joe";
    // $2name = "Joe" // error
    // $%&name = "Joe" // error

    echo $name;
    echo "<br>";
    echo $_Name;
    echo "<br>";
    echo $_name;

    echo "<br><br>";
    echo 'Hello $name'; // Hello $name
    echo "<br>";
    echo "Hello $name"; // Hello Joe
    echo "<br>";
    echo "Hello {$name}" // Hello Joe
    ?>

<h4>Призначення змінних за значенням і за посиланням</h4>
<p>за значенням</p>
<?php

    $x = 1;
    $y = $x;
    echo "x = ",$x;
    echo "<br>";
    echo "y = ", $y;
    # змінюємо $x і бачимо як на "y" це не впливає
    $x = 32;

    echo "<br><br>","змінюємо x = 32","<br><br>";
    echo "x = ",$x;
    echo "<br>";
    echo "y = ", $y;
    # Оскільки, змінна "y" призначається за значенням то зміна значення "x" не впливає на "y"
?>
<hr>
<p>за посиланням</p>
<?php

    $x = 1;
    $y = &$x; # призначення змінної за посиланням
    echo "x = ",$x;
    echo "<br>";
    echo "y = ", $y;
    # змінюємо $x і бачимо як на "y" це не впливає
    $x = 32;

    echo "<br><br>","змінюємо x = 32","<br><br>";
    echo "x = ",$x;
    echo "<br>";
    echo "y = ", $y;
    # Оскільки, змінна "y" призначається за посиланням (&) то зміна значення "x" впливає і на "y"
?>

<h4>PHP в HTML</h4>
    <p><?php echo "Hello World"?></p>
    <p><?= "Hello World"?></p>
    # PHP with HTML поє`днання
    <p><?php 
        $f=10;
        $h=2;
        echo '<h4>' . $f . ", " . $h . '<h4>';
    ?></p>
</body>
</html>