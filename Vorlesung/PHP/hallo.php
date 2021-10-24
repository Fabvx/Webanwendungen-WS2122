<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <title>Montag isttoll</title>
</head>
<body>

<?php echo "<a href=\"http://www.hdm-stuttgart.de\">HdM</a>";?>
<?php echo '<a href="http://www.hdm-stuttgart.de">HdM</a>';?>
<p>Ein Para Graf</p>
<?php
echo "heute Freitag!";
$tag="Freitag";
?>
<h2>Zweiter Abschnitt</h2>
<?php
echo 'morgen Samstag';
?>
<h2>Strings</h2>
<?php
$name="Riemke";
$stock="2";
echo "Büro: ".$name." im Stock: ".$stock;
echo "Büro: $name im Stock $stock";
echo $tag;

echo "<br>";
$a=3;
$b=3;
if($a>$b){
    echo "a größer b";
}else{
    if($a==$b){
        echo "sind gleich";
    }else {
        echo "b größer a";
    }
}

?>
<h2>For</h2>
<?php
for($i=1; $i<=20;$i++) {
    echo "Zahl ist $i <br>";
}
?>
<h2>Array</h2>
<?php
$a= array("Man", "Woman", "Camera");
echo $a[2];
var_dump($a);
print_r($a);
$b=[
    0 => "Riemke",
    1 => "Wilczek"
];

echo $b[1];

?>


</body>
</html>