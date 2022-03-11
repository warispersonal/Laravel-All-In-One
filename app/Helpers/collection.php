<?php

function getAverage($collection){
    return $collection->avg();
}

function getAverageAssociateArray($collection, $column){
    return $collection->avg($column);
}

function checkIfValueExistInArray($collection, $value){
    // This function check array any item has value then return true otherwise false
    return $collection->contains($value);
}

function checkIfSpecificKeyHasValue($collection, $key, $value){
    // this function check if collection against specific key has value exists or not
    return $collection->contains($key,$value);
}

function eachMethodForCollection($collection){
    // The each method iterates over the items in the collection and passes each item
    $collection->each(function ($item, $key) {
        $row =  "Key ". $key . " ID  " . $item['id'] . " Name ". $item['name'] ;
        printNewLine("",$row);
    });
}


function everyMethodForCollection($collection, $columnValue){
    // The every method may be used to verify that all elements of a collection have valid value if all are ok return true otherwise return false
    return $collection->every(function ($value, $key) use($columnValue) {
        return $value > $columnValue;
    });
}

