<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"?
    <title>File</title>
</head>
<body>
Początek pliku
?php
$name = 'Anna';
include '.\3_files\file.php';
include_once '.\3_files\file.php';

echo 'Require:<br>';
require '.\3_files\file.php';
require_once '.\3_files\file.php';



Koniec pliku

?>


</body>
</html>