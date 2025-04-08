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
                        <span class="code">print "Hello, world!";</span> or <span class="code">echo "Hello, world!";</span>
                        </p>
                        <p>
                        <span class="code">&lt;?php ?&gt;</span> - контейнер, який буде вказувати на код php, який потрібно виконати
                        </p>
                        <p>
                        .php файл - це по-суті той самий .html, але ми можемо використовувати php з 
                        допомогою тегу <span class="code">&lt;?php ?&gt;</span>, тобто ми можемо спокійно використовувати таку конструкцію:
                        </p>
                        <pre class="code">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Hello, world!&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php
    echo "Hello, world!"
?&gt;
&lt;/body&gt;
&lt;/html&gt;
                        </pre>
                        <p>
                        Тег <span class="code">&lt;?php ?&gt;</span> можна не закривати, якщо весь код після його відкриття має бути виконаним, але в прикладі вище нам потрібно його закривати.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="accordion-menu__item">Коментарі</div>
                    <div class="accordion-menu__item-text">
                        <p>
                        <span class="code">// comment 1</span>
                        <br>
                        <span class="code"># comment 2</span>
                        <br>
                        <span class="code">/* multiline-comment 3 */
                        </span>
                        <br>
                        Коментарі не передаються в скомпільований проєкт, отже юзеру їх видно не буде 
                        </p>
                    </div>
                </li>
                <li>
                    <div class="accordion-menu__item">Змінні</div>
                    <div class="accordion-menu__item-text">
                        <p>
                            Змінні в php чутливі до регістру, тобто <span class="code">$text="text"</span> і <span class="code">$Text="text2"</span> - це дві різних змінних
                            <br>
                            <span class="code">$this</span> - зарезервована змінна
                            <br>
                            Переприсвоєння: <span class="code">$text2 = 'text';<br>$text2 = 'newText';<br>echo $text2;</span> Результат: <span class="attention">newText</span> 
                            <br>
                            Конкатинація записується так: <span class="code">$con = "worker"
                            <br>
                            echo "I am a " . $con;</span>, з допомогою символа <span class="attention">.</span>
                            <br>
                            Для з'єднання змінної із символом без пробілу та можливості використати ті самі лапки: <span class="code">echo "\"A lot\" of {$con}s";</span> Результат: <span class="attention">"A lot" of workers</span> 
                        </p>
                        <p>
                            Інтерполяція записується так: <span class="code">$con = "worker"
                            <br>echo "I am a $con";</span>, але <span class="code">echo `I am a $con`;</span> виведе <span class="attention">I am a $con</span> 
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