<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        if (request()->categorie) {
           $products = Product::with('categories')->whereHas('categories', function ($query){
               $query->where('slug', request()->categorie);
           })->orderBy('created_at', 'DESC')->paginate(6);
        }else {
            $products = Product::with('categories')->paginate('10');
        }


          return view('Layout.base')->with('products',$products);
    }

    public function show($slug){
        $product = Product::where('slug', $slug)->first();
        $stock = $product->stock === 0 ? 'Indisponible' : 'Disponible';

        return view('include.show', [
            'product' => $product,
            'stock' => $stock

        ]);
    }

    public function store(){

        if (request()->categorie) {
            $products = Product::with('categories')->whereHas('categories', function ($query){
                $query->where('slug', request()->categorie);
            })->orderBy('created_at', 'DESC')->paginate(6);
         }else {
             $products = Product::with('categories')->paginate('6');
         }

        return view('include.store')->with('products', $products);
    }

    public function search(){
        request()->validate([
            'q'=> 'required|min:3'
        ]);

        $q = request()->input('q');

        $products = Product::where('nommat', 'like', "%$q%")
                    ->orWhere('caractmat', 'like', "%$q%")
                    ->paginate(12);

        return view('include.search')->with('products', $products);
    }
}
