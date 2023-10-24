<?php
$file = "text.txt";


$line = file($file);

foreach($line as $value){
    $data = explode(",",$value);
    if(trim($data[0])== "user"){
        echo $data[0];
    }
}
