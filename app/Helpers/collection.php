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

function filterMethodForCollection($collection,$columnValue){
    // The filter method filters the collection using the given callback, keeping only those items that pass a given truth test
    $filtered = $collection->filter(function ($value, $key) use ($columnValue) {
        return $value > $columnValue ;
    });
    return $filtered->all();
}

function getFirstElementFromCollection($collection){
    printNewLine("First element of collection" , $collection->first());

    printNewLine("Custom first action");
    $firstElement = $collection->first(function ($val, $key){
       return $val > 5;
    });

    printNewLine("First element of collection with closer" , $firstElement);

}

function getFirstElementFromAssociateArray($collection,$key, $val=''){
    printNewLine("First element of associated array",$collection->firstWhere($key, $val));
}

function groupByCollection($collection, $key){
    // The groupBy method groups the collection's items by a given key
    return $collection->groupBy('account_id');
}

function mapMethodForCollection($collection){
    // The each method iterates over the items in the collection and passes each item
    $collection->each(function ($item, $key) {
        $row =  "Key ". $key . " ID  " . $item['id'] . " Name ". $item['name'] ;
        printNewLine("",$row);
    });
}

function getMaximumFromCollection(){
    $max = collect([
        ['foo' => 10],
        ['foo' => 20]
    ])->max('foo');

    printNewLine("Maximum from associated array " , $max);
    $max = collect([1, 2, 3, 4, 5])->max();
    printNewLine("Maximum from array " , $max);
}

function getMinimumFromCollection(){
    $min = collect([['foo' => 10], ['foo' => 20]])->min('foo');
    printNewLine("Minimum from associated array " , $min);
    $min = collect([1, 2, 3, 4, 5])->min();
    printNewLine("Minimum from array " , $min);
}

function sortByCollection(){
    $collection = collect([
        ['name' => 'Desk', 'price' => 200],
        ['name' => 'Chair', 'price' => 100],
        ['name' => 'Bookcase', 'price' => 150],
    ]);

    $sorted = $collection->sortBy('price');

    $data = $sorted->values()->all();
    printNewLine("Sorted value " , $data);
}

function sumOfCollection(){
   $collectionSum = collect([1, 2, 3, 4, 5])->sum();
   printNewLine("Sum of collection " , $collectionSum);

    $collection = collect([
        ['name' => 'JavaScript: The Good Parts', 'pages' => 176],
        ['name' => 'JavaScript: The Definitive Guide', 'pages' => 1096],
    ]);

    $collectionSum = $collection->sum('pages');
    printNewLine("Sum of associated collection " , $collectionSum);
    echo "<br><br><br>";
}


function getUnique(){
    $collection = collect([
        ['name' => 'iPhone 6', 'brand' => 'Apple', 'type' => 'phone'],
        ['name' => 'iPhone 5', 'brand' => 'Apple', 'type' => 'phone'],
        ['name' => 'Apple Watch', 'brand' => 'Apple', 'type' => 'watch'],
        ['name' => 'Galaxy S6', 'brand' => 'Samsung', 'type' => 'phone'],
        ['name' => 'Galaxy Gear', 'brand' => 'Samsung', 'type' => 'watch'],
    ]);

    $unique = $collection->unique('brand');

    $unique = $unique->values()->all();

    printAll($unique);
}
