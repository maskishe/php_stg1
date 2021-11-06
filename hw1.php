<?php
//  Author: Mikhail Kurzin (GitHub: maskishe, Email: maskishe@gmail.com, Tgram: maskishe)
//  Date:   06 Nov 2021
//  Lesson 1. Task #2. Выполнить примеры из методички и разобраться, как это работает.
echo '<h1>Lesson 1. Task #2</h1>';
$a = 4;
$b = 5;
echo $a + $b . '<br>';    // сложение
echo $a * $b . '<br>';    // умножение
echo $a - $b . '<br>';    // вычитание
echo $a / $b . '<br>';  // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>'; // возведение в степень

$a = 4;
$b = 5;
$a += $b; //equals $a = $a + b
echo 'a = ' . $a . '<br>';
$a = 1;
echo $a++ . '<br>';   // Постинкремент. Returns $a, then increments $a by one.
echo ++$a . '<br>';    // Преинкремент. Increments $a by one, then returns $a.
echo $a-- . '<br>';     // Постдекремент Returns $a, then decrements $a by one.
echo --$a . '<br>';    // Предекремент Decrements $a by one, then returns $a.
?>

<?php
//  Lesson 1. Task #3. Объяснить, как работает данный код
    echo '<h1>Lesson 1. Task #3</h1>';
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true?
    //PHP – язык с динамической типизацией. Любая переменная в процессе выполнения программы может изменить свой тип данных.
    //В данном случае переменная $b изменила тип на int 
    
    var_dump((int)'012345');     // Почему 12345?
    //При приведении к типу int строки "012345" первый ноль отбрасывается.

    var_dump((float)123.0 === (int)123.0); // Почему false?
    //Операция === сравнивает по значению и типу. В данном случае и значение и тип (после приведения к int) не идентичны.
    echo '<br>';

    $a = (int)0;
    $b = (int)'hello, world';
    var_dump((int)0 === (int)'hello, world'); // Почему true?
    echo 'a = ' . $a . '<br>';
    echo 'b = ' . $b . '<br>';
    //При приведении типа строки 'hello, world' в тип int она принимает значение 0, тк интерпретатор не находит в ней цифровых значений
    //Поэтому сравнение по значению и типу выдает true
?>

<?php
//Lesson 1. Task #4. Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.
$h4 = 'Lesson 1. Task #4';

$title = 'First homework';
$year = date('Y');
?>

<html>
    <head>
        <title><?php echo $title;?></title>
    </head>
    <body> 
    <h1><?php echo $h4;?></h1>
    <span><?php echo $year;?></span>
    <br>
    <br>
    </body>
</html>

<?php
    //Lesson 1. Task #5. *Используя только две переменные, поменяйте их значение местами. 
    //Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя.
    echo '<h1>Lesson 1. Task #5</h1>';
    $a = 9;
    $b = 13;
    echo 'a = ' . $a . '<br>';
    echo 'b = ' . $b . '<br>';
    echo 'Changing variables <br>';
    $a = $a + $b; // a = 22, b = 13
    $b = $a - $b; // a = 22, b = 9
    $a = $a - $b; // a = 13, b = 9
    echo 'a = ' . $a . '<br>';
    echo 'b = ' . $b . '<br>';
?>