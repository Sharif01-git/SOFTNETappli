<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       /* $duplicata = Cart::search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id == $request->product_id;
        });

        if (!empty($duplicata)) {
            return redirect()->route('Layout.base')->with('success', 'Le produit a été déjà ajouté.');
        }
        $product = Product::find($request->product_id);*/

        Cart::add($request->id, $request->nommat, 1,$request->prix)
        ->associate('App\Product');


        return redirect()->route('Layout.base')->with('success', 'Le produit a bien été ajouté.');
    }

    public function storeCoupon(Request $request){
        $code = $request->get('code');

        $coupon = Coupon::where('code', $code)->first();

        if (!$coupon) {
            return redirect()->back()->with('error', 'Le coupon est invalide.');
        }

        $request->session()->put('coupon', [
            'code'=>$coupon->code,
            'remise'=>$coupon->discount(Cart::subtotal())
        ]);
        return redirect()->back()->with('success', 'Le coupon est appliqué.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        $data = $request->json()->all();

        $validator = Validator::make($request->all(), [
            'qty' => 'required|numeric|between:1,6'
        ]);

        if ($validator->fails()) {
            Session::flash('danger','La quantité du produit ne doit pas dépasser 6');

            return response()->json(['error', 'Cart Quantity Has Not Been Updated']);
        }
        if($data['qty']> $data['stock']){
            Session::flash('danger','La quantité de ce produit n\'est pas disponible.');

            return response()->json(['error', 'Product Quantity Is Not Available']);
        }

        Cart::update($rowId, $data['qty']);

        Session::flash('successs','La quantité du produit est passéé à ' . $data['qty'] . '.');

        return response()->json(['success', 'Cart Quantity Has Been Updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);

        return back()->with('succes', 'Le produit à été supprimé.');

    }
}
