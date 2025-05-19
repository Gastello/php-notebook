    <div class="accordion-menu__item">Функції для роботи з рядками</div>
<div class="accordion-menu__item-text hidden">
    <p>
    <span class="accordion-menu__item-header">Документація</span>
        <a href="https://www.php.net/manual/en/ref.strings.php">Документацію по функціям для роботи з рядками можна знайти тут.</a>
    </p>
    <p>
        <span class="accordion-menu__item-header">trim</span>
        <span class="code">trim</span> - видалити пробіли на початку та вкінці<br> <br>
        <span class="code">$someStr = " Hello, man!  ";</span> <br> <br>
        <span class="code">var_dump(trim($someStr));</span>, результат: 
        <span class="attention">' Hello, man!  ' (length=14)</span> <br> <br>

        <span class="code">ltrim</span> - видалити пробіли зліва<br>
        <span class="code">var_dump(ltrim($someStr));</span>, результат: 
        <span class="attention">'Hello, man!' (length=11)</span> <br> <br>

        <span class="code">rtrim</span> - видалити пробіли справа<br>
        <span class="code">var_dump(rtrim($someStr));</span>, результат: 
        <span class="attention">' Hello, man!' (length=12)</span> <br> <br>
        Символи, що треба вилучити, можна вказати за допомогою необов'язкового параметра characters. Необхідно просто записати туди усі непотрібні символи. За допомогою <span class="code">..</span> можна задати діапазон символів за зростанням.<br>
        <span class="code">$someStr = "123text908";<br>var_dump(trim($someStr,'0..9'));</span>, результат: 
        <span class="attention">'text' (length=4)</span> <br> <br>

    </p>
    <p>
        <span class="accordion-menu__item-header">strip_tags</span>
        <span class="code">strip_tags</span> - ця функція намагається повернути рядок str з усіма видаленими NULL-байтами, HTML та PHP тегами.<br> <br>

        <span class="code">
            $someStr = "&lt;strong&gt;I am hacker!&lt;/strong&gt;"; <br>
            var_dump(strip_tags($someStr));
        </span>, результат: 
        <span class="attention">'I am hacker!' (length=12)</span> <br> <br>
    </p>
    <p>
        <span class="accordion-menu__item-header">htmlspecialchars</span>
        <span class="code">htmlspecialchars</span> - перетворює спеціальні символи в HTML-сутності.<br> <br>
        <span class="code">
            $someStr = "&lt;strong&gt;I am hacker!&lt;/strong&gt;"; <br>
            var_dump(htmlspecialchars($someStr));
        </span>, результат: 
        <span class="attention">'&amp;lt;strong&amp;gt;I am hacker!&amp;lt;/strong&amp;gt;' (length=41)</span> <br> <br>
    </p>
    <p>
        <span class="accordion-menu__item-header">htmlspecialchars_decode</span>
        <span class="code">htmlspecialchars_decode</span> - перетворює HTML-сутності в спеціальні символи.<br> <br>
        <span class="code">
            $someStr = "&amp;lt;strong&amp;gt;I am hacker!&amp;lt;/strong&amp;gt;"; <br>
            var_dump(htmlspecialchars_decode($someStr));
        </span>, результат: 
        <span class="attention">'&lt;strong&gt;I am hacker!&lt;/strong&gt;' (length=29)</span> <br> <br>
    </p>
    <p>
        <span class="accordion-menu__item-header">str_replace</span>
        <span class="code">str_replace</span> - замінює всі входження рядка пошуку на рядок заміни.<br> <br>
        <span class="code">
            $someStr = "[b]BB CODE?[/b]"; <br>
            $someStr = str_replace('[b]', '&lt;b&gt;', $someStr); <br>
            $someStr = str_replace('[/b]', '&lt;/b&gt;', $someStr); <br>
            var_dump($someStr);
        </span>, результат: <span class="attention">'&lt;b&gt;BB CODE?&lt;/b&gt;' (length=15)</span> <br>
        Коли елементів багато, то краще використовувати масив: <br>
        <span class="code">
            $someStr = "[b]BB CODE?[/b]"; <br>
            $bbCode = ['[b]','[/b]']; <br>
            $htmlCode = ['&lt;b&gt;','&lt;/b&gt;']; <br>
            var_dump(str_replace($bbCode, $htmlCode, $someStr));
        </span>, результат: <span class="attention">'&lt;b&gt;BB CODE?&lt;/b&gt;' (length=15)</span> <br>
    </p>
    <p>
        <span class="accordion-menu__item-header">strtoupper</span>
        <span class="code">strtoupper</span> - конвертувати рядок у верхній реєстр. <br> <br>
        <span class="code">
            $someStr = "hello, world!"; <br>
            var_dump(strtoupper($someStr));
        </span>, результат: <span class="attention">'HELLO, WORLD!' (length=13)</span> <br>
    </p>
    <p>
        <span class="accordion-menu__item-header">strtolower</span>
        <span class="code">strtolower</span> - конвертувати рядок у нижній реєстр. <br> <br>
        <span class="code">
            $someStr = "HELLO, WORLD!"; <br>
            var_dump(strtolower($someStr));
        </span>, результат: <span class="attention">'hello, world!' (length=13)</span> <br>
    </p>
    <p>
        <span class="accordion-menu__item-header">strlen</span>
        <span class="code">strlen</span> - повертає довжину рядка. <br> <br>
        <span class="code">
            $someStr = "12345678"; <br>
            var_dump(strlen($someStr));
        </span>, результат: <span class="attention">8</span> <br> <br>
        <span class="attention">КИРИЛИЦЯ РАХУЄТЬСЯ ЗА 2 СИМВОЛИ!</span>
    </p>
    <p>
        <span class="accordion-menu__item-header">mb_strlen</span>
        <span class="code">mb_strlen</span> - повертає довжину рядка (кирилиця рахується за 1 символ). <br> <br>
        <span class="code">
            $someStr = "Привіт!"; <br>
            var_dump(strlen($someStr)); <br>
            var_dump(mb_strlen($someStr));
        </span>, результат: <span class="attention">
            int 13 <br>
            int 7
        </span> <br> <br>
    </p>
    <p>
        <span class="accordion-menu__item-header">strpos</span>
        <span class="code">strpos</span> - повертає позицію підрядка. <br> <br>
        <span class="code">
            $someStr = "01234567"; <br>
            var_dump(strpos($someStr, '5'));
        </span>, результат: <span class="attention">5</span> <br> <br>
        <span class="attention">КИРИЛИЦЯ РАХУЄТЬСЯ ЗА 2 СИМВОЛИ!</span>
    </p>
    <p>
        <span class="accordion-menu__item-header">mb_strpos</span>
        <span class="code">mb_strpos</span> - повертає позицію підрядка (кирилиця рахується за 1 символ). <br> <br>
        <span class="code">
            $someStr = "qweйцу"; <br>
            var_dump(strpos($someStr, 'ц')); <br>
            var_dump(mb_strpos($someStr, 'ц'));
        </span>, результат: <span class="attention">
            int 5 <br>
            int 4
        </span> <br> <br>
    </p>
    <p>
        <span class="accordion-menu__item-header">substr</span>
        <span class="code">substr</span> - вирізає і повертає підрядок з рядка. <br> <br>
        <span class="code">
        $someStr = "Hello, world!"; <br>
        var_dump(substr($someStr, 7)); <br>
        var_dump(substr($someStr, 7, 3));
        </span>, результат: <span class="attention">'world!' (length=6) <br> 'wor' (length=3)</span> <br> <br>
        <span class="attention">КИРИЛИЦЯ РАХУЄТЬСЯ ЗА 2 СИМВОЛИ!</span>
    </p>
    <p>
        <span class="accordion-menu__item-header">mb_substr</span>
        <span class="code">mb_substr</span> - вирізає і повертає підрядок з рядка (кирилиця рахується за 1 символ).
    </p> 
</div>