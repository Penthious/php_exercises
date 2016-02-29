<?php

for($i = 1;$i <= 100; $i++){
    if($i % 3 ==0 && $i % 5 ==0){
        echo "FizzBuzz\n";
    }
    else if($i % 3 == 0){
        echo "fizz\n";
    }else if($i % 5 == 0){
        echo "buzz\n";
    }else{
        echo $i.PHP_EOL;
    }
}