<?php
// turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

include("include/functions.php");

## Aaron Utterback , Jessica Sestak
## January 15, 2021
##
?>

<?php
echo "PHP Array Practice <br>";
$numbers = array(7, 9, 8, 9 ,8, 8, 6);

// print the values in the numbers array
printArray($numbers);
echo "<br>";

// print the largest value in the numbers array
echo "Largest Value in Array: <br>";
echo largest($numbers);
echo "<br>";

// remove duplicates
echo "Remove Duplicates: <br>";
printArray(removeDups($numbers));
echo "<br>";

// How many times does each element show up in the array.
echo "Distribution: <br>";
distribution($numbers);

?>



