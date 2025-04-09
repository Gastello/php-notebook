<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Playground</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
<header>
    <div class="container">
        <ul class="header">
            <li><a href="index.php">PHP Notebook</a></li>
            <li><a href="playground.php">Playground</a></li>
        </ul>
    </div>
</header>
<main class="page">
<div class="container">  


<?php

// !Вивід
echo("<div class='playground__header'>Вивід:</div>");
print "Hello, ";
echo "world!";
echo "<br>";
// !Коментарі
// comment 1
# comment 2
/*
    comment
    number
    three
*/

// !Змінні
echo("<div class='playground__header'>Змінні:</div>");
$text = "text1";
$Text = 'text2';
echo $text;
echo "<br>";
echo $Text;
echo "<br>";

// !Переприсвоєння
echo("<div class='playground__header'>Переприсвоєння:</div>");
$text2 = 'text';
$text2 = 'newText';
echo $text2;
echo '<br>';

// !Конкатинація
echo("<div class='playground__header'>Конкатинація:</div>");
$con = "worker";
echo "I am a " . $con;
echo "<br>";
// echo ""A lot" of $cons" // Ми хочемо вивести *A lot of "workers"*, але такий запис є помилкою, адже ми змінюємо назву змінної та використовуємо ті самі лапки.
echo "\"A lot\" of {$con}s";
echo "<br>";

// !Інтерполяція
echo("<div class='playground__header'>Інтерполяція:</div>");
echo "I am a $con"; // I am a worker
echo "<br>";
echo 'I am a $con'; // I am a worker
echo "<br>";
echo `I am a $con`; // `I am a $con` Виконує shell-команду, так як такої команди не існує - нічого не виводиться
echo "<br>";

// !Константа
echo("<div class='playground__header'>Константа:</div>");
define('PI', '3,14'); // case sensetive
echo(PI);
echo "<br>";
define('echo','echo text');
// echo(echo); // error
echo(constant('echo'));

// !Тип данних String
echo("<div class='playground__header'>Тип данних String:</div>");
$str1 = "String";
var_dump($str1); // C:\wamp64\www\php-notebook\playground.php:80:string 'String' (length=6)
echo("<br>");
$str2 = "Рядок";
var_dump($str2); // C:\wamp64\www\php-notebook\playground.php:83:string 'Рядок' (length=10)
echo("<br>");
$str3 = "Multi
Line
String";
echo($str3);
echo("<br>");
var_dump($str3);
echo("<br>");
$str4 = "\tString\n4";
echo($str4);
echo("<br>");
var_dump($str4);
echo("<br>");

// !Тип данних Number
echo("<div class='playground__header'>Тип данних Number:</div>");
$num1 = 10;
$numStr = "10";
echo($num1 + $numStr); // 20
echo("<br>");
echo($numStr + $num1); // 20
echo("<br>");

// !Тип данних Float
echo("<div class='playground__header'>Тип данних Float:</div>");
$float = 7.42;
echo $num1 + $float; // 17.42 
echo("<br>");
echo(intval($float)); // 7
echo("<br>");
echo(gettype($float)); // double
echo("<br>");
$floatNum = 3.1414;
settype($floatNum, "integer");
echo($floatNum);

// !Тип данних Boolean
echo("<div class='playground__header'>Тип данних Boolean:</div>");
$bool = true;
var_dump($bool); // true
var_dump(is_int($num1)); // true
var_dump(is_int($bool)); // false
var_dump(is_float(11.2)); // true

// !Тип данних Null
echo("<div class='playground__header'>Тип данних Null:</div>");
$null = null;
var_dump(isset($idk)); // false
var_dump(isset($float)); // true
// нюанс
var_dump(isset($null)); // Вийде false!

// !Тип данних Array
echo("<div class='playground__header'>Тип данних Array:</div>");
// Нумерований масив
$arr1 = ['String', 10, 41.31, true]; 
var_dump($arr1);
// or
$arr2 = array('String', 10, 41.31, true); 
var_dump($arr2);
/*
Res:
array (size=4)
  0 => string 'String' (length=6)
  1 => int 10
  2 => float 41.31
  3 => boolean true
*/

// Асоціативний масив
$arr3 = ["name"=>"Max", 'age'=>22, 'isStudent'=>false];
var_dump($arr3);
// or
$arr4 = array("name"=>"Max", 'age'=>22, 'isStudent'=>false);
var_dump($arr4);
/*
Res:
array (size=3)
  'name' => string 'Max' (length=3)
  'age' => int 22
  'isStudent' => boolean false
*/

// Багатомірний масив
$arr5 = [[1,2,3],[4,5,6],[7,8,9]];
var_dump($arr5);
// or
$arr6 = array(array(1,2,3),array(4,5,6),array(7,8,9));
var_dump($arr6);
/*
Res:
array (size=3)
  0 => 
    array (size=3)
      0 => int 1
      1 => int 2
      2 => int 3
  1 => 
    array (size=3)
      0 => int 4
      1 => int 5
      2 => int 6
  2 => 
    array (size=3)
      0 => int 7
      1 => int 8
      2 => int 9
*/

// !Робота з масивом
echo("<div class='playground__header'>Робота з масивом:</div>");
// Робота з масивом
$fruits = ['banana', 'pineapple', 'strawberry'];
$person = array("name"=>"Max", 'age'=>22, 'isStudent'=>false);

echo sizeof($fruits); // 3
echo("<br>");
echo sizeof($fruits); // 3
echo("<br>");
echo $fruits[1]; // pineapple
echo("<br>");
echo $person['age']; // 22
echo("<br>");
array_push($fruits, "mango");
array_unshift($fruits, "grape");
print_r($fruits); // Array ( [0] => grape [1] => banana [2] => pineapple [3] => strawberry [4] => mango )
array_pop($fruits);
array_shift($fruits);
echo("<br>");
// Ф-я для виведення масиву
print_r($fruits); // Array ( [0] => banana [1] => pineapple [2] => strawberry )
echo("<br>");
$numbers = [1,8,43,890,4,-13,6,0];
asort($numbers);
print_r($numbers); // Array ( [5] => -13 [7] => 0 [0] => 1 [4] => 4 [6] => 6 [1] => 8 [2] => 43 [3] => 890 )
echo("<br>");
arsort($numbers);
print_r($numbers); // Array ( [3] => 890 [2] => 43 [1] => 8 [6] => 6 [4] => 4 [0] => 1 [7] => 0 [5] => -13 )
echo("<br>");
$newArray = array_merge($fruits, $numbers);
print_r($newArray); // Array ( [0] => banana [1] => pineapple [2] => strawberry [3] => 890 [4] => 43 [5] => 8 [6] => 6 [7] => 4 [8] => 1 [9] => 0 [10] => -13 )
echo("<br>");
$reveredFruits = array_reverse($fruits);
print_r($reveredFruits); // Array ( [0] => strawberry [1] => pineapple [2] => banana )
echo("<br>");
$arrayAsString = 'One, Two, Three';
$arrayFromString = explode(', ', $arrayAsString); 
print_r($arrayFromString); // Array ( [0] => One [1] => Two [2] => Three )
echo("<br>");
$stringFromArray = implode(' | ', $arrayFromString); 
print_r($stringFromArray); // One | Two | Three
echo("<br>");
echo('<div>Більше ф-й <a href="https://www.php.net/manual/en/ref.array.php">тут</a></div>');
// !Тип данних Object
echo("<div class='playground__header'>Тип данних Object:</div>");
$obj = new stdClass;
var_dump($obj); // object(stdClass)[1]

$user = new stdClass;
$user -> name = "Max";
$user -> age = 16;
var_dump($user); 
/*
Res: 
object(stdClass)[2] 
public 'name' => string 'Max' (length=3)
public 'age' => int 16
*/

// !Тип данних Resource
echo("<div class='playground__header'>Тип данних Resource:</div>");
$file = fopen('./test.txt', 'read');
var_dump($file); // C:\wamp64\www\php-notebook\playground.php:261:resource(4, stream)
?>


</div>
</div>
</main>
</body>
</html>