<?php

namespace App\Http\Controllers;

use \App\Order;
use \App\OrderProduct;
use \App\ProductSize;
use \App\Product;

class OrderController extends Controller
{
   public function checkout()
   {
      $orderProducts = request('orderProduct');
      if (!empty($orderProducts)) {
          $order = Order::create([]);
          $totalPrice = 0;
          $updatedAmount = 0;


          foreach ($orderProducts as $t) {
              $productSize = ProductSize::where('size', $t['product_size'])
                  ->where('product_id', $t['product_id'])
                  ->first();
              $productAmount = $productSize->amount;
              $product = Product::where('id', $t['product_id'])
                  ->first();

              $orderProduct = OrderProduct::create([
                  'product_id' => $t['product_id'],
                  'product_quantity' => $t['product_quantity'],
                  'order_id' => $order->id,
                  'product_size_id' => $productSize->id,
                  'product_price' => ($product->price)*($t['product_quantity'])

              ]);
              $totalPrice += $orderProduct->product_price;

              //update the storage amount
              $updatedAmount = $productAmount - $orderProduct->product_quantity;
              $productSize->amount = $updatedAmount;
              $productSize->save();
          }
          //calculate the total products price for the order
          $order->price = round($totalPrice);
          $order->save();
      }
      return [
          'success' => true
      ];
   }

   public function complete()
   {
       return view('order-complete.index');
   }
}
