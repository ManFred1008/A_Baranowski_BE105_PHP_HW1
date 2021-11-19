<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

   <?php 

   /*
   1. Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).
    */

   $task = 0;
   $a = 10;
   $b = 2;

   echo '<hr/>'. 'Задание ' . ++$task . '<hr/>';
   echo 'a = ' . $a . '<br/>';
   echo 'b = ' . $b . '<br/>';
   echo 'a + b = ' . $a + $b . '<br/>';
   echo 'a - b = ' . $a - $b . '<br/>';
   echo 'a * b = ' . $a * $b . '<br/>';
   echo 'a / b = ' . $a / $b . '<br/>';

   /*
   2. Даны три числа x = 2,y = 6 и z = 9. Найдите (x+1)4−2(z−2x^2+y^2).
   */

   echo '<hr/>'. 'Задание ' . ++$task . '<hr/>';

   $x = 2;
   $y = 6;
   $z = 9;
   $exp = ($x + 1) * 4 - 2 * ($z - 2 * $x**2 + $y**2);

   echo '(x+1)4−2(z−2x^2+y^2)= ' . $exp;

   /*
   3. Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.
   */

   echo '<hr/>'. 'Задание ' . ++$task . '<hr/>';

   $a = 17;
   $b = 10;
   $c = $a - $b;
   $d = 7;
   $result = $c + $d;
   echo $result;

   /*
   4. Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'
   */

   echo '<hr/>'. 'Задание ' . ++$task . '<hr/>';

   $text1 = 'Hello, ';
   $text2 = 'World!';

   echo $text1 . $text2;

   /*
   5. Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.
   */
   echo '<hr/>'. 'Задание ' . ++$task . '<hr/>';

   $name = 'Andrey';

   echo 'Hello, ' . $name . '!';

   /*
   6. Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.   
   */

   echo '<hr/>'. 'Задание ' . ++$task . '<hr/>';

   $num = '12345';

   $sum = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
   
   echo $sum;

   /*
   7. Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце, в году и сколько прошло секунд с начала 2000 года.
   */
   echo '<hr/>'. 'Задание ' . ++$task . '<hr/>';

   date_default_timezone_set('Europe/Minsk');
   $hours = 4;
   $hToSec = $hours * 3600;
   echo 'B ' .$hours. ' часах: ' .$hToSec. ' секунд<br/>';

   $sut = 3;
   $sutToSec = ($sut * 24) * 3600;
   echo 'B ' .$sut. ' сут.: ' .$sutToSec. ' секунд<br/>';

   $month = 5;
   $monToSec = (($month * 30) * 24) * 3600;
   echo 'B ' .$month. ' мес.: ' .$monToSec. ' секунд<br/>';

   $year = 1;
   $yearToSec = (($year * 365) * 24) * 3600;
   echo 'B ' .$year. ' год.: ' .$yearToSec. ' секунд<br/>';

   $day = getdate();

   $sec = $day['seconds'];
   $min = $day['minutes'];
   $hours = $day['hours'];
   $hToSec = $hours * 3600;
   $sut = $day['yday'];
   $sutToSec = ($sut * 24) * 3600;
   $year = $day['year'] - 2000;
   $yearToSec = (($year * 365) * 24) * 3600;

   $sumSec = $sec + ($min * 60) + $hToSec + $sutToSec + $yearToSec;
   echo '<br/>';
   echo 'С начала 2000 года прошло ' . $sumSec . ' секунд';

   /*
   8. Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
   */
   echo '<hr/>'. 'Задание ' . ++$task . '<hr/>';

   $localtime = localtime();

   $hour = $localtime[2];
   $minute = $localtime[1];
   $second = $localtime[0];

   echo $hour . ':' . $minute . ':' . $second;

   /*
   9 Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться. Код для переделки:

   $var = 1;
   $var = $var + 12;
   $var = $var - 14;
   $var = $var * 5;
   $var = $var / 7;
   $var = $var + 1;
   $var = $var - 1;
   echo $var;
   
   */
   echo '<hr/>'. 'Задание ' . ++$task . '<hr/>';

   $var = 1;
   $var = $var + 12;
   $var = $var - 14;
   $var = $var * 5;
   $var = $var / 7;
   $var = $var + 1;
   $var = $var - 1;
   echo $var;

   echo '<br/>';

   $var = 1;
   $var += 12;
   $var -= 14;
   $var *= 5;
   $var /= 7;
   $var += 1;
   $var -= 1;
   echo $var;

   /*
   10. Создайте константу и присвойте ей значение - ваша фамилия, создайте соответствующие переменные со сл. значениями: ваше имя, ваше отчество, ваш возраст. Проверьте существует ли созданная константа, если да, то выведите фразу "Меня зовут <ваша фамилия> (сокр. <ваше имя> и сокр.Курс «Программирование на PHP». ваше отчество). Мне <ваш возраст> лет". Каждая фраза должна начинаться с новой строки. Например:
   "Меня зовут Иванов (И. И.).
   Мне 5 лет."
   */

   echo '<hr/>'. 'Задание ' . ++$task . '<hr/>';

   define('SECOND_NAME', 'Baranowski');
   $second_name = SECOND_NAME;
   $name = 'Andrey';
   $father_name = 'Aleksandrowich';
   $age = 31;

   if (defined('SECOND_NAME'))
      echo "Меня зовут {$second_name} ({$name[0]}. {$father_name[0]}.). <br/> Мне {$age} год.";
   ?>

</body>
</html>