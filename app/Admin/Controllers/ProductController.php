<?php
namespace  App\Admin\Controllers;

use \App\ProductSize;
use \App\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Product;
use Illuminate\Support\Facades\Storage;


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
            'discount'=>'integer',
        ]);

        Product::create(request(['name', 'description','status_id','price','discount']));


        return redirect('/admin/products');
    }

    // edit page
    public function edit(Product $product) {
        return view("admin/product/edit", compact('product'));
    }

    // edit logic
    public function update(Request $request, Product $product) {
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

    public function destroy(Product $product)
    {
        $product->update([
            'status_id' => Product::STATUS_INACTIVE
        ]);
        return redirect('/admin/products');
    }


    //product images list
    public function images(Product $product) {
        $images = ProductImage::where('product_id', $product->id)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.product.images', compact(['images','product']));
    }


    /**
     * @param Request $request
     * @param Product $product
     * @return array
     */
    //product images store(through modal)
    public function imagesStore(Request $request, Product $product) {
        $path = $request->file('product_image')->storePublicly(md5(time()));
        ProductImage::create(['product_id'=>$product->id, 'image_path'=>$path]);
        return [
            'error'=> '0',
            'message'=> ''
        ];
    }

    public function imageDelete(Product $product, ProductImage $image)
    {
        Storage::deleteDirectory(explode('/', $image->image_path)[0]);
        $image->delete();

        return redirect("/admin/products/" . $product->id . "/image");

    }

    //product sizes list
    public function sizes(Product $product) {
        $sizes = ProductSize::where('product_id', $product->id)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.product.sizes', compact(['sizes','product']));
    }

    //add size
    public function sizeCreate(Product $product)
    {
        return view('admin/product/size-create', ['product'=>$product]);
    }

    //store size
    public function sizeStore(Request $request,Product $product)
    {

        $request->validate([
            'size' => 'required|string',
            'amount'  =>'required|integer',
        ]);

        ProductSize::create(array_merge(request(['size', 'amount']), ['product_id' => $product->id]));


        return redirect('/admin/products/'.$product->id.'/size');
    }

    //change size
    public function sizeEdit(ProductSize $productSize) {
        return view("admin/product/sizes-edit", compact('productSize'));
    }

    public function sizeUpdate(Request $request, ProductSize $size) {
        //validate
        $this->validate(request(),[
            'size' => 'required|string',
            'amount'  =>'required|integer',
        ]);

        //logic
        $size->size = request('size');
        $size->amount = request('amount');
        $size->save();


        //render
        return redirect("admin/products/{$size->id}/size-edit");

    }



}