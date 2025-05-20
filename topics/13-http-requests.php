    <div class="accordion-menu__item">HTTP запити в формах</div>
<div class="accordion-menu__item-text hidden">
    <p>
        <span class="accordion-menu__item-header">Що таке GET в PHP?</span>
        Глобальний масив <span class="code">$_GET</span> – це асоціативний масив, який передається на сторінку через URL адресу. <br><br>

        Ви можете створити URL із додатковими параметрами, наприклад: <span class="code">/article.php?id=57</span>. <br>
        Таке посилання містить дані, а саме id тієї новини, яку потрібно відкрити. <br>
        Ви можете отримати ці дані з URL адреси, звернувшись до масиву <span class="code">$_GET</span>. <br> <br>

        У PHP такі дані зв'язуються з допомогою атрибута <span class="code">name</span>. У нашому випадку ми хочемо звернутись до id: <br>
        <span class="code">
            $id = $_GET['id']; <br>
            echo $id;
        </span>, результат:
        <span class="attention">
            57
        </span> <br> <br>
        Вписавши в адресу такі значення: <span class="code">/playground.php?test=hello%20world</span>: <br>
        <span class="code">
            print_r($_GET);
        </span>, отримаємо:
        <span class="attention">
            Array ( [test] => hello world )
        </span>
    </p>
    <p>
        <span class="accordion-menu__item-header">Що таке POST в PHP?</span>
        Глобальний масив <span class="code">$_POST</span> є асоціативним масивом, який передається на сторінку через HTTP метод POST. <br> Такі дані зазвичай надсилаються через різні форми на інші сторінки для їх обробки. Ви можете прийняти ці дані та обробити за допомогою мови PHP. <br> <br>

        У нашому випадку: <br>
        Надсилаємо форму, через <span class="code">method="POST"</span> із паролем користувача <br>
        <span class="code">
            print_r($_POST);
        </span>, отримаємо:
        <span class="attention">
            Array ( [password] => mypass )
        </span> <br>
        <span class="attention">Дані методу POST не відображаються в url!</span>
    </p>
    <p>
        <span class="accordion-menu__item-header">Запис данних</span>
        Коли ми хочемо записати дані, наприклад з <span class="code">$_POST</span>, то потрібно враховувати що їх там може й не бути. <br> 
        <span class="code">
            $pass = $_POST["password"]; <br>
            var_dump($pass);
        </span>, отримаємо помилку:
        <span class="attention">
            ( ! ) Warning: Undefined array key "password"
        </span> <br> <br>
        Правильно записувати так: <br>
        <span class="code">
            $pass = $_POST["password"] ?? ''; <br>
            var_dump($pass);
        </span>, результат:
        <span class="attention">
           string '' (length=0)
        </span>
    </p>
    <p>
        <span class="accordion-menu__item-header">Атрибут action</span>
        Це звичайна HTML-форма без будь-яких спеціальних тегів. Коли користувач заповнить цю форму і натисне кнопку відправлення, буде викликано сторінку <span class="code">test.php</span>: <br> 
        <span class="code">
            <?php 
                echo htmlspecialchars('<form method="POST" action="test.php">') . "<br>";
                echo '&ensp;&ensp;' . htmlspecialchars('<input type="text" name="name">') . "<br>";
                echo '&ensp;&ensp;' . htmlspecialchars('<button type="submit">Send</button>') . "<br>";
                echo htmlspecialchars('</form>') . "<br>";
            ?>
        </span>, яка містить цей код: <br>
        <span class="code">
            if($_POST)var_dump($_POST);
        </span>, результат якого:
        <span class="attention">
            'name' => string 'test' (length=5)
        </span> <br> <br>
    </p>
    <p>
        <span class="accordion-menu__item-header">Атрибут multiple</span>
        Цей булевий атрибут вказує, що в списку можна вибрати декілька параметрів: <br> 
        <span class="code">
            <?php 
                echo htmlspecialchars('<form method="POST">') . "<br>";
                echo '&ensp;&ensp;' . htmlspecialchars('<select name="choices[]" multiple>') . "<br>";
                echo '&ensp;&ensp;&ensp;&ensp;' . htmlspecialchars('<option>number 1</option>') . "<br>";
                echo '&ensp;&ensp;&ensp;&ensp;' . htmlspecialchars('<option>number 2</option>') . "<br>";
                echo '&ensp;&ensp;&ensp;&ensp;' . htmlspecialchars('<option>number 3</option>') . "<br>";
                echo '&ensp;&ensp;' . htmlspecialchars('</select>') . "<br>";
                echo '&ensp;&ensp;' . htmlspecialchars('<button type="submit">Send</button>') . "<br>";
                echo htmlspecialchars('</form>') . "<br>";
            ?>
        </span>, якщо атрибут <span class="code">name</span> буде вказано без уточнення, що це масив 
        (<span class="code">name="choices"</span>), то в змінну буде вписано останній обраний елемент, а не усі обрані, як це має бути з атрибутом <span class="code">multiple</span>. Тому пишемо <span class="code">name="choices[]"</span>!<br>
        Результат виконання 
        <span class="code">
           print_r($_POST);
        </span> такий:
        <span class="attention">
            Array ( [choices] => Array ( [0] => number 1 [1] => number 2 [2] => number 3 ) )
        </span> <br> <br>
    </p>
</div>