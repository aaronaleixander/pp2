<?php

function printArray($array){
    foreach($array as $value){
        echo "$value <br>";
    }
}

function largest($array){
    $maxValue = $array[0];
    $len = count($array);

    for($i = 1; $i <= $len; $i++){
        if($array[$i] > $maxValue){
            $maxValue = $array[$i];
        }
    }
    return $maxValue;
}