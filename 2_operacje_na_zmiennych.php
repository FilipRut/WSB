<?php

//operatory bitowe
//and &, or |, not ~, xor ^, <<, >>

$x = 0b1010;
$x = $x << 2; //101000(2) => 40(10)
$x = $x >> 1; //10100(2) => 20(10)
echo "$x<br>";

//porównanie === <=>

$x=1;
$y=1;
if ($x == $y) {
echo '$x jest równa $y<br>';
}else {
echo '$x nie jest równa $y<br>';
}

if ($x === $y){
echo '$x jest identyczna $y<br>';
} else {
echo '$x nie jest identyczna $y<br>'; 
}

echo gettype($x); //integer
echo gettype($y), '<hr>'; //double

$x=-10;
$y=1;

echo $x<=>$y;
echo '<hr>';

$x=2;
$x=$x++;
echo $x; //2
$y=$x++;
echo $y; //2
echo "$x<hr>"; //3



// operatory rzutowania
// bool, int, float, string, array, object, unset

$x = '123abc45';
echo "$x<br>";
echo 'Typ danych $x: ',gettype($x),'<br>';
$x = (int)$x;
echo "$x<br>";
echo 'Typ danych $x: ',gettype($x),'<hr>';

$x = 0;
echo "$x<br>";
echo 'Typ danych $x: ',gettype($x),'<br>';
$x = (bool)$x;
echo "$x<br>"; //false
echo 'Typ danych $x: ',gettype($x),'<hr>';

$x = '10';
echo "$x<br>";
echo 'Typ danych $x: ',gettype($x),'<br>';
$x = (float)$x;
echo "$x<br>"; //false
echo 'Typ danych $x: ',gettype($x),'<hr>';

$x = '10';
echo "$x<br>";
echo 'Typ danych $x: ',gettype($x),'<br>';
$x = (unset)$x;
echo "$x<br>"; //false
echo 'Typ danych $x: ',gettype($x),'<hr>'; //NULL

//rozmiar typu integer
echo PHP_INT_SIZE, '<br>';

//kontrola typu zmiennych
//is_int(), is_float(), in_numeric(), is_bool(), is_null()

$x = 1;
echo is_int($x);

$w;
// operator ignorowania błędów @
echo @gettype($w);

// stala predefiniowana
echo PHP_VERSION, '<br>';
$ver = PHP_VERSION;
if ($ver > 7.4) {
echo 'Nowa wersja php';
}else{
echo 'Stara wersja php';
}

//stale
//nazwy z duzych liter
<
define('NAME', 'Janusz',true) '<br>';
//echo NAME;
echo name;


?>