<?php
for ($k=1; $k < 100; $k++) {
    if ($k % 2 == 1) {
        continue;
    }
    echo $k . PHP_EOL;
}
echo "-----------\n";
for ($i=1; $i < 100; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . PHP_EOL;
}
echo "-----------\n";
for ($j=1; $j < 100 ; $j++) {
    if($j > 10){
        break;
    }
    echo $j . PHP_EOL;
}
 ?>
