<?php

$name = "Антон";
$age = "25";

echo "Меня зовут $name".'<br>';
echo "Мне $age лет".'<br>';

if($age>=18 && $age<=59) echo "Вам еще работать и работать".'<br>';
elseif ($age>=59) echo "Вам пора на пенсию".'<br>';
elseif ($age>=0 && $age<=17) echo "Вам еще рано работать".'<br>';
else echo "Неизвестный возраст".'<br>';

$day = 4;

switch ($day) {
    case ($day>=1 && $day<=5):
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}

$s=10;
$t=3;
$speed1=$s*$t;
$speed2=($s*1000)/($t*3600);

echo "<br>Скорость движения автомобиля на заданном участке = $speed1 км/час<br>";
echo "Скорость движения автомобиля на заданном участке = $speed2 м/c<br>";

//Задание 14

$foo = 'bar';
$bar = 10;
$foo = $bar;
echo $foo."<br>";

//Задание 15

$a=8;
$b=2;
$operator='-';
if ($b==0 and $operator=='/'){
    echo "на 0 делить нельзя";
}else {
    if ($operator == '+') {$c=$a + $b;}
    if ($operator == '-') {$c=$a - $b;}
    if ($operator == '/') {$c=$a / $b;}
    if ($operator == '*') {$c=$a * $b;}
    if ($operator == '%') {$c=$a % $b;}
    echo $c.'<br>';
}

//Задание 16

$a = 5;
$b = 20;

if ($a>$b) echo $a.'<br>';
else echo $b.'<br>';

//Задание 17

$a='78';
$b=78;
if($a==$b) echo "Числа равны";
else echo "Не равны";

//Задание 17
?>
