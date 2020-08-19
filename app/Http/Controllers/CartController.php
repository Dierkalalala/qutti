<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipping;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function cart() {
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('main');
        };
        $order = Order::find($orderId);
        $orderProducts = $order->products;
        return view('pages.cart', compact('order'));
    }

    public function addToCart($product_id) {
        $orderId = session('orderId');
        
        if(is_null($orderId)){
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        if($order->products->contains($product_id)){
            $orderRow = $order->products()->where('product_id', $product_id)->first()->pivot;
            $orderRow->count++;
            $orderRow->update();
        } else {
            $order->products()->attach($product_id);
        }
        return 'added_good';
    }

    public function removeFromCart($product_id)
    {
        $orderId = session('orderId');
        if(is_null($orderId)){
            return false;
        }
        $order = Order::find($orderId);
        $order->products()->detach($product_id);
        return true;
    }

    public function decreaseFromCart($product_id)
    {
        $orderId = session('orderId');
        if(is_null($orderId)){
            return false;
        }
        $order = Order::find($orderId);
        $orderRow = $order->products()->where('product_id', $product_id)->first()->pivot;
        $orderRow->count--;
        $orderRow->save();
        return 'decreased';
    }

    public function checkOut() {
        $orderId = session('orderId');
        if(is_null($orderId)){
            return view('pages.main');
        }
        $order = Order::find($orderId);
        return view('pages.checkout', compact('order'));
    }
    
    public function confirmPayment(Request $request) {
        $orderId = session('orderId');
        $order = Order::find($orderId);
        $order->update($request->all());
        /* Mail::send('system.mail', compact('order'), function ($message) {
            $message->to('dierkholm@gmail.com', 'darova')->subject('test email');
            $message->from('diyorbest@gmail.com', 'Prodaja');
        }); */
        Mail::to('dierkholm@gmail.com')->send(new OrderShipping($order));
        session()->forget('orderId');
        return redirect()->route('main');
    }

}
