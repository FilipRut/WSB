<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fORMULARZE</title>
</head>
<body>
   <form method="get">
   <input type="text" name="name">
   <input type+="color" name="color"><br>
   <input type="submit" value="Wyslij dane"><br>

   </form>

   <?php
//if (isset($_GET['name'])) {
if (!empty($_GET['name']) && !empty($_GET['color'])) {

    $name = $_GET['name'];
    $name = $_GET['color'];
  echo "Twoje imie: $name";
  echo "<br>Kolor: $color";
}else{

    echo '<hr>Wypelnij dane';



}











   ?>
</body>
</html>

