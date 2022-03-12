<?php

namespace App\Http\Controllers;

class CollectionController extends Controller
{
    public function index()
    {
        $collection = collect([1, 2, 3]);
        printNewLine("Get average of array", getAverage($collection));

        $collectionArray =  collect([[ 'name' => "User 1", 'marks' => 10], [ 'name' => "User 2", 'marks' => 10], [ 'name' => "User 3", 'marks' => 20], [ 'name' => "User 4", 'marks' => 40]]);
        printNewLine("Get average of associate array ", getAverageAssociateArray($collectionArray,'marks'));

        $collection = collect(['name' => 'Desk', 'price' => 100]);
        printNewLine("Collection has value" , (int)checkIfValueExistInArray($collection, "Desk"));
        printNewLine("Collection has value" , (int)checkIfValueExistInArray($collection, "price") );

        $collection = collect([
            ['product' => 'Desk', 'price' => 200],
            ['product' => 'Chair', 'price' => 100],
        ]);

        printNewLine("Collection has value" , (int)checkIfSpecificKeyHasValue($collection, "product","Chair") );
        printNewLine("Collection has value" , (int)checkIfSpecificKeyHasValue($collection, "product","100") );

        $students = collect([
            ['id' => 1, 'name' => 'abigail' ,'email' => 'abigail@example.com', 'position' => 'Developer'],
            ['id' => 2, 'name' => 'james' ,'email' => 'james@example.com', 'position' => 'Designer'],
            ['id' => 3, 'name' => 'victoria' ,'email' => 'victoria@example.com', 'position' => 'Developer'],
        ]);

        printNewLine("Collection Each Method",null);
        eachMethodForCollection($students);


        $collectionItems = collect([8, 5, 3, 4]);
        printNewLine("Check all value passes the condition ", (int)everyMethodForCollection($collectionItems, 2)); // all value must be greater than 2 then return true otherwise false
        printNewLine("Check all value passes the condition ", (int)everyMethodForCollection($collectionItems, 8)); // all value must be greater than 8 then return true otherwise false


        printNewLine("Get all value greater than that value ", '');
//        printAll( filterMethodForCollection($collectionItems, 2));

        getFirstElementFromCollection($collectionItems);

        $collection = collect([
            ['name' => 'Regena', 'age' => null],
            ['name' => 'Linda', 'age' => 14],
            ['name' => 'Diego', 'age' => 23],
            ['name' => 'Linda', 'age' => 84],
        ]);
        getFirstElementFromAssociateArray($collection,'name','Linda');

        $groupByCollection = collect([
            ['account_id' => 'account-x10', 'product' => 'Chair'],
            ['account_id' => 'account-x10', 'product' => 'Bookcase'],
            ['account_id' => 'account-x11', 'product' => 'Desk'],
        ]);

        $collectionGroupBy = groupByCollection($groupByCollection,'account_id');
        foreach ($collectionGroupBy as $key => $collectionItem){
            printNewLine("Key " . ' ' . $key);
        }


        printNewLine("Collection Map Method",null);
        mapMethodForCollection($students);

        getMaximumFromCollection();

        getMinimumFromCollection();

        sortByCollection();

        sumOfCollection();

        getUnique();
    }
}
