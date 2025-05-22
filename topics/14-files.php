    <div class="accordion-menu__item">Файли та функції для роботи з файлами</div>
<div class="accordion-menu__item-text">
    <p>
        <span class="accordion-menu__item-header">Документація</span>
        <a href='https://www.php.net/manual/uk/ref.filesystem.php'>Документацію для роботи з файлами можна знайти тут.</a>
    </p>
    <p>
        <span class="accordion-menu__item-header">html атрибут enctype</span>        
        Атрибут <span class="code">enctype</span> визначає спосіб кодування даних форми при подачі їх на сервер (тільки для <span class="code">method="post"</span>)
        <br>
        Зазвичай встановлювати значення атрибута <span class="code">enctype</span> не потрібно, дані цілком правильно розуміються на стороні сервера.
        <br>
        Однак, якщо використовується поле для відправки файлу (<?php echo htmlspecialchars('<input type="file">'); ?>), слід визначити атрибут <span class="code">enctype</span> як <span class="code">multipart/form-data</span>.
        <br><br>
        Атрибут enctype може отримувати 3 значення : <br>

        <span class="code">application/x-www-form-urlencoded</span> - Всі символи кодуються перед відправкою (замість пробілів проставляється +, символи кодуються шістнадцятковими значеннями.) <br>

        <span class="code">multipart/form-data</span> - Дані не кодуються. Це значення застосовується при відправленні файлів. <br>

        <span class="code">text/plain</span> - Пропуски замінюються знаком +, букви і інші символи не кодують. <br>
        <br>
        <span class="attention">Атрибут enctype може бути використаний тільки при method="post"</span>
    </p>
    <p>
        <span class="accordion-menu__item-header">$_FILES</span>      
        <span class="code">$_FILES</span> у мові програмування PHP - це суперглобальний масив, який використовується для отримання інформації про завантажені файли під час передачі файлів через форму на веб-сторінці. Цей масив надає доступ до різних атрибутів файлу, таких як ім'я файлу, тип MIME, розмір та часовий шлях. <br> <br>
        
        Після завантаження файлу пишемо цей код:
        <span class="code">
            print_r($_FILES);
        </span>, результат: 
        <span class="attention">
            Array ( [file] => Array ( [name] => blank.png [full_path] => blank.png [type] => image/png [tmp_name] => C:\wamp64\tmp\phpB781.tmp [error] => 0 [size] => 7082 ) )
        </span>
    </p>
    <p>
        <span class="accordion-menu__item-header">move_uploaded_file</span>
        
        <span class="code">move_uploaded_file</span> - переміщає загружений файл в нове місце. <br><br>
        Параметри: <br>
        from - Ім'я завантаженого файлу. <br>
        to - Пункт призначення переміщеного файлу. <br><br>
        <span class="code">
            if(!empty($_FILES)){
            &ensp;&ensp;move_uploaded_file($_FILES['file']['tmp_name'], 'files/'.$_FILES['file']['name']);
            }
        </span>, в результаті завантажений файл ми зможемо найти в папці 'files/'
    </p>
    <p>
        <span class="accordion-menu__item-header">Можливі помилки</span>
        
        0 => 'Помилки немає, файл успішно завантажено', <br>
        1 => 'Завантажений файл перевищує директиву upload_max_filesize у php.ini', <br>
        2 => 'Завантажений файл перевищує директиву MAX_FILE_SIZE, зазначену у HTML-формі', <br>
        3 => 'Завантажений файл завантажено лише частково', <br>
        4 => 'Файл не завантажено', <br>
        6 => 'Відсутня тимчасова папка', <br>
        7 => 'Не вдалося записати файл на диск.', <br>
        8 => 'Розширення PHP зупинило завантаження файлу.', <br>
    </p>
    <p>
        <span class="accordion-menu__item-header">file_exists</span>
        
        <span class="code">file_exists</span> - перевіряє чи існує файл. <br> <br>

        <span class="code">
            var_dump(file_exists('./files/blank.png'));
        </span>, результат:
        <span class="attention">
            boolean true
        </span>
    </p>
    <p>
        <span class="accordion-menu__item-header">rename</span>
        
        <span class="code">rename</span> - перейменувати файл або каталог.<br> <br>

        <span class="code">
            if(file_exists('./files/blank.png')){
            &ensp;&ensp;rename('./files/blank.png', './files/newname.png');
            }
        </span>, в результаті файл перейменовано на 
        <span class="attention">
            newname.png 
        </span> <br> <br>
        <span class="attention">Змінюючи назву можна змінити й шлях!</span><br> <br>
        <span class="attention">Папки також можна перейменувати!</span>
    </p>
    <p>
        <span class="accordion-menu__item-header">mkdir</span>

        <span class="code">mkdir</span> - створити новий каталог.<br> <br>
        Основні параметри: <br>
        <span class="code">$directory</span>: Шлях до директорії, яку потрібно створити. <br>
        <span class="code">$permissions</span>: Права доступу (за замовчуванням 0777). <br>
        <span class="code">$recursive</span>: Логічне значення, яке вказує, чи потрібно створювати директорії рекурсивно, тобто створювати також батьківські директорії, якщо їх немає. <br>
        <span class="code">$context</span>: Контекст для потоку даних (опціональний). <br>
    </p>
    <p>
        <span class="accordion-menu__item-header">rmdir</span>

        <span class="code">rmdir</span> - видалити каталог. <br><br>
        <span class="attention">Видалити можливо тільки пустий каталог!</span>
    </p>
    <p>
        <span class="accordion-menu__item-header">copy</span>

        <span class="code">copy</span> - скопіювати файл. <br><br>
        <span class="code">copy('./topics/00-template.php', './files/template.php')</span>, в результаті файл <span class="code">00-template.php</span> скопіюється в <span class="attention">'./files/template.php'</span> із новим іменем.
    </p>
    <p>
        <span class="accordion-menu__item-header">unlink</span>

        <span class="code">unlink</span> - видалити файл. 
    </p>
    <p>
        <span class="accordion-menu__item-header">is_dir/is_file</span>

        Перевіряє чи є заданий елемент каталогом/файлом.  <br><br>
        <span class="code">
            var_dump(is_dir('./files')); <br>
            var_dump(is_file('./files/newname.png'));
        </span>, результат:
        <span class="attention">
            boolean true <br>
            boolean true
        </span>
    </p>
    <p>
        <span class="accordion-menu__item-header">file_get_contents</span>

       <span class="code">file_get_contents</span> - Записує вміст файла в рядок.
       <br><br>
        Ця функція є подібною до функції <span class="code">file()</span>, за виключенням того, що <span class="code">file_get_contents()</span> повертає вміст файлу рядком <span class="code">string</span>, починаючи від зазначеного зміщення <span class="code">offset</span>, обмежуючись параметром максимальної довжини <span class="code">maxlen</span> в байтах. При невдачі, <span class="code">file_get_contents()</span> повертає <span class="attention">false</span>. <br> <br>
        Для коректного відображення переносів рядка - використовуй <span class="attention">nl2br()</span>
    </p>
    <p>
        <span class="accordion-menu__item-header">file</span>

       <span class="code">file</span> - Записує вміст файла в масив.
    </p>
    <p>
        <span class="accordion-menu__item-header">file_put_contents</span>

       <span class="code">file_put_contents</span> - Записує дані в файл.
       <br><br>
       Ця функція є ідентичною до послідовних викликів <span class="code">fopen()</span>, <span class="code">fwrite()</span> та <span class="code">fclose()</span> для записування даних у файл. <br>
       Якщо файлу (filename) не існує, його буде створено. В іншому випадку, існуючий файл буде перезаписано, якщо не встановлено флаг FILE_APPEND. <br><br>
       Параметри: <br>
       <span class="code">filename</span> - Шлях до файлу, куди будуть записуватись дані. <br>
       <span class="code">data</span> - Дані для запису. Може бути рядком (string), масивом (array) або ресурсом потоку (stream). <br>
       Якщо дані (data) є ресурсом потоку (stream), залишок буфера цього потоку буде скопійовано до зазначеного файла. Це схоже на використання stream_copy_to_stream(). <br>
       Ви також можете зазначити параметр data як як одномірний одиночний масив. Це буде еквівалентно до виклика file_put_contents($filename, implode('', $array)). <br>
       
       <span class="code">flags</span> - Значення параметра flags може бути будь-якою комбінацією з наступних флагів, об'єднаних бінарним оператором АБО (|). <br> <br>
       Доступні флаги: <br>
       <table>
            <tr>
                <th>Флаг</th>
                <th>Опис</th>
            </tr>
            <tr>
                <td>FILE_APPEND</td>
                <td>Якщо файл filename вже існує, додавати дані, замість перезаписування старого вмісту.</td>
            </tr>
            <tr>
                <td>LOCK_EX</td>
                <td>Отримати монопольне блокування поки йде процес записування.</td>
            </tr>
            <tr>
                <td>FILE_USE_INCLUDE_PATH</td>
                <td>Пошук файла filename в директоріях, що підключаються. Прогляньте include_path для більш детальної інформації.</td>
            </tr>
        </table>  	
    </p>
    <p>
        <span class="accordion-menu__item-header">filesize</span>
        
        <span class="code">filesize</span> - Повертає розмір файлу в байтах.
    </p> 
    <p>
        <span class="accordion-menu__item-header">fopen</span>
        
    ✅ <span class="code">fopen(filename, mode)</span> <br> 
    Відкриває файл для читання, запису або обох. <br>
    Повертає файловий ресурс (handler) або `false`, якщо помилка.
    <br> <br>
    Режими: <br>
    <span class="code">'r'</span> — лише читання <br>
    <span class="code">'w'</span> — лише запис, створює новий або очищає існуючий файл <br>
    <span class="code">'a'</span> — додавання в кінець <br>
    <span class="code">'r+'</span>, <span class="code">'w+'</span>, <span class="code">'a+'</span> — читання + запис <br><br>
    Приклад: <br>
    <span class="code">$handle = fopen("data.txt", "r");</span>
    </p> 
    <p>
        <span class="accordion-menu__item-header">fread</span>
    ✅ <span class="code">fread(handle, length)</span> <br>
    Читає вміст з файлу. <br>
    Необхідно вказати кількість байтів для читання.
    <br><br>
    Приклад: <br>
    <span class="code">$content = fread($handle, filesize("data.txt"));</span>
    </p> 
    <p>
        <span class="accordion-menu__item-header">fwrite</span>

    ✅ <span class="code">fwrite(handle, string)</span> <br>
    Записує рядок у файл. <br>
    Повертає кількість записаних байтів.
    <br><br>
    Приклад: <br>
    <span class="code">fwrite($handle, "Hello, world!");</span>
    </p> 
    <p>
        <span class="accordion-menu__item-header">fclose</span>

    ✅ <span class="code">fclose(handle)</span> <br>
    Закриває відкритий файл. <br>
    Важливо закривати файл для звільнення ресурсів.
    <br><br>
    Приклад: <br>
    <span class="code">fclose($handle);</span>
    <br><br>

    </p> 
</div>