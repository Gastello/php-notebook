<div class="accordion-menu__item">include та require в PHP</div>
<div class="accordion-menu__item-text hidden">
    <p>
        <span class="accordion-menu__item-header">include в php</span>
        Додає вміст одного PHP-файлу в інший. <br>
        Якщо файл не знайдено → warning, але скрипт продовжує виконання. <br> <br>
        Приклад: <br>
        <span class="code">include 'header.php';</span> <br>
        Використовується, коли файл бажаний, але не критичний для роботи скрипта. <br><br>
    </p>
    <p> 
        <span class="accordion-menu__item-header">require в php</span>
        Також додає код з іншого файлу. <br>
        Якщо файл не знайдено → fatal error, і скрипт припиняє виконання. <br> <br>
        Приклад: <br>
        <span class="code">require 'config.php';</span> <br>
        Використовується, коли файл критично необхідний для правильного виконання скрипта. <br>
    </p>
    <p>
        <span class="accordion-menu__item-header">Що таке include_once і require_once</span>
        include_once і require_once працюють аналогічно до include та require, але перевіряють, чи файл ще не був підключений раніше. <br>
        Захищають від повторного підключення одного й того ж файлу. <br><br>
        Приклади: <br>
        <span class="code">
            include_once 'functions.php'; <br>
            require_once 'db.php';
        </span>
    </p>
    <p>
        <span class="accordion-menu__item-header">Підключення файлів у php — важливі нюанси</span>
        <span class="code">include</span> — для необов'язкових файлів. <br>

        <span class="code">require</span> — для обов'язкових файлів. <br>

        <span class="code">_once</span> варіанти — для захисту від повторного підключення. <br>
    </p>
</div>