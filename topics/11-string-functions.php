    <div class="accordion-menu__item">Функції для роботи з рядками</div>
<div class="accordion-menu__item-text">
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
        <span class="accordion-menu__item-header">str</span>
        <span class="code">htmlspecialchars_decode</span> - перетворює HTML-сутності в спеціальні символи.<br> <br>
        <span class="code">
        $someStr = "&amp;lt;strong&amp;gt;I am hacker!&amp;lt;/strong&amp;gt;"; <br>
        var_dump(htmlspecialchars_decode($someStr));
        </span>, результат: 
        <span class="attention">'&lt;strong&gt;I am hacker!&lt;/strong&gt;' (length=29)</span> <br> <br>
    </p>
    &ensp;&ensp;
</div>