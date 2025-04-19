<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Notebook</title>
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
            <ul class="accordion-menu">
                <li>
                    <div class="accordion-menu__item">Локальний сервер</div>
                    <div class="accordion-menu__item-text hidden">
                        <p>
                            <a href="https://www.wampserver.com/en/">WAMP</a>
                        </p>
                        <p>
                            Альтернатива: XAMPP, MAMP
                        </p>
                    </div>
                </li>
                <li>
                    <div class="accordion-menu__item">Вивід</div>
                    <div class="accordion-menu__item-text hidden">
                    <p>
                        <span class="accordion-menu__item-header">Основи PHP-виводу</span>
                        ✅ Для виводу тексту можна використовувати як 
                        <span class="code">print "Hello, world!";</span> так і 
                        <span class="code">echo "Hello, world!";</span>
                        — обидві команди виводять текст у браузер.
                        <br><br>

                        <span class="accordion-menu__item-header">PHP у HTML</span>
                        ⚠️ Для вставки PHP-коду у HTML використовується спеціальний контейнер:
                        <span class="code">&lt;?php ?&gt;</span>. Він вказує, що всередині буде виконуватись PHP-код.
                        <br>
                        ❗ Файли з PHP-кодом мають розширення 
                        <span class="attention">.php</span>, і всередині можна використовувати як HTML, так і PHP.
                        <br><br>

                        <span class="accordion-menu__item-header">Комбінування HTML та PHP</span>
                        ✅ Можна використовувати таку структуру для виводу HTML-сторінки з PHP-вставкою:
                        <br>
                        <span class="code">
                            &lt;!DOCTYPE html&gt;<br>
                            &lt;html lang="en"&gt;<br>
                            &lt;head&gt;<br>
                            &nbsp;&nbsp;&lt;meta charset="UTF-8"&gt;<br>
                            &nbsp;&nbsp;&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;<br>
                            &nbsp;&nbsp;&lt;title&gt;Hello, world!&lt;/title&gt;<br>
                            &lt;/head&gt;<br>
                            &lt;body&gt;<br>
                            &nbsp;&nbsp;&lt;?php<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;echo "Hello, world!";<br>
                            &nbsp;&nbsp;?&gt;<br>
                            &lt;/body&gt;<br>
                            &lt;/html&gt;
                        </span>
                        <br><br>

                        <span class="accordion-menu__item-header">Закриття PHP-тегу</span>
                        ⚠️ Якщо весь файл складається лише з PHP-коду — закривати тег 
                        <span class="code">?&gt;</span> не обов'язково.
                        <br>
                        ❌ Але в прикладі вище його потрібно закрити, тому що після PHP-коду йде HTML.
                    </p>
                    </div>
                </li>
                <li>
                    <div class="accordion-menu__item">Коментарі</div>
                    <div class="accordion-menu__item-text hidden">
                    <p>
                        <span class="accordion-menu__item-header">Коментарі в PHP</span>
                        ✅ Коментарі використовуються для пояснення коду та не впливають на його виконання. Вони ігноруються інтерпретатором PHP.
                        <br>
                        ❗ Коментарі не передаються у скомпільований проєкт, тому користувач сайту їх не побачить.
                        <br><br>

                        <span class="accordion-menu__item-header">Типи коментарів</span>
                        ➕ Однорядкові коментарі можна писати двома способами:
                        <br>
                        <span class="code">// comment 1</span> або <span class="code"># comment 2</span>
                        <br><br>
                        ➕ Багаторядковий коментар:
                        <br>
                        <span class="code">/* multiline-comment 3 */</span>
                        <br>
                        Він охоплює кілька рядків і зручний для більших пояснень.
                        <br><br>

                        ⚠️ Коментарі корисні під час розробки, тестування та командної роботи.
                    </p>
                    </div>
                </li>
                <li>
                    <div class="accordion-menu__item">Змінні</div>
                    <div class="accordion-menu__item-text hidden">
                        <p>
                            <span class="accordion-menu__item-header">Реєстр</span>
                            Змінні в php чутливі до регістру, тобто <span class="code">$text="text"</span> і <span class="code">$Text="text2"</span> - це дві різних змінних
                            <br>
                        </p>
                        <p>
                            <span class="accordion-menu__item-header">Зарезервовані змінні</span>
                            Деякі змінні можуть бути Зарезервовані, як ось: <span class="code">$this</span>
                        </p>
                        <p>
                            <span class="accordion-menu__item-header">Переприсвоєння</span>
                            <span class="code">$text2 = 'text';<br>$text2 = 'newText';<br>echo $text2;</span> Результат: <span class="attention">newText</span> 
                        </p>
                        <p>
                            <span class="accordion-menu__item-header">Конкатинація</span>
                            Конкатинація записується так: <span class="code">$con = "worker" <br>
                            echo "I am a " . $con;</span>, з допомогою символа <span class="attention">.</span>
                            <br>
                            Для з'єднання змінної із символом без пробілу та можливості використати ті самі лапки: <span class="code">echo "\"A lot\" of {$con}s";</span> Результат: <span class="attention">"A lot" of workers</span> 
                        </p>
                        <p>
                            <span class="accordion-menu__item-header">Інтерполяція</span>
                            ✅ У подвійних лапках ("...") працює інтерполяція змінних. Тобто PHP шукає значення змінної $con і підставляє його: 
                            <br>
                            <span class="code">$con = "worker"<br>echo "I am a $con";</span> ➡️ дає: 
                            <span class="attention">I am a worker</span>
                            <br>
                            ❌ У одинарних лапках ('...') інтерполяція не працює. Усе виводиться як є, без підстановки змінної:
                            <br>
                            <span class="code">echo 'I am a $con';</span> ➡️ дає:  
                            <span class="attention">I am a $con</span> 
                            <br>
                            ⚠️ Бектики — зворотні лапки (`). Вони в PHP не для рядків, а для виконання shell-команд (як exec):
                            <br>
                            <span class="code">echo `I am a $con`;</span> ➡️ PHP намагається виконати shell-команду I am a worker, і якщо її немає — нічого не повертає, тому рядок не виводиться.
                            <span class="attention">I am a $con</span> 
                        </p>
                        <p>
                            <span class="accordion-menu__item-header">Константи в PHP</span>
                            ✅ Константи оголошуються за допомогою функції <span class="code">define()</span>. Вони не можуть бути змінені після визначення, тобто мають постійне значення.
                            <br><br>

                            ➕ Стандартний запис для визначення константи:
                            <br>
                            <span class="code">define('PI', '3,14');</span>
                            <br>
                            Тепер ви можете використовувати константу <span class="code">PI</span> в коді:
                            <br>
                            <span class="code">echo PI;</span> ➡️ дає: <span class="attention">3,14</span>
                            <br><br>

                            ➕ Ви можете використовувати зарезервовані слова як ім'я константи, але це створить певні обмеження:
                            <br>
                            <span class="code">define('echo', 'echo text');</span>
                            <br>
                            Це дозволить зберігати значення для <span class="code">echo</span>, але наступний код викличе помилку:
                            <br>
                            <span class="code">echo(echo);</span> ➡️ <span class="attention">error</span>
                            <br><br>
                            ➕ Для доступу до значення константи можна використовувати функцію <span class="code">constant()</span>:
                            <br>
                            <span class="code">echo constant('echo');</span> ➡️ дає: <span class="attention">echo text</span>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="accordion-menu__item">Типи даних у PHP</div>
                    <div class="accordion-menu__item-text hidden">
                        <p>
                            <span class="accordion-menu__item-header">Основні типи даних</span>
                            PHP - динамічна мова програмування, яка підтримує 8 основних типів даних та 2 псевдотипи. Динамічність означає, що тип змінної визначається під час виконання програми і може змінюватися.
                        </p>

                        <p>
                            <span class="accordion-menu__item-header">Тип String (Рядок)</span>
                            Рядки можна виводити за допомогою <span class="code">echo</span>, але для отримання додаткової технічної інформації використовується <span class="code">var_dump()</span>:
                            <br>
                            <span class="code">$str1 = "String";<br>var_dump($str1);</span>
                            <br>
                            Результат: <span class="attention">string(6) "String"</span> (довжина рядка - 6 символів)
                            <br><br>
                            У UTF-8 кириличні символи займають 2 байти:
                            <br>
                            <span class="code">$str2 = "Рядок";<br>var_dump($str2);</span>
                            <br>
                            Результат: <span class="attention">string(10) "Рядок"</span>
                            <br><br>
                            Переноси рядків також враховуються:
                            <br>
                            <span class="code">$str3 = "Multi<br>Line<br>String";<br>echo($str3);<br>var_dump($str3);</span>
                            <br>
                            Результат: <span class="attention">string(19) "Multi<br>Line<br>String"</span>
                            <br><br>
                            Спеціальні символи: <span class="code">\t</span> (табуляція), <span class="code">\n</span> (перенос рядка)
                        </p>

                        <p>
                            <span class="accordion-menu__item-header">Числові типи</span>
                            <strong>Integer (Цілі числа):</strong>
                            <br>
                            PHP автоматично конвертує рядки, що містять числа, у числовий тип:
                            <br>
                            <span class="code">$num1 = 10;<br>$numStr = "10";<br>echo($num1 + $numStr);</span>
                            <br>
                            Результат: <span class="attention">20</span>
                            <br><br>
                            <strong>Float/Double (Числа з плаваючою точкою):</strong>
                            <br>
                            Конвертація між типами:
                            <br>
                            <span class="code">$float = 7.89;<br>echo(intval($float));</span> ➡️ <span class="attention">7</span>
                            <br>
                            <span class="code">echo(gettype($float));</span> ➡️ <span class="attention">double</span>
                            <br><br>
                            Зміна типу змінної:
                            <br>
                            <span class="code">$floatNum = 3.1414;<br>settype($floatNum, "integer");<br>echo($floatNum);</span>
                            <br>
                            Результат: <span class="attention">3</span>
                            <br>
                            Доступні варіанти для settype(): "integer", "string", "boolean", "array", "object", "null"
                        </p>

                        <p>
                            <span class="accordion-menu__item-header">Тип Boolean</span>
                            Логічний тип даних, що приймає значення true або false:
                            <br>
                            <span class="code">$bool = true;<br>echo($bool);</span> ➡️ <span class="attention">1</span> (false не виводить нічого)
                            <br><br>
                            Функції перевірки типів:
                            <br>
                            <span class="code">var_dump(is_int($num1));</span> ➡️ <span class="attention">true</span>
                            <br>
                            <span class="code">var_dump(is_int($bool));</span> ➡️ <span class="attention">false</span>
                            <br>
                            Аналогічні функції: is_string(), is_float(), is_bool(), is_array(), is_object()
                        </p>

                        <p>
                            <span class="accordion-menu__item-header">Тип Null</span>
                            Спеціальне значення, що означає відсутність значення:
                            <br>
                            <span class="code">$null = null;<br>var_dump(isset($idk));</span> ➡️ <span class="attention">false</span> (змінна не існує)
                            <br>
                            <span class="code">var_dump(isset($float));</span> ➡️ <span class="attention">true</span> (змінна існує)
                            <br>
                            <span class="code">var_dump(isset($null));</span> ➡️ <span class="attention">false</span> (null вважається невстановленим значенням)
                        </p>

                        <p>
                            <span class="accordion-menu__item-header">Тип Array (Масив)</span>
                            <strong>Нумеровані масиви:</strong>
                            <br>
                            <span class="code">$arr1 = ['String', 10, 41.31, true];<br>var_dump($arr1);</span>
                            <br>
                            або
                            <br>
                            <span class="code">$arr2 = array('String', 10, 41.31, true);</span>
                            <br><br>
                            <strong>Асоціативні масиви:</strong>
                            <br>
                            <span class="code">$arr3 = ["name"=>"Max", 'age'=>22, 'isStudent'=>false];</span>
                            <br><br>
                            <strong>Багатовимірні масиви:</strong>
                            <br>
                            <span class="code">$arr5 = [[1,2,3],[4,5,6],[7,8,9]];</span>
                        </p>

                        <p>
                            <span class="accordion-menu__item-header">Робота з масивами</span>
                            Розмір масиву:
                            <br>
                            <span class="code">$fruits = ['banana', 'pineapple', 'strawberry'];<br>echo sizeof($fruits);</span> ➡️ <span class="attention">3</span>
                            <br>
                            <span class="code">echo $fruits[1];</span> ➡️ <span class="attention">pineapple</span>
                            <br><br>
                            Додавання/видалення елементів:
                            <br>
                            <span class="code">array_push($fruits, "mango");<br>array_unshift($fruits, "grape");</span>
                            <br>
                            <span class="code">array_pop($fruits);<br>array_shift($fruits);</span>
                            <br><br>
                            Сортування:
                            <br>
                            <span class="code">asort($numbers);</span> (за значеннями, за зростанням)
                            <br>
                            <span class="code">arsort($numbers);</span> (за значеннями, за спаданням)
                            <br><br>
                            Об'єднання масивів:
                            <br>
                            <span class="code">$newArray = array_merge($fruits, $numbers);</span>
                            <br><br>
                            Перетворення рядка в масив і навпаки:
                            <br>
                            <span class="code">$arrayFromString = explode(', ', 'One, Two, Three');</span>
                            <br>
                            <span class="code">$stringFromArray = implode(' | ', $arrayFromString);</span>
                        </p>

                        <p>
                            <span class="accordion-menu__item-header">Тип Object</span>
                            Об'єкти створюються з класів або як stdClass:
                            <br>
                            <span class="code">$obj = new stdClass;<br>$obj->name = "Max";<br>$obj->age = 16;<br>var_dump($obj);</span>
                            <br>
                            Результат: <span class="attention">object(stdClass)#1 (2) { ["name"]=> string(3) "Max" ["age"]=> int(16) }</span>
                        </p>

                        <p>
                            <span class="accordion-menu__item-header">Тип Resource</span>
                            Спеціальний тип, що представляє зовнішні ресурси (файли, з'єднання з БД тощо):
                            <br>
                            <span class="code">$file = fopen('test.txt', 'r');<br>var_dump($file);</span>
                            <br>
                            Результат: <span class="attention">resource(3) of type (stream)</span>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="accordion-menu__item">Умовні оператори</div>
                    <div class="accordion-menu__item-text hidden">
                        <span class="accordion-menu__item-header">If/else</span>
                        <p>
                            Умова 'if/elseif/else' записується так <span class="code">if($someInt == 2){
                            echo("Integer = 2");
                            } <br>
                            elseif(is_int($someInt)) {
                            echo("It is integer: {$someInt}");
                            } <br>
                            else{
                            echo("It is not integer: {$someInt}");
                            }</span>, повертає <span class="attention">Integer = 2</span> 
                        </p>
                        <p>
                            Для того, щоб перевірити чи два елементи однакові, використовуємо <span class="code">==</span>
                            <br>
                            <span class="code">!=</span> якщо навпаки 
                        </p>
                        <p>
                         <span class="code">'1' == 1</span>, повертає <span class="attention">true</span>
                        </p>
                        <p>
                            Для того, щоб перевірити разом з типом, використовуємо <span class="code">===</span> 
                            <br>
                            <span class="code">!==</span> якщо навпаки
                        </p>
                        <p>
                         <span class="code">'1' === 1</span>, повертає <span class="attention">false</span>
                        </p>
                        <p>
                         <span class="code">'1' !== 1</span>, повертає <span class="attention">true</span>
                        </p>
                        <p>
                            <span class="code">or</span> - або, <span class="code">and</span> - і <br>
                            <span class="code">if($someInt>0 and $someInt<5){echo("0<{$someInt}<5");}</span>, повертає 
                            <span class="attention">0<2<5</span> <br>
                            Але краще використовувати <span class="code">||</span> і <span class="code">&&</span>
                        </p>
                        <p>
                            <span class="code">></span> - більше, 
                            <span class="code"><</span> - менше,
                            <span class="code">>=</span> - більше рівно, 
                            <span class="code"><=</span> - менше рівно,
                        </p>
                        <span class="accordion-menu__item-header">Тернарні оператори</span>
                        <p>
                            Тернарні оператори записуємо таким чином: 
                            <span class="code"> ('condition') ? 'if true' : 'if false'; </span>
                            <span class="code"> echo (is_int($someInt)) ? 'is int' : 'is not int'; </span>, повертає <span class="attention">is int</span>
                        </p>
                        <span class="accordion-menu__item-header">Switch/case</span>
                        <p>
                            Записуємо таким чином: 
                            <span class="code"> 
                                switch($someInt){
                                case 1: <br>
                                &ensp;&ensp;echo(1); <br>
                                &ensp;&ensp;break; <br>
                                case 2: <br> 
                                &ensp;&ensp;echo(2); <br>
                                &ensp;&ensp;break; <br>
                                default: <br>
                                &ensp;&ensp;echo('empty'); <br>
                                &ensp;&ensp;break; <br>
                                } 
                            </span>, повертає <span class="attention">2</span>
                        </p>
                        <span class="accordion-menu__item-header">Match</span>
                        <p>Match робить порівняння, як <span class="code">===</span>, тобто з типом</p>
                        <span class="code">
                        echo match ($someInt) { <br>
                            &ensp;&ensp;1 => 'is 1', <br>
                            &ensp;&ensp;2 => 'is 2', <br>
                            &ensp;&ensp;default => 'is empty' <br>
                        }
                        </span>, повертає 
                        <span class="attention">is 2</span>
                        
                    </div>
                </li>
                <!-- <li>
                    <div class="accordion-menu__item">Template</div>
                    <div class="accordion-menu__item-text hidden">
                        <p>
                            Text <span class="code">Code</span> <span class="attention">Attention</span>
                        </p>
                    </div>
                </li> -->
            </ul>
        </div>
    </main>
</div>
</body>
<script src="./script.js"></script>
</html>