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

