<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach($things as $thing){
    if(is_string($thing)){
        echo 'This is a  ' . gettype($thing) . " ". $thing . PHP_EOL;
    }
}
foreach ($things as $thing) {
    if (is_scalar($thing)) {
        echo "This is a scalar {$thing}\n";
    }
}
foreach($things as $thing){
    if (is_bool($thing)){
        echo "This is a bool {$thing}\n";
    }
}
foreach($things as $thing){
    if(is_float($thing)){
        echo "This is a float {$thing}\n";
    }
}
foreach($things as $thing){
    if (is_array($thing)){
        foreach ($thing as $value) {
            echo "This is one thing inside of things {$value}\n";
        }
    }
}
foreach($things as $thing){
    if (is_null($thing)){
        echo "This is a Null {$thing}";
    }
}
foreach($things as $thing){
    if(is_integer($thing)){
        echo "This is a interger {$thing}";
    }
}

foreach($things as $thing){
    if (is_integer($thing)){
        echo "This is a interger {$thing}\n";
    }else if(is_float($thing)){
        echo "This is a float {$thing}\n";
    }else if (is_bool($thing)){
        echo "This is a boolian {$thing}\n";
    }else if(is_array($thing)){
        foreach ($thing as $value) {
                echo "This is a array{$value}\n";
        }

    }else if(is_string($thing)){
        echo "This is a string {$thing}\n";
    }else{
        echo "This is a string {$thing}\n";
    }
}
