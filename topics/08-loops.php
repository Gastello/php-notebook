<div class="accordion-menu__item">Цикли</div>
<div class="accordion-menu__item-text hidden">
    <span class="accordion-menu__item-header">Цикл for</span>
    <p>
            <span class="code">
            for($a=1;$a<=5;$a++){ <br>
            &ensp;&ensp;echo $a; <br>
            } <br>
            </span>, результат <span class="attention">12345</span>.
            <span class="code">
            for($a=5;$a>0;--$a){ <br>
            &ensp;&ensp;echo $a; <br>
            } <br>
            </span>, результат <span class="attention">54321</span>.
        </p>
        <p>
            <span class="code">
            for($a=5;$a>0;--$a){ <br>
            &ensp;&ensp;if($a==2) continue; <br>
            &ensp;&ensp;echo $a; <br>
            } 
            </span>, результат <span class="attention">1345</span>.
            <span class="code">
            for($a=5;$a>0;--$a){ <br>
            &ensp;&ensp;if($a==2) break; <br>
            &ensp;&ensp;echo $a; <br>
            } 
            </span>, результат <span class="attention">1</span>.
        </p>
        <p>
            Ітерація по масиву: <br>
            <span class="code">
            $arr = [1,2,3,4,5]; <br>
            for($i=0;$i <
            count($arr);$i++){ <br>
                &ensp;&ensp;echo $arr[$i]; <br>
            } 
            </span>, результат <span class="attention">12345</span>.
    </p>
    <span class="accordion-menu__item-header">Цикл while</span>
    <p>
        <table>
            <tr>
                <th>Цикл</th>
                <th>Особливість</th>
            </tr>
            <tr>
                <td>while</td>
                <td>Перевірка → Потім виконання</td>
            </tr>
            <tr>
                <td>do...while</td>
                <td>Виконання → Потім перевірка</td>
            </tr>
        </table>  	
    </p>
    <p>
        <span class="code">
        $num = 3; <br>
        while($num){ <br>
        &ensp;&ensp;$num--; <br>
        &ensp;&ensp;echo $num; <br>
        }
        </span>, результат <span class="attention">210</span>.

        <span class="code">
        $num = 0; <br>
        do { <br>
        &ensp;&ensp;echo $num; <br>
        } <br>
        while($num); <br>
        </span>, результат <span class="attention">0</span>.
    </p> 
    <span class="accordion-menu__item-header">Цикл foreach</span>
    <p>
        <span class="code">
        $arr = [0,1,2,3,4]; <br>
        foreach($arr as $el){ <br>
        &ensp;&ensp;echo $el; <br>
        } <br>
        </span>, результат <span class="attention">01234</span>.
        <span class="code">
            $fruits = [ <br>
            &ensp;&ensp;'a' => 'apple', <br>
            &ensp;&ensp;'b' => 'banana', <br>
            &ensp;&ensp;'c' => 'cherry' <br>
            ]; <br>
            foreach($fruits as $key => $value){ <br>
            &ensp;&ensp;echo($key . ' ' . $value . ' '); <br>
            }
        </span>, результат <span class="attention">a apple b banana c cherry</span>.
        <br><br>
        foreach працює тільки з масивами або об'єктами (якщо це об'єкти, то ще залежить від інтерфейсів, наприклад Iterator).
        <br>
        Дуже безпечний — не вилетиш за межі масиву.
        <br>
        Не змінює масив під час перебору (тільки якщо спеціально міняти через посилання <span class="code">&</span>):
        <br>
        <span class="code">
        $arr = [1,2,3]; <br>
        foreach($arr as &$el){ <br>
        &ensp;&ensp;$el*=2; <br>
        } <br>
        var_dump($arr); <br>
        </span>, результат
        <span class="attention">
        array (size=3) <br>
        &ensp;&ensp;0 => int 2 <br>
        &ensp;&ensp;1 => int 4 <br>
        &ensp;&ensp;2 => int 6 <br>
        </span>
        <br>
    </p>
</div>