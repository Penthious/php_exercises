<?php

// Converts array into list n1, n2, ..., and n3
function humanizedList($array, $yes = false) {
if ($yes == true) {
    $newArray = explode(', ', $array);
    sort($newArray);
    $savedString = array_pop($newArray);
    $newArray = implode(', ', $newArray);
    return $newArray .' and ' . $savedString . PHP_EOL;
}else{
    $newArray = explode(', ', $array);
    $savedString = array_pop($newArray);
    $newArray = implode(', ', $newArray);
    return $newArray .' and ' . $savedString . PHP_EOL;
}


}

// List of famous peeps
$physicistsString = 'Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark, Gordon Freeman';

// TODO: Convert the string into an array
$physicistsArray = [];

// Humanize that list
var_dump(humanizedList($physicistsString, "ao"));

// Output sentence

?>
