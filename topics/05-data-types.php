<div class="accordion-menu__item">Типи даних у PHP</div>
<div class="accordion-menu__item-text hidden">
    <p>
        <span class="accordion-menu__item-header">Основні типи даних</span>
        PHP - динамічна мова програмування, яка підтримує 8 основних типів даних та 2 псевдотипи. Динамічність означає, що тип змінної визначається під час виконання програми і може змінюватися.
    </p>

    <p>
        <span class="accordion-menu__item-header">Тип String (Рядок)</span>
        Рядки можна виводити за допомогою <span class="code">echo</span>, але для отримання додаткової технічної інформації використовується <span class="code">var_dump()</span>:
        <br>
        <span class="code">$str1 = "String";<br>var_dump($str1);</span>
        <br>
        Результат: <span class="attention">string(6) "String"</span> (довжина рядка - 6 символів)
        <br><br>
        У UTF-8 кириличні символи займають 2 байти:
        <br>
        <span class="code">$str2 = "Рядок";<br>var_dump($str2);</span>
        <br>
        Результат: <span class="attention">string(10) "Рядок"</span>
        <br><br>
        Переноси рядків також враховуються:
        <br>
        <span class="code">$str3 = "Multi<br>Line<br>String";<br>echo($str3);<br>var_dump($str3);</span>
        <br>
        Результат: <span class="attention">string(19) "Multi<br>Line<br>String"</span>
        <br><br>
        Спеціальні символи: <span class="code">\t</span> (табуляція), <span class="code">\n</span> (перенос рядка)
    </p>

    <p>
        <span class="accordion-menu__item-header">Числові типи</span>
        <strong>Integer (Цілі числа):</strong>
        <br>
        PHP автоматично конвертує рядки, що містять числа, у числовий тип:
        <br>
        <span class="code">$num1 = 10;<br>$numStr = "10";<br>echo($num1 + $numStr);</span>
        <br>
        Результат: <span class="attention">20</span>
        <br><br>
        <strong>Float/Double (Числа з плаваючою точкою):</strong>
        <br>
        Конвертація між типами:
        <br>
        <span class="code">$float = 7.89;<br>echo(intval($float));</span> ➡️ <span class="attention">7</span>
        <br>
        <span class="code">echo(gettype($float));</span> ➡️ <span class="attention">double</span>
        <br><br>
        Зміна типу змінної:
        <br>
        <span class="code">$floatNum = 3.1414;<br>settype($floatNum, "integer");<br>echo($floatNum);</span>
        <br>
        Результат: <span class="attention">3</span>
        <br>
        Доступні варіанти для settype(): "integer", "string", "boolean", "array", "object", "null"
    </p>

    <p>
        <span class="accordion-menu__item-header">Тип Boolean</span>
        Логічний тип даних, що приймає значення true або false:
        <br>
        <span class="code">$bool = true;<br>echo($bool);</span> ➡️ <span class="attention">1</span> (false не виводить нічого)
        <br><br>
        Функції перевірки типів:
        <br>
        <span class="code">var_dump(is_int($num1));</span> ➡️ <span class="attention">true</span>
        <br>
        <span class="code">var_dump(is_int($bool));</span> ➡️ <span class="attention">false</span>
        <br>
        Аналогічні функції: is_string(), is_float(), is_bool(), is_array(), is_object()
    </p>

    <p>
        <span class="accordion-menu__item-header">Тип Null</span>
        Спеціальне значення, що означає відсутність значення:
        <br>
        <span class="code">$null = null;<br>var_dump(isset($idk));</span> ➡️ <span class="attention">false</span> (змінна не існує)
        <br>
        <span class="code">var_dump(isset($float));</span> ➡️ <span class="attention">true</span> (змінна існує)
        <br>
        <span class="code">var_dump(isset($null));</span> ➡️ <span class="attention">false</span> (null вважається невстановленим значенням)
    </p>

    <p>
        <span class="accordion-menu__item-header">Тип Array (Масив)</span>
        <strong>Нумеровані масиви:</strong>
        <br>
        <span class="code">$arr1 = ['String', 10, 41.31, true];<br>var_dump($arr1);</span>
        <br>
        або
        <br>
        <span class="code">$arr2 = array('String', 10, 41.31, true);</span>
        <br><br>
        <strong>Асоціативні масиви:</strong>
        <br>
        <span class="code">$arr3 = ["name"=>"Max", 'age'=>22, 'isStudent'=>false];</span>
        <br><br>
        <strong>Багатовимірні масиви:</strong>
        <br>
        <span class="code">$arr5 = [[1,2,3],[4,5,6],[7,8,9]];</span>
    </p>

    <p>
        <span class="accordion-menu__item-header">Робота з масивами</span>
        Розмір масиву:
        <br>
        <span class="code">$fruits = ['banana', 'pineapple', 'strawberry'];<br>echo sizeof($fruits);</span> ➡️ <span class="attention">3</span>
        <br>
        <span class="code">echo $fruits[1];</span> ➡️ <span class="attention">pineapple</span>
        <br><br>
        Додавання/видалення елементів:
        <br>
        <span class="code">array_push($fruits, "mango");<br>array_unshift($fruits, "grape");</span>
        <br>
        <span class="code">array_pop($fruits);<br>array_shift($fruits);</span>
        <br><br>
        Сортування:
        <br>
        <span class="code">asort($numbers);</span> (за значеннями, за зростанням)
        <br>
        <span class="code">arsort($numbers);</span> (за значеннями, за спаданням)
        <br><br>
        Об'єднання масивів:
        <br>
        <span class="code">$newArray = array_merge($fruits, $numbers);</span>
        <br><br>
        Перетворення рядка в масив і навпаки:
        <br>
        <span class="code">$arrayFromString = explode(', ', 'One, Two, Three');</span>
        <br>
        <span class="code">$stringFromArray = implode(' | ', $arrayFromString);</span>
    </p>

    <p>
        <span class="accordion-menu__item-header">Тип Object</span>
        Об'єкти створюються з класів або як stdClass:
        <br>
        <span class="code">$obj = new stdClass;<br>$obj->name = "Max";<br>$obj->age = 16;<br>var_dump($obj);</span>
        <br>
        Результат: <span class="attention">object(stdClass)#1 (2) { ["name"]=> string(3) "Max" ["age"]=> int(16) }</span>
    </p>

    <p>
        <span class="accordion-menu__item-header">Тип Resource</span>
        Спеціальний тип, що представляє зовнішні ресурси (файли, з'єднання з БД тощо):
        <br>
        <span class="code">$file = fopen('test.txt', 'r');<br>var_dump($file);</span>
        <br>
        Результат: <span class="attention">resource(3) of type (stream)</span>
    </p>
</div>