<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $data = [];
        $listProducts = array();
        $listProducts[121] = array("name" => "Tv samsung", "price" => "1000");
        $listOfSizes = array("XS", "S", "M", "L", "XL");

        if(!array_key_exists($id, $listProducts)) return redirect('index');

        $data["title"] = $listProducts[$id]["name"];
        $data["product"] = $listProducts[$id];
        $data["sizes"] = $listOfSizes;
        return view('product.show')->with("data",$data);
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";

        return view('product.create')->with("data",$data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => ["required", "gt:0"]
        ]);
        dd($request->all());
        //here goes the code to call the model and save it to the database
    }
}

?>