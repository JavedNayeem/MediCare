<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller {


    public function index() {

        $products = DB::table('product')
            ->paginate(20);


        return view('medicare.product.index', [
            'products' => $products,
        ]);
    }
}
