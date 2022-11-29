<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function all_product(){
        return view("product-list",['css' => '../css/stylesheet_ProductList.css', 'title' => 'Product List']);
    }

    public function id_produit($id)
    {

//        $prodname = DB::table('product')->where('IDPRODUCT' , $id)->value('NAME');
//        $prodprice = DB::table('product')->where('IDPRODUCT' , $id)->value('PRICEPRODUCT');
//        $proddesc = DB::table('product')->where('IDPRODUCT' , $id)->value('DESCRIPTION');
//        $prodimg = DB::table('product')->where('IDPRODUCT' , $id)->value('IMG');

        $product = Product::query()
            ->where(['id' => $id])
            ->firstOrFail();

//        dd($product);
        $title = "Mon produit " . $id;
        return view("product-details", [
            'product' => $product,
            'title'=> $title,
            'css' => '../css/product-details.css'
        ]);
    }
}
