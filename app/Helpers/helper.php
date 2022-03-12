<?php

function printAll($data){
    echo "<pre>";
    print_r($data);
    die();
}

function printNewLine($message, $data=''){
    echo  "<br>" . $message . ""  . "<br>";
    print_r($data);
}
