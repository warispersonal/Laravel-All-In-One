<?php

function printAll($data){
    echo "<pre>";
    print_r($data);
    die();
}

function printNewLine($message, $data){
    echo $message . ": " .  $data  . "<br>";
}
