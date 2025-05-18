<div class="accordion-menu__item">Умовні оператори</div>
<div class="accordion-menu__item-text hidden">
    <span class="accordion-menu__item-header">If/else</span>
    <p><span class="code">$someInt = 2;</span></p>
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
            switch($someInt){ <br>
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