<?php

$x = 0;
$y = 5;
$z = 10;

// TODO:
// If $x < $y < $z then echo "{$x} < {$y} < {$z}\n";
if($x < $y && $y <$z ){
    echo "problem 1: {$x} < {$y} < {$z}\n";
}

// TODO:
// If 0 is less than $x OR $x is less than 10
// then echo the result as a sentence "0 is less than {$x} OR {$x} is less than 10".
if(0<$x or $x < 10){
   echo "problem 2: 0 is less than {$x} OR {$x} is less than 10\n";
}

// TODO:
// repeat the if statement for $y and $z.
if(0<$y or $z < 10){
   echo "problem 3: 0 is less than {$x} OR {$x} is less than 10\n";
}

// TODO:
// If 0 is less than $x AND $x is less than 10
// then echo the result as a sentence "0 is less than {$x} AND {$x} is less than 10".
if(0<$x && $x < 10){
   echo  "Problem 4: 0 is less than {$x} and {$x} is less than 10\n";
}

// TODO:
// repeat the if statement for $y and $z.
if(0<$y && $z < 10){
    echo  "Problem 5: 0 is less than {$y} and {$z} is less than 10\n";
}
