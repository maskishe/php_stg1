<?php
//  Author: Mikhail Kurzin (GitHub: maskishe, Email: maskishe@gmail.com, Tgram: maskishe)
//  Date:   15 Nov 2021
//  Comment Code Block Ctrl+K+C/Ctrl+K+U
//  Lesson 3. Task #1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
echo '<h1>Lesson 2. Task #1</h1>';
$a = 0;
while ($a <= 100) {
    if ($a / 3 == intdiv($a , 3) and $a <> 0) {
        echo $a . '<br>';
    }
    $a++;
}


// Lesson 3. Task #2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
// 0 – ноль.
// 1 – нечетное число.
// 2 – четное число.
// 3 – нечетное число.
// …
// 10 – четное число.
echo '<h1>Lesson 2. Task #2</h1>';
$i = 0;
do {
    echo $i;
    if ($i == 0) {
        echo ' - ноль' . '<br>';
    }
    elseif ($i % 2 === 0) {
        echo ' - четное' . '<br>';
    }
    else {
        echo ' - нечетное' . '<br>';
    };
    $i++;
} while ($i <= 10);


// Lesson 3. Task #3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, 
//а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, 
//чтобы результат был таким:
// Московская область:
// Москва, Зеленоград, Клин
// Ленинградская область:
// Санкт-Петербург, Всеволожск, Павловск, Кронштадт
// Рязанская область:
// Рязань, Михайлов, Скопин, Касимов
echo '<h1>Lesson 2. Task #3</h1>';
$arr = array(
    'Московская область:' => [
        "Москва", 
        "Зеленоград", 
        "Клин"
    ],
    'Ленинградская область:' => array ("Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"),
    'Рязанская область:' => array ("Рязань", "Михайлов", "Скопин", "Касимов"),
);
foreach ($arr as $index => $element) {
    echo $index . '<br>';
    foreach ($arr[$index] as $element) {
        echo $element . ', '; 
    }
    echo '<br>'; 
}


// Lesson 3. Task #4. Объявить массив, индексами которого являются буквы русского языка, 
//а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
// Написать функцию транслитерации строк.
echo '<h1>Lesson 2. Task #4</h1>';
$s = 'привет, я тестовая строка для транслитирации';
echo $s . '<br>';
echo translit($s) . '<br>';
function translit($s) {
    $s = (string) $s; // преобразуем в строковое значение
    $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
    return $s;
  }

// 5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
echo '<h1>Lesson 2. Task #5</h1>';
$s = 'привет, я тестовая строка для транслитирации';
echo $s . '<br>';
echo space_rep($s) . '<br>';
function space_rep($s) {
    $s = (string) $s; // преобразуем в строковое значение
    $s = strtr($s, array(' '=>'_'));
    return $s;
  }

// 6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. 
//Необходимо представить пункты меню как элементы массива и вывести их циклом. 
//Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.


// 7. *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так:
// for (…){ // здесь пусто}
echo '<h1>Lesson 2. Task #7</h1>';
for ($i = 0; $i<10; print $i++);

// 8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
echo '<h1>Lesson 2. Task #3</h1>';
$arr = array(
    'Московская область:' => [
        "Москва", 
        "Зеленоград", 
        "Клин"
    ],
    'Ленинградская область:' => array ("Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"),
    'Рязанская область:' => array ("Рязань", "Михайлов", "Скопин", "Касимов"),
);
foreach ($arr as $index => $element) {
    echo $index . '<br>';
    foreach ($arr[$index] as $element) {
        echo $element[0] . ', ';  //Почему-то проблемы с кодировкой. utf8_encode не помогает
        if ($element[0] == 'К') {
            echo $element . ', '; 
        }
    }
    echo '<br>'; 
}

// 9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, 
//производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
echo '<h1>Lesson 2. Task #9</h1>';
$s = 'привет, я тестовая строка для транслитирации';
echo $s . '<br>';
echo translit_str($s) . '<br>';
function translit_str($s) {
    $s = (string) $s; // преобразуем в строковое значение
    $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
    $s = strtr($s, array(' '=>'_'));
    return $s;
  }