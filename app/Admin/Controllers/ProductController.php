<?php
namespace  App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Product;


class ProductController extends Controller {

    public function index() {
        $products = Product::where('status_id', Product::STATUS_ACTIVE)->orderBy("created_at", 'desc')->paginate(10);
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin/product/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'status_id'  =>'required|integer',
            'price' =>'required|numeric',
            'discount'=>'required|integer',
        ]);

        Product::create(request(['name', 'description','status_id','price','discount']));


        return redirect('/admin/products');
    }

    // edit page
    public function edit(Product $product) {
        return view("admin/product/edit", compact('product'));

    }

    // edit logic
    public function update(Product $product) {
        //validate
        $this->validate(request(),[
            'name' => 'required|string',
            'description' => 'required|string',
            'status_id'  =>'required|integer',
            'price' =>'required|numeric',
            'discount'=>'required|integer',
        ]);


        //logic
        $product->name = request('name');
        $product->description = request('description');
        $product->status_id = request('status_id');
        $product->price = request('price');
        $product->discount = request('discount');
        $product->save();

        //render
        return redirect("admin/products/{$product->id}/edit");

    }

    public function destroy(\App\Product $product)
    {
        $product->update([
            'status_id' => Product::STATUS_INACTIVE
        ]);
        return redirect('/admin/products');
    }

}