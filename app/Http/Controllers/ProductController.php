<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $data = [];
        $product = Product::findOrFail($id);
        $listOfSizes = array("XS","S","M","L","XL");
        $data["title"] = $product->getName();
        $data["product"] = $product;
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

        return view('product.created');
    }
}

?>