<div class="accordion-menu__item">Змінні</div>
<div class="accordion-menu__item-text hidden">
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