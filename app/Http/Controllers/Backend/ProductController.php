<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\Facades\Image;
use Carbon\Carbon; 

class ProductController extends Controller
{
   public function AllProduct(){

    $product = Product::latest()->get();
    return view('backend.product.all_product',compact('product'));

   } // End Method 





}
