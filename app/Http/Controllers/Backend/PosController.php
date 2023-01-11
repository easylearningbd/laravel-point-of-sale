<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;



class PosController extends Controller
{
    public function Pos(){
        $product = Product::latest()->get();
        return view('backend.pos.pos_page',compact('product'));

    } // End Method 





}
 