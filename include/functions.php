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

function removeDups($array){
    $makeUnique = array_unique($array);
    $array = array_values($makeUnique);
    return $array;
}

function distribution($array){
    print_r(array_count_values($array));
}

