<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>String: Heredoc, Nowdoc</h1>
    <h3>Heredoc</h3>
    <p>Ще один метод створення сторки, в даному випадку мультистроки</p>
<?php
# усе що знаходиться між MSG ... MSG буде як елемент строка
# проте можемо виводити складні строки як нижче

$t = 22;
$t1 = "some text";
$t2 = true;

# мульти строки з herodoc
# змінні теж можна використати оск працює як "" подвійні лапки
$text = <<<MSG
line 1 $t
line 2 $t1
line 3 $t2
line 4 " '
MSG;

// line 1 22
// line 2 some text
// line 3 1
// line 4 " '

# nl2br - виведе на нові рядки
echo nl2br($text); // line 1 line 2 line 3 line 4

?>
  <h3>Nowdoc</h3>
  <?php
  # різниця з Heredoc що тут не працюють змінні 
  # оск це як '' одинарні лапки, де змінні не працюють
  $text2 = <<<'MSG'
line 1 $t
line 2 $t1
line 3 $t2
line 4
MSG;

// line 1 $t
// line 2 $t1
// line 3 $t2
// line 4

echo nl2br($text2);
  ?>

<h3>Heredoc with HTML</h3>
<?php

# врахуй що кожен відступ рахується за елеметн пустої строки
# тому пробіл перед <p>Helo Wolrd</p> теж рахується якщо він там є
$text3 = <<<MSG
<p>Helo Wolrd</p>
MSG;

var_dump($text3); // 17 без пробілу і 18 з пробілом перед p

echo nl2br($text3);

?>

</body>
</html>