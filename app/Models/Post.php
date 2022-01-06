<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


// we are using Searchable in model if we add/edit/delete any record it can auto add/edit/delete index and sync with algolia
// for existing data we can use command to push data to algolia and setup for indexing below command is mentioned
// php artisan scout:import "App\Models\Post"

class Post extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable= ['title','body', 'user_id'];

    //    if you want to override default index name for model & default index is table name which is linked with that model for Post model is table name is posts and index name is posts
    //    public function searchableAs(){
    //        return"posts_index";
    //    }

    // if you want to override and you want to specify only search works on specific columns instead of all table columns then you should use toSearchableArray and pass array of element on which you want to search perform
//    public function toSearchableArray()
//    {
//        return [
//            'title',
//            'body'
//        ];
//    }


}
