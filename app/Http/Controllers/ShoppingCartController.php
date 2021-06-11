<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderDetail;
use App\OrderStatus;
use App\ShippingStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function add(Request $request)
    {
        $product = Product::find($request->productId);
        // dd($product);
        // 新增產品至購物車
        if ($product) {
            \Cart::add(array(
                'id' => $product->id, // inique row ID 
                'name' => $product->name, //product's name
                'price' => $product->price, //price
                'quantity' => 1, //quantity 商品數量
                'attributes' => array(
                    'img' => $product->img
                ) //自定義參數
            ));

            return 'success';
        } else {
            return 'fail';
        }
    }

    public function update(Request $request)
    {

        if ($request->productId) {
            \Cart::update($request->productId, array(
                'quantity' => $request->qty,
            ));

            $product = \Cart::get($request->productId);
            return $product->quantity;
        } else {
            return 'fail';
        }
    }


    public function delete(Request $request)
    {
        if ($request->productId) {
            \Cart::remove($request->productId);
            return 'success';
        } else {
            return 'fail';
        }
    }


    public function content()
    {
        // 看目前購物車內容
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
    }

    public function list()
    {
        //看購物車現有內容
        $cartCollection = \Cart::getContent();
        return view('front.shoppingcart.bootstrap_digipack_shopping_1', compact('cartCollection'));
    }

    public function payment()
    {
        //購物車無東西的時候
        // $cartCollection=\Cart::getContent();
        if (\Cart::isEmpty()) {
            return redirect('/')->with('message', '購物車為空，請先加入商品');
        } else {
            //購物車有內容的時候
            return view('front.shoppingcart.bootstrap_digipack_shopping_2');
        }
    }

    public function paymentCheck(Request $request)
    {

        Session::put('payment', $request->payment);
        Session::put('shipment', $request->shipment);

        return view('front.shoppingcart.bootstrap_digipack_shopping_3');
    }

    public function informationCheck(Request $request)
    {

        $user = Auth::user();


        $shipping_status = ShippingStatus::orderBy('sort', 'asc')->first();
        $order_status = OrderStatus::orderBy('sort', 'asc')->first();
        $order = Order::create([
            'user_id' => $user->id,
            'order_no' => 'DP' . time() . rand(1, 9999),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'county' => $request->county,
            'district' => $request->district,
            'zipcode' => $request->zipcode,
            'address' => $request->address,
            'price' => 999999,
            'pay_type' => Session::get('payment'),
            'shipping' => Session::get('shipment'),
            'shipping_fee' => 9999,
            'shipping_status_id' => $shipping_status->id,
            'order_status_id' => $order_status->id,
            'remark' => '',

        ]);

        $subPrice = 0;
        $cartData = \Cart::getContent();

        foreach ($cartData as $data) {
            $productId = $data->id;
            $product = Product::find($productId);
            $subPrice += $data->quantity * $product->price;
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'qty' => $data->id,
                'old' => $product->tojson()
            ]);
        }
        $fee = $subPrice > 1000 ? 0 : 60;
        $order->update([
            'price' => $subPrice + $fee,
            'shipping_fee' => $fee,
        ]);
        dd($order->all());
    }
}
