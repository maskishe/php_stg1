<?php
// 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
// если $a и $b положительные, вывести их разность;
// если $а и $b отрицательные, вывести их произведение;
// если $а и $b разных знаков, вывести их сумму;
// Ноль можно считать положительным числом.
echo '<h1>Lesson 2. Task #1</h1>';
$a = 0;
$b = 9;
echo "a = " . $a . '<br>';
echo "b = " . $b . '<br>';
if ($a >= 0 && $b >= 0) {
    echo "a - b = " . $a - $b . '<br>';
} elseif ($a < 0 && $b < 0) {
    echo "a * b = " . $a * $b . '<br>';
} else {
    echo "a + b = " . $a + $b . '<br>';
}

// 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
echo '<h1>Lesson 2. Task #2</h1>';
$a= 9;
echo "a = " . $a . '<br>';
switch ($a) {
    case 1:
        print_numbers($a);
        break;
    case 2:
        print_numbers($a);
        break;
    case 2:
        print_numbers($a);
        break;      
    case 3:
        print_numbers($a);
        break;       
    case 4:
        print_numbers($a);
        break;
    case 5:
        print_numbers($a);
        break;
    case 6:
        print_numbers($a);
        break;      
    case 7:
        print_numbers($a);
        break;             
    case 8:
        print_numbers($a);
        break;
    case 9:
        print_numbers($a);
        break;
    case 10:
        print_numbers($a);
        break;      
    case 11:
        print_numbers($a);
        break;       
    case 12:
        print_numbers($a);
        break;
    case 13:
        print_numbers($a);
        break;
    case 14:
        print_numbers($a);
        break;      
    case 15:
        print_numbers($a);
        break;            
}
function print_numbers($x) {
    for ($i = $x; $i <=15; $i++) {
        echo $i . '<br>';
    }
}

// 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
echo '<h1>Lesson 2. Task #3</h1>';
$a = 9;
$b = 3;
echo "a = " . $a . '<br>';
echo "b = " . $b . '<br>';
function sum_func ($x, $y) {
    return $x + $y;
}
echo "a + b = " . sum_func ($a, $b) . '<br>';

function subtraction_func ($x, $y) {
    return $x - $y;
}
echo "a - b = " . subtraction_func ($a, $b) . '<br>';

function multiplication_func ($x, $y) {
    return $x * $y;
}
echo "a * b = " . multiplication_func ($a, $b) . '<br>';

function division_func ($x, $y) {
    return $x / $y;
}
echo "a / b = " . division_func ($a, $b) . '<br>';

// 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
//где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
//В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
echo '<h1>Lesson 2. Task #4</h1>';
$a = 9;
$b = 3;
$r = 0;
$oper = "sub"; // Set variable to one of the following operations (sum, sub, div, mult)
echo "a = " . $a . '<br>';
echo "operation = " . $oper . '<br>';
echo "b = " . $b . '<br>';
function mathOperation ($arg1, $arg2, $operation) {
    switch ($operation) {
        case "sum":
            return sum_func($arg1, $arg2);
        break;
        case "sub":
            return subtraction_func($arg1, $arg2);
        break;
        case "div":
            return division_func($arg1, $arg2);
        break;
        case "mult":
            return multiplication_func($arg1, $arg2);
        break;
        default:
            echo "Incorrect operation" . '<br>';
            global $r;
            $r = 1;
    }
}
if ($r = 1): //Не понятно, почему в любом случае присваивается $r = 1. Он же в default задается, только когда не срабатывают другие кейсы
    echo "Incorrect operation" . '<br>';
else:
    echo "a ". $oper . " b = " . mathOperation ($a, $b, $oper) . '<br>';
endif;
echo "a ". $oper . " b = " . mathOperation ($a, $b, $oper) . '<br>';

// 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
echo '<h1>Lesson 2. Task #6</h1>';
function power($val, $pow) {
    if ($pow == 1): return $val;
    else:
    return $val * power($val,$pow-1);
    endif;
}
$a = 10;
$pow = 3;
echo "a = " . $a . '<br>';
echo "aˆ" . $pow . " = " . power($a,$pow) . '<br>';

// 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
// 22 часа 15 минут
// 21 час 43 минуты
echo '<h1>Lesson 2. Task #7</h1>';

?>