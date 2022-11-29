<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends BackofficeController
{

    public function productList () {
        $products = Product::query()
            ->orderBy("id")
            ->paginate(25);

        return view("back/dashboardProduct", ["products" => $products]);
    }

    public function create(Request $request) {
        if ($request->isMethod('post')) {
            $product = new Product($request->post());
            $product->save();

            $products = Product::query()
                ->orderBy("id")
                ->paginate(25);

            return redirect(route('backoffice.product.productList'));
        }
        return view("back/dashboardProductCreate");
    }


    public function read () {
        $products = Product::query()
            ->orderBy("id")
            ->paginate(25);
        return view("back/dashboardProductRead", ["products" => $products]);
    }

    public function update (Request $request, $id) {
        $product = Product::query()
            ->where([
                'id' => $id
                ])
            ->first();

        if ($request->isMethod('post')) {
            $product->fill($request->post());
            $product->save();

            $products = Product::query()
                ->orderBy("id")
                ->paginate(25);

            return redirect(route('backoffice.product.productList'));

        }
        return view("back/dashboardProductUpdate", ['product'=>$product]);
    }

    public function updatesave (Request $request, $id ) {

            $product = Product::query()
                ->where([
                    'id' => $id
                ])
                ->first();
            $product->fill($request->post());
            $product->save();
            return redirect(route('backoffice.product.productList'));


    }

    public function delete ($id) {
        Product::query()
            ->where([
                'id' => $id
            ])
            ->delete();

        return redirect("backoffice/product");
    }
}
