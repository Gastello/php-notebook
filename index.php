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
                    <div class="accordion-menu__item-text">
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
                    <div class="accordion-menu__item-text">
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
                    <div class="accordion-menu__item-text">
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
                    <div class="accordion-menu__item-text">
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
                <!-- <li>
                    <div class="accordion-menu__item">Template</div>
                    <div class="accordion-menu__item-text">
                        <p>
                            Text <span class="code">Code</span> <span class="attention">Attention</span>
                        </p>
                    </div>
                </li> -->
            </ul>
        </div>
    </main>
</div>
<?php

    // !Змінні


?>
</body>
<script src="./script.js"></script>
</html>