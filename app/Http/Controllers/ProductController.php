<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller {




    public function index(Request $request) {

        $products = "";

        if ($request->Input('search')) {
            $key = ($request->Input('search') != null ? $request->Input('search') : '');
            $searchKey = '%' . $key . '%';

            $products = DB::table('product')
                ->where('Brand_name', 'LIKE', $searchKey)
                ->orwhere('Drug_class', 'LIKE', $searchKey)
                ->paginate(10);

        }

        else {
            $products = DB::table('product')
                ->paginate(20);
        }


        return view('medicare.product.index', [
            'products' => $products,
        ]);
    }
}
