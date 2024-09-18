<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Constants & Variable variables in PHP</h1>

    <h3>Constants</h3>
    <p>оголошення константів через define("назва","значення")</p>
    
    <?php
    define("STATUS_PAID", "paid");
    echo "<br>", STATUS_PAID;

    # перевірка чи оголошено константу
    # повертає 1(true) якщо так
    echo "<br>",defined("STATUS_PAID");
    # повертає нічого якщо ні
    echo "<br>",defined("STATUS"); # пусто
        
    # оголошення через змінну (динамічно)
    $add_status = "TWO";
    define("STATUS_" . $add_status, $add_status);
    echo "<br>",STATUS_TWO;  
    ?>

    <p>оголошення константів через const, основна відмінність, що 
    const не працює в виразах як if чи loop (детальніше в інших розділах)
    </p>
    <?php
        const STATUS_ONE = "paid";
        echo "<br>", STATUS_ONE;
    ?>


<p>закладені константи</p>
    <?php echo PHP_VERSION;?>

    <p>магічні константи - константи в яких змінюється значення</p>
    # повертає № рядку коду -  
    <?php 
        echo __LINE__; // 44
        echo '<br>', __FILE__; // розташування файлу
    ?>


    <h3>Variable variables</h3>

    <?php
    
    $foo = "bar";
    $$foo = "baz";
    # даний запиз означає, що $$foo візьме як _назву_ змінної _значення_ $foo.
    # тобто це те саме що $bar="baz";

    # через $$foo ми можемо вивести $bar
    echo "$foo <br> {$$foo}"; // bar baz
    # через $$foo ми можемо вивести $bar
    
    # і тепер в нас є змінна $$foo = "baz"яка буде як $bar = "baz"
    # тому можемо її вивести як $bar = "baz"
    echo '<br>';
    echo '<br>', $foo, '<br>', $bar // bar baz

    ?>
</body>
</html>