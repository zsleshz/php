<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$a = 4;
$b = 3;
$c = 4 ;
$d = 15;
$hp = 100;

echo "a = $a <br>";
echo "b = $b<br>";
echo "c = $c <br>";
echo "d = 1, 2, 15 или свое значение=> $d <br>";

if( $a <5) {
    echo "От +1 и до +4<br>";}

else {
    echo "Ошибка +5 и до бесконечности <br>";
}
if ($a >5){
    echo "A >5<br>";
}
else {
    echo "A>5<br>";
}

if ($hp > 100){
    echo "Мало ХП<br>";
}
else {
    echo "Фул ХП<br>";
}
if ($hp < 60){
    echo "Половина ХП<br>";
}
else {
    echo "Выше 50%<br>";
}
switch ($d){
    case "Привет" : echo "Это строковая перменная<br>"; break;
    case 1 : echo "Это Верное значение записаное в D=1<br>"; break;
    case 2 : echo "Это Верное значение записаное в D=2<br>"; break;
    case 15 : echo "Это Верное значение записаное в D=15<br>";break;
    default : echo "Не одно значение не подошло<br>";
}


?>

</body>
</html>