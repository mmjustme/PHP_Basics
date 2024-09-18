<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays</h1>
    
    <h3>Array</h3>
    <?php

    $array = ["php", "js", "c++"];
    echo $array[0]; // php
    echo "<br>";
    echo $array[1]; // js
    echo "<br>";
    echo $array[2]; // c++


    // echo $array[-1]; // warrning Undefined array key -1
    // echo $array[4]; // Warning: Undefined array key 4

    # перевріка чи існує значення в масиві під індексом 0
    echo "<br>","<br>";
    echo isset($array[0]); // 1 - true
    echo "<br>";
    var_dump(isset($array[0])); // bool(true)
    echo "<br>";
    var_dump(isset($array[4])); // bool(false)
  
    
    
    # зміна данних
    echo "<br>","<br>";
    $array2 = ["React", "Vue", "Node"];
    $array2[0] = "Express";
    print_r($array2); // "React" зміниться на "Express" 
    // aArray ( [0] => Express [1] => Vue [2] => Node )

    # додавання данних
    $array2[] = "REST";
    echo "<br>";
    print_r($array2); // Array ( [0] => Express [1] => Vue [2] => Node [3] => REST )
    
    # додавання данних черезarray_push
    # нюанс що метод мутує дані, тобто змінює оригінальний масив
    array_push($array2, "element1", "element2");

    # гарний вигляд масиву 
    echo "<pre>";
    print_r($array2);
    echo "</pre>";

    # кількість елементів в масиві   
    echo count($array2); // 6

    ?>

    <hr>
    <h3>Associative Array</h3>


    <?php
    $language = [
        "php" => "8.0",
        "pyton" => "3.9",
    ];

    echo "<pre>";
    print_r($language);
    echo "</pre>";

    echo "<br>";
    echo $language["pyton"]; // 3.9
    // echo $language["asasas"]; // Warning: Undefined array key "asasas"
    
    echo "<br>";
    $key = "php";
    echo $language[$key]; // 8.0

    # додавання данних
    echo "<br>","<br>";
    $language["node"] = "19.2";

    echo "<pre>";
    print_r($language);
    echo "</pre>";
    ?>

<h4>Associative Array - myltydaimentional array (array in array)</h3>

<?php

$pro_languages = [
    "php"=>[
        "creator"=>"Jonh",
        "website"=>"www.php.com",
        "isOpenSource"=>true,
        "versions"=>[
            ["version"=>8, "releaseDate"=> "Nov 26, 2020"],
            ["version"=>7.22, "releaseDate"=> "Jun 28, 2019"],
        ],
    ],
    "phyton" => [
        "creator"=>"Guid Van Rossum",
        "website"=>"www.pyton.com",
        "isOpenSource"=>true,
        "versions"=>[
            ["version"=>3.9, "releaseDate"=> "Oct 5, 2020"],
            ["version"=>3.8, "releaseDate"=> "Oct 14, 2019"],
        ],
    ]
]; 


    # виведемо даний масив 
    // echo "<pre>";
    // print_r($pro_languages);
    // echo "</pre>";  

    # доступ до данних 
    echo $pro_languages["phyton"]["website"]; // www.pyton.com
    echo "<br>";
    echo $pro_languages["php"]["versions"][0]["releaseDate"]; // Nov 26, 2020

    # однакові ключі перезаписуються, таким чином значення буде за останнім
    $simple =[0=>"foo", 1 => "bar", "1"=>"baz"];
    echo "<br>","<br>";
    print_r($simple); // ( [0] => foo [1] => baz )
    
    # тому для назв ключів не варто використов. "1", bool, float, null
    # null прирівнюється тут до "" пустої стрічки
     $simple2 =[true =>"a", 1 => "b", "1"=>"c", 1.8 => "d", null=>"e"];
     print_r($simple2); //( [1] => d [] => e )
     echo "<br>";
     echo $simple2[""]; // e
     echo "<br>";
     echo $simple2[null]; // e


    # варто врахувати, що масив без названих ключів буде простим масивом з індексами.
    # new_array має ключі 0,1,2,3 але якщо змінити один ключ на більший всі наступні ключі
    # будуть відштовхуватися від найбільшого значення
    echo "<br>","<br>";
    $new_array = ["a","b","c","d"];
    $new_array2 = ["a",50=>"b","c","d"];
    # тобто тепер ключі 0, 50, 51, 52
    print_r($new_array2) //  [0] => a [50] => b [51] => c [52] => d
    

?>
<hr>
<h4>Видалення данних</h3>
<?php
 $stringArr = ["a","b","c","d"];
 print_r($stringArr); // ( [0] => a [1] => b [2] => c [3] => d )
 echo "<br>";
 # видалення і повернення останнього елементу
 echo array_pop($stringArr); //d
 echo "<br>";
 print_r($stringArr); // ( [0] => a [1] => b [2] => c )
 
 # видалення і повернення першого елементу
 # після видалення першого елементу усі інші елементи змінюють свій індекс
 echo "<br>";
 echo array_shift($stringArr); //a
 echo "<br>";
 print_r($stringArr); // Array ( [0] => b [1] => c )
 
 
 # видалення за індексом
 # якщо не вказати індекс видалиться увесь масив
 # після видалення зміна індексів не буде
 $strings = ["a","b","c","d", "l"];
// unset($strings[1]);
unset($strings[1], $strings[3]);
echo "<br>","<br>";
print_r($strings);


?>

<hr>
<h3>Arrays array_key_exists</h3>
<?php

$train = ["a"=>1, "b"=> null];
 # перевірка чи існує ключ
 # array_key_exists - покаже чи існує ключ взагалі
 # тоді як isset не покаже оск значення ключа null 
 echo "<br>";
 echo var_dump(array_key_exists("b", $train));  // 1 - true = bool(true)
 echo "<br>";
 echo var_dump(isset($train["b"])); // нічого = bool(false)

?>


</body>
</html>