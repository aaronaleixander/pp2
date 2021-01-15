<?php
// turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

 ## Aaron Utterback , Jessica Sestak
 ## January 15, 2021
 ##
?>

<?php
    echo "PHP Array Practice <br>";
    $numbers = array(7, 9, 8, 9 ,8, 8, 6);

    function printArray($numbers){
        foreach($numbers as $value){
            echo "$value <br>";
        }
    }

    printArray($numbers);
?>



