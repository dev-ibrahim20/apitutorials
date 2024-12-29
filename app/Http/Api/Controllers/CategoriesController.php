<?php

namespace App\Http\Api\Controllers;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Lang;

class CategoriesController extends Controller
{
    //

    public function index()
    {
        if (Lang::locale() == 'en') {
            $cat = category::select('id', 'name_en')->get();
        } else {
            $cat = category::select('id', 'name_ar')->get();
        }
        return response()->json($cat);
    }

}
