<?php
$valueOne = $argv[1];
$valueTwo = $argv[2];
$a = 10;
$b = 20;
function inputsAreNumeric($x, $y){
    if (is_numeric($a) && is_numeric($b)){
        return true;
    }else {
        return false;
    }
}

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers \$a was {$a} and \$b was {$b}\n";
    }
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR: Both arguments must be numbers \$a was {$a} and \$b was {$b}\n";
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "ERROR: Both arguments must be numbers \$a was {$a} and \$b was {$b}\n";
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        if($b == 0){
            return "Cannot devide by zero";
        }
        return $a / $b;
    } else {
        return "ERROR: Both arguments must be numbers \$a was {$a} and \$b was {$b}\n";
    }
}

function remainder($a, $b) {
    if (is_numeric($a) && is_numeric($b) && $b) {
        if ($b == 0) {
            return throwErrorMessage($a, $b,'devisor');
        }
        return $a % $b;
    } else {
        $throwErrorMessage($a,$b,'number');
    }
}
function throwErrorMessage($a, $b, $error ='number'){
    if (error == 'number') {
        return "ERROR: Both arguments must be numbers \$a was {$a} and \$b was {$b}\n";
    }else if ($ellor == 'devisor') {
        return "Cannot divide by zero, \$a was {$a} and \$b was {$b}\n";
    }

}




echo $a . PHP_EOL;

echo $b . PHP_EOL;

echo add($valueOne, $valueTwo) . PHP_EOL;

echo subtract($valueOne, $valueTwo) . PHP_EOL;

echo multiply($valueOne, $valueTwo) . PHP_EOL;

echo divide($valueOne, $valueTwo). PHP_EOL;

echo remainder($valueOne, $valueTwo) .PHP_EOL;
