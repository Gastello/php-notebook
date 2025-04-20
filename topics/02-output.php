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