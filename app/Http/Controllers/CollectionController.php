<?php

namespace App\Http\Controllers;

class CollectionController extends Controller
{
    public function index()
    {
        // 1 Create collection
        $collection = collect([1, 2, 3]);

        // 2 Collection all
//        printAll($collection->all());

        // 3 Avg of array
        $collection = collect([
            ['id' =>  1, 'name' => "User 1", 'marks' => 10],
            ['id' =>  2, 'name' => "User 2", 'marks' => 10],
            ['id' =>  3, 'name' => "User 3", 'marks' => 20],
            ['id' =>  4, 'name' => "User 4", 'marks' => 40]
        ]);
//        printAll($collection->avg());
//        printAll($collection->avg('marks'));

        // 4 chunk method convert array into smaller pieces of array
//        $collection = collect([1, 2, 3, 4, 5, 6, 7]);
//        $chunks = $collection->chunk(2);
//        printAll($chunks->all());

        // 5 The collapse method collapses a collection of arrays into a single, flat collection
//        $collection = collect([
//            [1, 2, 3],
//            [4, 5, 6],
//            [7, 8, 9],
//        ]);
//
//        $collapsed = $collection->collapse();
//        printAll($collapsed->all());

        // 6  The combine method combines the values of the collection, as keys, with the values of another array or collection
//        $collection = collect(['name', 'age']);
//        $combined = $collection->combine(['George', 29]);
//        printAll($combined->all());

        // 7 The contains method determines whether the collection contains a given item. You may pass a closure to the contains method to determine if an element exists in the collection matching a given truth test

//        $collection = collect([1, 2, 3, 4, 5, 6]);
//        $result = $collection->contains(function ($value, $key) {
//            return $value > 5;
//        });
//        printAll($result ? "True" : "False");

        // if any column contains value return true otherwise false
//        $collection = collect(['name' => 'Desk', 'price' => 100]);
//        echo  (int)$collection->contains('100')."<br>";
//        echo  (int)$collection->contains('New York')."<br>";

//        $collection = collect([
//            ['product' => 'Desk', 'price' => 200],
//            ['product' => 'Chair', 'price' => 100],
//        ]);
//        echo (int)$collection->contains('product', 'Bookcase');

        // 8 count get total no of element
        $collection = collect([1, 2, 3, 4]);
//        printAll($collection->count());

        // 9 count by count occurance of element in collection
//        $collection = collect([1, 2, 2, 2, 3]);
//
//        $counted = $collection->countBy();
//
//        printAll($counted->all());

        // get only value not exists in  array

//        $collection = collect([1, 2, 3, 4, 5]);
//        $diff = $collection->diff([2, 4, 6, 8]);
//        printAll($diff->all());

        // 10 The diffKeys method compares the collection against another collection or a plain PHP array based on its keys. This method will return the key / value pairs in the original collection that are not present in the given collection
//        $collection = collect([
//            'one' => 10,
//            'two' => 20,
//            'three' => 30,
//            'four' => 40,
//            'five' => 50,
//        ]);
//
//        $diff = $collection->diffKeys([
//            'two' => 2,
//            'four' => 4,
//            'six' => 6,
//            'eight' => 8,
//        ]);
//
//        printAll($diff->all());


        // 11 get duplicate Values
//        $collection = collect(['a', 'b', 'a', 'c', 'b']);
//        printAll($collection->duplicates());


        // 12 every
    }
}
