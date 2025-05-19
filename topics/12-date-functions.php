    <div class="accordion-menu__item">Функції для роботи з датою та часом</div>
<div class="accordion-menu__item-text">
<p>
        <span class="accordion-menu__item-header">Документація</span>
        <a href='https://www.php.net/manual/uk/datetime.formats.php'>Документацію по функціям для роботи з датою та часом можна знайти тут.</a>
    </p>
    <p>
        <span class="accordion-menu__item-header">date</span>
        <span class="code">date</span> - використовується для форматування поточної дати та часу <span class="attention">на сервері</span> відповідно до заданого формату. <br> <br>

        <div class="code">
            echo date("d.m.Y H:i:s");
        </div>, результат <span class="attention">
            19.05.2025 20:37:57
        </span>
    </p>
    <p>
        <span class="accordion-menu__item-header">time</span>
        <span class="code">time</span> - повертає поточну позначку системного часу Unix (к-сть секунд з 1970 року). <br> <br>

        <div class="code">
            echo time();
        </div>, результат <span class="attention">
            1747687586
        </span> <br>

        це можна конвертувати у дату: <br>
        <div class="code">
            echo date("d.m.Y H:i:s", , time());
        </div>, результат <span class="attention">
            19.05.2025 20:37:57
        </span>
    </p>
    <p>
        <span class="accordion-menu__item-header">microtime</span>
        <span class="code">microtime</span> - повертає поточну позначку системного часу Unix разом з мікросекундами (к-сть секунд з 1970 року). <br> <br>

        <div class="code">
            echo microtime();
        </div>, результат <span class="attention">
            0.23947600 1747688464
        </span>
    </p>
    <p>
        <span class="accordion-menu__item-header">date_default_timezone_get</span>
        <span class="code">date_default_timezone_get</span> - повертає часовий пояс за промовчанням. <br> <br>

        <div class="code">
            echo date_default_timezone_get();
        </div>, результат <span class="attention">
            UTC
        </span>
    </p>
    <p>
        <span class="accordion-menu__item-header">date_default_timezone_set</span>
        <span class="code">date_default_timezone_set</span> - встановлює часовий пояс за промовчанням для всіх функцій дати/часу у скрипті. <br> <br>

        <div class="code">
            date_default_timezone_set('Europe/Kyiv'); <br>
            echo date("d.m.Y H:i:s");
        </div>, результат <span class="attention">
            19.05.2025 23:37:57
        </span>
    </p>
</div>