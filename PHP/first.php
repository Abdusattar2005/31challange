<?php

$name = "Абдусаттар";
$hobby=[345,5,356,];
$array = [0,1, 2, 3, 4, 5,6,7, ];
foreach ($array as $item)

{
    print $name;
    printf($item."\n");
}
foreach ($hobby as $item) {
    print $hobby;
    printf($item."\a" );
}