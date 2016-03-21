<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Tim '];


function myArray($array, $array2){
    $longestArray = [];
    $shortestArray = [];
    $newArray = [];
    if (count($array) > count($array2)) {
        $longestArray = $array;
        $shortestArray = $array2;
    }else {
        $longestArray = $array2;
        $shortestArray = $array;
    }
    foreach ($longestArray as $key => $value) {
        if (array_key_exists($key, $shortestArray) && array_key_exists($key,$longestArray ) == $shortestArray[$key]) {
            $newArray[] = $value;
        }else {
            $newArray[] = $longestArray[$key];
            $newArray[] = $shortestArray[$key];
        }

    }
    return $newArray;
}

print_r (myArray($names, $compare));
