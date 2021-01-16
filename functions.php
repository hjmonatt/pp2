<?php

function printArr($numbers){

    foreach($numbers as $number){
        echo $number . '<br>';
    }
}

function largest($numbers){

    echo max($numbers);
}

function removeDups($numbers){

    $results = array_unique($numbers);
    echo "[" . implode(", ", $results) . "]";
}

function distribution($numbers){
    asort($numbers);
    print_r(array_count_values($numbers));

}

