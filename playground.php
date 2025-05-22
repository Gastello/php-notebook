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
  <?php include_once './header.php' ?>
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
echo count($fruits); // 3
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

// !If else
echo("<div class='playground__header'>If else:</div>");
$someInt = 2;
$someText = '2';
if($someInt == 2){
  echo("Integer = 2");
}
elseif(is_int($someInt)) {
  echo("It is integer: {$someInt}");
}
else{
  echo("It is not integer: {$someInt}");
}
echo("<br>");
if($someInt == $someText){
  echo("{$someInt}=={$someText}");
}
echo("<br>");
if($someInt === $someText){
  echo("{$someInt}==={$someText}");
}
else {
  echo("{$someInt}!=={$someText}");
}
echo("<br>");
if($someInt !== $someText){
  echo("{$someInt}!=={$someText}");
}
else {
  echo("{$someInt}==={$someText}");
}

echo("<br>");
if($someInt>0 and $someInt<5){
  echo("0<{$someInt}<5");
}

echo("<br>"); 
// !Тернарні оператори
echo("<div class='playground__header'>Тернарні оператори:</div>");
echo (is_int($someInt)) ? 'is int' : 'is not int';

// !Swith/case
echo("<div class='playground__header'>Swith/case:</div>");

switch($someInt){
  case 1: 
    echo(1);
    break;
  case 2: 
    echo(2);
    break;
  default:
    echo('empty');
    break;
}
echo("<br>");

// !Match
echo("<div class='playground__header'>Match:</div>");
echo match ($someInt) {
  1 => 'is 1',
  2 => 'is 2',
  default => 'is empty'
};

// !Арифметичні операції
echo("<div class='playground__header'>Арифметичні операції:</div>");
$a = 12;
$b = 3;
echo $a + $b;
echo("<br>");
echo $a - $b;
echo("<br>");
echo $a * $b;
echo("<br>");
echo $a / $b;
echo("<br>");
echo $a ** $b;
echo("<br>");
echo pow($a, $b);
echo("<br>");
$a = 5;
$b = $a++;
echo($b);
echo("<br>");

$a = 5;
$b = ++$a;
echo($b);
echo("<br>");

$a = 11;
$b = 10;
echo $a%$b;
echo("<br>");

$a = 10;
$c = &$a;
$a = 0;
echo $c;
echo("<br>");

// !Цикли
echo("<div class='playground__header'>Цикли:</div>");
for($a=1;$a<=5;$a++){
  echo $a;
} 
echo("<br>");
for($a=5;$a>0;--$a){
  echo $a;
} 
echo("<br>");
for($a=1;$a<=5;$a++){
  if($a==2) continue;
  echo $a;
} 
echo("<br>");
for($a=1;$a<=5;$a++){
  if($a==2) break;
  echo $a;
} 
echo("<br>");
$arr = [1,2,3,4,5];
for($i=0;$i<count($arr);$i++){
  echo $arr[$i];
} 
echo("<br>");

$num = 3;
while($num){
  $num--;
  echo $num;
}
echo("<br>");

$num = 0;
do {
  echo $num;
} while($num);
echo("<br>");

$arr = [0,1,2,3,4];
foreach($arr as $el){
  echo $el;
}
echo("<br>");

$arr = [1,2,3];
foreach($arr as &$el){
  $el*=2;
}
var_dump($arr);
echo("<br>");

$fruits = [
  'a' => 'apple',
  'b' => 'banana',
  'c' => 'cherry'
];
foreach($fruits as $key => $value){
  echo($key . ' ' . $value . '<br>');
}
echo("<br>");

// !include/require
echo("<div class='playground__header'>include/require:</div>");
include './test.php';
$testData = 'test2';
echo $testData . "<br>";
include './test.php';
echo $testData . "<br>";

// !Функції
echo("<div class='playground__header'>Функції:</div>");
function greet($name="Guest"){
  echo("Hello, {$name}!") . "<br>";
}
greet();
greet('Andrew');

function minusFive($number){
  return $number - 5;
}
echo minusFive(6) . "<br>";

// !Функції для роботи з рядками
echo("<div class='playground__header'>Функції для роботи з рядками:</div>");
$someStr = " Hello, man!  ";
var_dump($someStr);
var_dump(trim($someStr));
var_dump(ltrim($someStr));
var_dump(rtrim($someStr));
var_dump(rtrim($someStr, '! '));
$someStr = "123text908";
var_dump(trim($someStr,'0..9'));

$someStr = "<strong>I am hacker!</strong>";
var_dump($someStr);
var_dump(strip_tags($someStr));

var_dump($someStr);
var_dump(htmlspecialchars($someStr));

$someStr = "&lt;strong&gt;I am hacker!&lt;/strong&gt;";
var_dump(htmlspecialchars_decode($someStr));

$someStr = "[b]BB CODE?[/b]";
$someStr = str_replace('[b]', '<b>', $someStr);
$someStr = str_replace('[/b]', '</b>', $someStr);
var_dump($someStr);

$someStr = "[b]BB CODE?[/b]";
$bbCode = ['[b]','[/b]'];
$htmlCode = ['<b>','</b>'];
var_dump(str_replace($bbCode, $htmlCode, $someStr));

$someStr = "hello, world!";
var_dump(strtoupper($someStr));


$someStr = "HELLO, WORLD!";
var_dump(strtolower($someStr));

$someStr = "12345678";
var_dump(strlen($someStr));

$someStr = "Привіт!";
var_dump(strlen($someStr));
var_dump(mb_strlen($someStr));

$someStr = "01234567";
var_dump(strpos($someStr, '5'));

$someStr = "qweйцу";
var_dump(strpos($someStr, 'ц'));
var_dump(mb_strpos($someStr, 'ц'));

$someStr = "Hello, world!";
var_dump(substr($someStr, 7));
var_dump(substr($someStr, 7, 3));

// !Функції для роботи з датою та часом
echo("<div class='playground__header'>Функції для роботи з датою та часом:</div>");
echo date("d.m.Y H:i:s") . "<br>";

echo time() . "<br>";

echo date("d.m.Y H:i:s", time()) . "<br>";

date_default_timezone_set('Europe/Kyiv');
echo date("d.m.Y H:i:s") . "<br>";

echo microtime() . "<br>";

// !HTTP запити в формах
echo("<div class='playground__header'>HTTP запити в формах:</div>");
echo "Вписавши в адресу такі значення: http://localhost/php-notebook/playground.php?test=hello%20world" . "<br>";
echo('Отримаємо: ');
print_r($_GET);
echo '<br>';

echo('<br>
<form method="GET" action="">
  <span>method="GET"</span><br>
  <input type="text" name="name"><br><br>
  <input type="text" name="surname"><br><br>
  <input type="number" name="age"><br><br>
  <button type="submit">Send</button>
</form>
' );
print_r($_GET);

echo '<br>';

echo('<br>
<form method="POST" action="">
  <span>method="POST"</span><br>
  <input type="password" name="password"><br><br>
  <button type="submit">Send</button>
</form>
' );
print_r($_POST);
// $pass = $_POST["password"]; // помилка ( ! ) Warning: Undefined array key "password"
$pass = $_POST["password"] ?? '';
var_dump($pass);

echo('<br>
<form method="POST" action="test.php">
  <span>action:</span><br>
  <input type="text" name="name">
  <button type="submit">Send</button>
</form>
' );
print_r($_GET);

echo '<br>';

echo('<br>
<form method="POST">
  <span>Multiple choice:</span><br>
  <select name="choices[]" multiple>
    <option>number 1</option>
    <option>number 2</option>
    <option>number 3</option>
  </select>
  <button type="submit">Send</button>
</form>
' );
print_r($_POST);

echo '<br>';

// !Файли та функції для роботи з файлами
echo("<div class='playground__header'>Файли та функції для роботи з файлами:</div>");
echo('<br>
<form method="POST" enctype="multipart/form-data">
  <span>File:</span><br>
  <input type="file" name="file"></input>
  <button type="submit">Send</button>
</form>
' );

if(!empty($_FILES)){
  move_uploaded_file($_FILES['file']['tmp_name'], 'files/'.$_FILES['file']['name']);
}

var_dump(file_exists('./files/blank.png'));

if(file_exists('./files/blank.png')){
  // rename('./files/blank.png', './files/newname.png');
}

// mkdir('test');  
// rmdir('test');

// copy('./topics/00-template.php', './files/template.php')
// unlink('./files/template.php');

var_dump(is_dir('./files'));
var_dump(is_file('./files/newname.png'));

var_dump(file_get_contents('./test.txt'));
var_dump(file('./test.txt'));

file_put_contents('./test.txt', "\nnew line", FILE_APPEND);

var_dump(filesize('./playground.php'));
?>
</div>
</div>
</main>
</body>
</html>