<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Dean', 'Mel', 'Amy', 'Michael','Tina'];

function arraySearch($a, $b){
    $value = array_search($a, $b);
    if ($value !== false){
        return true . PHP_EOL;
    }
    else{
        return false  .PHP_EOL;
    }
}

function searchTwoArrays($person, $array1, $array2){
    $firstArrayIndex = array_search($person, $array1);
    $secondArrayIndex = array_search($person, $array2);
    if (is_int($firstArrayIndex) && is_int($secondArrayIndex)){
        return "Both arrays have {$person} and {$person} is at index {$firstArrayIndex} on 1st array and on the 2nd array the index is {$secondArrayIndex} \n";
    }else{
        return "No matches found";
    }
}

function sameElementsTest($array1, $array2){
    $count = 0;
    foreach ($array2 as $value) {
        if(array_search($value, $array1) !== false){
            $count++;
        }
    }
    return $count;
}



echo arraySearch('Tina', $names);
echo searchTwoArrays('Tina', $names, $compare);
echo sameElementsTest($names, $compare);
