<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function categories()
    {
        $categories = json_decode(File::get(base_path('database/data/categories.json')), true);

        return response()->json($categories, 200);
    }

    public function reviews()
    {
        $categories = json_decode(File::get(base_path('database/data/reviews.json')), true);

        return response()->json($categories, 200);
    }
    
    public function result()
    {
        $categories = json_decode(File::get(base_path('database/data/result.json')), true);

        return response()->json($categories, 200);
    }
}
