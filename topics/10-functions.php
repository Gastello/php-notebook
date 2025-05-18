<div class="accordion-menu__item">Функції</div>
    <div class="accordion-menu__item-text hidden">
        <p>
            <span class="accordion-menu__item-header">Що таке функція в PHP</span>
            Функція — це блок коду, який можна викликати багато разів. <br>

            Допомагає уникнути дублювання коду. <br> <br>

            Оголошення функції: <br>

            <span class="code">
                function sayHello() { <br>
                    &ensp;&ensp;echo "Hello!"; <br>
                } 
            </span> <br>

            Виклик функції: <br>

            <span class="code">sayHello();</span> <br>
        </p>
        <p>
            <span class="accordion-menu__item-header">Функції з параметрами</span>
            
            Функція може приймати параметри для роботи з різними даними. <br> <br>

            Приклад: <br>

            <span class="code">
                function greet($name) { <br>
                    &ensp;&ensp;echo "Hello, $name!"; <br>
                } <br>
                greet('Anna');
            </span>, виведе: <span class="attention">Hello, Anna!</span>
        </p>
        <p>
            <span class="accordion-menu__item-header">Параметри за замовчуванням</span> 
            Можна встановити значення параметра за замовчуванням. <br> <br>

            Приклад: <br>

            <span class="code">
                function greet($name = "Guest") { <br>
                    &ensp;&ensp;echo "Hello, $name!"; <br>
                } <br>
                greet();
            </span>, виведе: <span class="attention">Hello, Guest!</span>
        </p>
        <p>
    <span class="accordion-menu__item-header">Функції з return</span>  
        Функція може повертати значення за допомогою ключового слова <code>return</code>. <br><br>

        Це дозволяє зберігати результат виконання функції та використовувати його пізніше. <br><br>

        Приклад: <br>

        <span class="code">
            function sum($a, $b) { <br>
                &ensp;&ensp;return $a + $b; <br>
            } <br>
            $result = sum(3, 5); <br>
            echo $result;
        </span>, виведе: <span class="attention">8</span>
    </p>

</div>