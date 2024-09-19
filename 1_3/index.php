<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Constants & Variable variables in PHP</h1>

    <h1>Constants</h1>
    <h3>оголошення константів через define("назва","значення")</h3>
    
    <?php
        define("STATUS_PAID", "aproove");
        echo "значення константи STATUS_PAID : ", STATUS_PAID; // aproove

        echo "<h3>Перевірка чи оголошено константу через defined('назва константи')</h3>";
        echo "повертає 1(true) якщо так: ", defined("STATUS_PAID");
        echo "<br> повертає нічого якщо ні: ",defined("STATUS"); # пусто

        echo "<h3>Oголошення констант через змінну (динамічно)</h3>";
        $add_status = "TWO";
        define("STATUS_" . $add_status, $add_status);
        echo STATUS_TWO;  
    ?>

    <hr>
    <h3>Оголошення константів через const, основна відмінність, що 
    const не працює в виразах як "if" чи "loop" (детальніше в інших розділах)
    </h3>
    <?php
        const STATUS_ONE = "aproove";
        echo "значення константи STATUS_ONE: ", STATUS_ONE;
    ?>
<hr>
<h3>Вбудовані константи</h3>
    <?= "константа PHP_VERSION:", PHP_VERSION ?>

<h3>Магічні константи</h3>
<p>
константи в яких змінюється значення в залежності від умови.
    Наприклад від виклику константи в залежності на якому рядку
</p>
    # повертає № рядку коду -  
    <?php 
        echo __LINE__; // 45
        echo '<br>', __FILE__; // розташування файлу /project/workspace/1_3/index.php
    ?>

<hr>
    <h3>Variable variables</h3>
<p>Визначення назви змінної через значення іншої змінної. 
    Тобто, створюємо змінну $foo зі значеням "bar"($foo = "bar"). </p>
    <?php
    
    $foo = "bar";

    echo "<p>Стоврюємно наступну змінну зі значенням 'baz',
     щоб присвоїти їй назву через значення першої змінної викор. $$. Отже, $$foo = 'baz'</p>";
    
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