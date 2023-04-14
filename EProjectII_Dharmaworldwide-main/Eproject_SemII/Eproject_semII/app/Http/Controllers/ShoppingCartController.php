<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function add(Request $request) {
        $productId = $request->get('productId');
        $productQuantity = $request->get('productQuantity');
        $action = $request->get('cartAction');
        $product = Product::find($productId);
        if ($product == null) {

            return view('404');
        }
        $shoppingCart = null;
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        } else {
            $shoppingCart = [];
        }
        $cartItem = null;
        $message = 'Product added to cart successfully!';
        if (!array_key_exists($productId, $shoppingCart)) {
            $cartItem = new \stdClass();
            $cartItem->id = $product->id;
            $cartItem->name = $product->name;
            $cartItem->thumbnail = $product->thumbnail;
            $cartItem->price = $product->price;
            $cartItem->labelName = $product->labelName;
            $cartItem->quantity = intval($productQuantity);
        } else {
            $cartItem = $shoppingCart[$productId];
            if ($action != null && $action == 'update') {
                $cartItem->quantity = $productQuantity;
                $message = 'Product update successful!';
            } else {
                $cartItem->quantity += $productQuantity;
                $message = 'successfully added new products to the shopping cart!';
            }
        }
        $shoppingCart[$productId] = $cartItem;
        //Lưu shoppingcart vào lại trong session
        Session::put('shoppingCart', $shoppingCart);
        Session::flash('success-msg', 'Product added to cart successfully!');
        return redirect('/shopping/cart')->with('message', $message);
    }

    public function show() {
        $shoppingCart = Session::get('shoppingCart');
        return view('client.cardProduct', [
            'shoppingCart'=>$shoppingCart
        ]);
    }

    public function remove(Request $request) {
        $productId = $request->get('productId');
        $shoppingCart = null;
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
            unset($shoppingCart[$productId]);
            Session::put('shoppingCart', $shoppingCart);
            return redirect('/shopping/cart')->with('remove', 'Product removed from cart successfully!');
        }
    }
    public function save(Request $request) {
        if(!Session::has('shoppingCart') || count(Session::get('shoppingCart')) == 0) {
            Session::flash('error-msg','There are currently no products in the cart');
            return redirect('/shopping/list');
        }
        $shoppingCart = Session::get('shoppingCart');
        $order = new Order();
        $order->totalPrice = 0;
        $order->customerId = 1;
        $order->shipName = $request->get('fullName');
        $order->shipPhone = $request->get('phone');
        $order->shipAddress = $request->get('address');
        $order->email = $request->get('email');
        $order->note = $request->get('note');
        $order->isCheckout = false;
        $order->created_at = Carbon::now();
        $order->updated_at = Carbon::now();
        $order->status = 0;
        $orderDetails = [];
        $messageError = '';
        foreach ($shoppingCart as $cartItem) {
            $product = Product::find($cartItem->id);
            if ($product == null) {
                $messageError = ' Something went wrong with the product, id'. $cartItem->id. 'does not exist or has been deleted';
                break;
            }
            $orderDetail = new OrderDetail();
            $orderDetail->productId = $product->id;
            $orderDetail->unitPrice = $product->price;
            $orderDetail->quantity = $product->quantity * $orderDetail->unitPrice;
            array_push($orderDetails, $orderDetail);
        }
        if (count($orderDetails) == 0) {
            Session::flash('error-msg', $messageError);
            return redirect('/shopping/list');
        }
        try {
            DB::beginTransaction();
            $order->save();
            $orderDetailsArray = [];
            foreach ($orderDetails as $orderDetail) {
                $orderDetail->orderId = $order->id;
                array_push($orderDetail, $orderDetail->toArray());
            }
            OrderDetail::insert($orderDetailsArray);
            DB::commit();
            Session::forget('shopping_cart');
            Session::flash('success-msg','order saved successfully!');
        } catch (Exception $e) {
            DB::rollBack('error-msg', 'save order failed');
        }
        return redirect('/shopping/list');
    }


    public function create_payment(OrderRequest $request)
    {
        $shopping_cart = Session::get('shoppingCart');
        $request->validated();
        $order = new Order();
        $order->fill($request->all());
        $amount = 0;
        foreach ($shopping_cart as $item){
            $amount += $item->price * $item->quantity;
        }
        $order->total_price = $amount;
        $order->save();

        foreach ($shopping_cart as $item) {
            $product = Product::find($item->id);
            $order_detail = new OrderDetail();
            $order_detail->orderId = $order->id;
            $order_detail->productId = $product->id;
            $order_detail->unitPrice = $product->price;
            $order_detail->quantity = $item->quantity;
            $order_detail->save();
            $this->delete_cart($item->id);
        }
        return view('/client/success');
    }

    public function delete_cart($id){
        $shopping_cart = Session::get('shoppingCart');
        unset($shopping_cart[$id]);
        Session::put('shoppingCart', $shopping_cart);
    }
}
