@extends('admin.layout.main')
<!-- Main content -->
@section('content')
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-10 col-md-offset-1">
                <!-- general form elements -->

                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="/admin/products/{{$product->id}}/edit" >Summary</a></li>
                        <li ><a href="/admin/products/{{$product->id}}/image">Images</a></li>
                        <li ><a href="/admin/products/{{$product->id}}/size">Sizes</a></li>
                    </ul>
                    <div class="box box-default">
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="/admin/products/{{$product->id}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input name="name" class="form-control" id="name" placeholder="Enter name" value="{{$product->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <textarea name="description"  class="form-control" rows="3" placeholder="Enter ..." >{{$product->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status_id">
                                        <option value="10" @if($product->status_id == 10) selected @endif>{{\App\Product::STATUSES[\App\Product::STATUS_ACTIVE]}}</option>
                                        <option value="20" @if($product->status_id == 20) selected @endif>{{\App\Product::STATUSES[\App\Product::STATUS_INACTIVE]}}</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" name="price" id="price" class="form-control" value="{{$product->price}}">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="discount">Discount</label>
                                    <input type="text" name="discount" class="form-control" id="discount" value="{{$product->discount}}">
                                </div>


                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
    </section>
@endsection('content')