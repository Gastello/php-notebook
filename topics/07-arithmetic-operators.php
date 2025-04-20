<div class="accordion-menu__item">Арифметичні оператори</div>
<div class="accordion-menu__item-text hidden">
    <p>
        <span class="code">$a = 12; <br> $b = 3;</span>
    </p>
    <p>
        <span class="code">$a + $b;</span>, результат: <span class="attention">15</span>
    </p>
    <p>
        <span class="code">$a - $b;</span>, результат: <span class="attention">9</span>
    </p>
    <p>
        <span class="code">$a * $b;</span>, результат: <span class="attention">36</span>
    </p>
    <p>
        <span class="code">$a / $b;</span>, результат: <span class="attention">4</span>
    </p>
    <p>
        <span class="code">$a ** $b;</span> або <span class="code">pow($a, $b);</span>, результат: <span class="attention">1728</span>
    </p>
    <p>
        <br>Різниця між <span class="code">$a++</span> і <span class="code">++$a</span> у моменті, коли відбувається інкремент (збільшення на 1).
        <br>
        Ось суть:
        <br>
        <span class="code">$a++</span> — постфіксний інкремент <br>
        Спочатку використовується старе значення змінної <span class="code">a</span>, а потім <span class="code">a</span> збільшується на 1. <br>
        <span class="code">
            $a = 5; <br>
            $b = $a++;
        </span>, результат: <span class="attention">5</span> 
        <br>
        <span class="code">++$a</span> — префіксний інкремент <br>
        Спочатку <span class="code">$a</span> збільшується на 1, а потім використовується нове значення. <br>
        <span class="code">
            $a = 5; <br>
            $b = ++$a;
        </span>, результат: <span class="attention">6</span>
    </p>
    <p>
        <br> <span class="code">$a = 11; <br> $b = 10;</span> <br>
        <span class="code">$a % $b;</span>, результат: <span class="attention">1</span>
    </p>
    <p>
        <br>Присвоєння за посиланням: <br>
        <span class="code">
        $a = 10; <br>
        $c = &$a; <br>
        $a = 0; <br>
        echo $c; <br>
        </span>, результат: <span class="attention">0</span>
    </p>
</div>