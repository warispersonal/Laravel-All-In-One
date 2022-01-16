<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateController extends Controller
{
    public function check(Request $request){
        if ($request->route()->named('checkurl1')) {
            echo "Check 1 is active";
        }
        elseif ($request->route()->named('checkurl2')) {
            echo "Check 2 is active";
        }
        elseif ($request->route()->named('checkurl3')) {
            echo "Check 3 is active";
        }
        elseif ($request->route()->named('checkurl4')) {
            echo "Check 4 is active";
        }else{
            echo "Not matching";
        }
    }
}
