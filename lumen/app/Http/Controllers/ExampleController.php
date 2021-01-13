<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function getThings(Request $request, $category)
    {
        $criteria= $request->input("criteria");
        if (! isset($category)) {
            return response()->json(null, Response::HTTP_BAD_REQUEST);
        }

        // ...

        return response()->json(["thing1", "thing2"], Response::HTTP_OK);
    }
}