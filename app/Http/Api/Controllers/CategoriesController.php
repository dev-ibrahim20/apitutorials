<?php

namespace App\Http\Api\Controllers;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //

    public function index(Request $request)
    {
        $cat = category::get();
        return response()->json($cat);
    }

}
