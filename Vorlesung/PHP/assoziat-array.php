<?php

$a=array(
 "name"=> "Meier",
    "vorname"=>"Tanja",
    "alter"=>24
);
echo "Hallo ".$a["vorname"]." Du bist ".$a["alter"];

foreach($a as $element){
    echo $element;
}

for($i=0; $i<count($a);$i++){
    echo "--".$a[$i];
}