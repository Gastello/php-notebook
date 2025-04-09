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
$text = "text1";
$Text = 'text2';
echo $text;
echo "<br>";
echo $Text;
echo "<br>";

// !Переприсвоєння
$text2 = 'text';
$text2 = 'newText';
echo $text2;
echo '<br>';

// !Конкатинація
$con = "worker";
echo "I am a " . $con;
echo "<br>";
// echo ""A lot" of $cons" // Ми хочемо вивести *A lot of "workers"*, але такий запис є помилкою, адже ми змінюємо назву змінної та використовуємо ті самі лапки.
echo "\"A lot\" of {$con}s";
echo "<br>";

// !Інтерполяція
echo "I am a $con"; // I am a worker
echo "<br>";
echo 'I am a $con'; // I am a worker
echo "<br>";
echo `I am a $con`; // `I am a $con` Виконує shell-команду, так як такої команди не існує - нічого не виводиться
echo "<br>";

// !Константа
define('PI', '3,14'); // case sensetive
echo(PI);
echo "<br>";
define('echo','echo text');
// echo(echo); // error
echo(constant('echo'));
?>


</div>
</div>
</main>
</body>
</html>