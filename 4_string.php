<?php
$text = <<<TEXT
wsb - wy�sza
szko�a
bankowa
TEXT;

echo $text,'<hr>';
echo nl2br($text);

echo strtolower($text),'<br>';
echo strtoupper($text),'<br>';
echo ucfirst($text),'<br>';

$text1 = 'anna Tomasz twoja stara';
echo ucfirst($text1),'<br>';

echo ucwords($text1),'<br>';

$name = 'jAnUsz';
$name = ucfirst(strtolower($name));
echo $name, '<hr>';

$lorem = <<<LOREM
LOREM;

echo $lorem, '<hr>';
$col = wordwrap($lorem, 40, '<br>');
echo $col,'<hr>';

//biale znaki
$name = 'Kasia';
$name1 = '   Kasia   ';

//echo $name, $name1

echo strlen($name); //5
echo strlen($name1), '<br>'; //8
echo strlen(ltrim($name1)); //6
echo strlen(rtrim($name1)); //7
echo strlen(trim($name1)); //5
$name1 = trim($name1);
echo strlen($name1); //5

//przeszukiwanie dnaych
$text = 'Poznań, ul. Rynek Jeżycki 13, tel. 61 627 00 00';
$search = strstr($text, 'tel');
echo $search; //tel. 61 627 00 00

$search = strstr($text, 'Tel');
$search = strstr($text, 'Tel', true);

//czyszczenie zawartosci bufora
ob_clean();

//zad.1
//znajdz domene pobrania od uzytkownika

//przetwarzanie ciagow znakow
$replace = str_replace('%name%', 'Janusz', 'Masz na imie: %name%');
echo $replace;

//substing
$surname = substr('Katarzyna Nowak', 3);
echo $surname; //arzyna Nowak

$surname = substr('Katarzyna Nowak', 3, 5);
echo $surname; //arzyna

?>