<?php

function fizzbuz($limit) {
    $i = 0;
    while( $i <= $limit) {
        $yield = null;
        if($i % 3 == 0 ) { $yield = 'Fizz';}
        if($i % 5 == 0 ) { $yield .= 'Buzz';}
        yield $yield;
        $i++;
    }
    return;
}

foreach(fizzbuz(25) as $key => $value) {
    echo $key ." => ".$value."\n"; 
}