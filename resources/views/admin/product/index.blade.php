@extends('admin.layout.main')
<!-- Main content -->
@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box box-primary">
                    <div class="box-header with-border ">
                        <h3 class="box-title">Products List</h3>
                        <div class="box-tools pull-right">
                            <a href="/admin/products/create" class="btn btn-primary btn-sm"  role="button"><i class="fa fa-plus"></i> New Product</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status_id</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Manage</th>
                            </tr>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->status_id}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->discount}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td>{{$product->updated_at}}</td>
                                    <td>
                                        <a type="button" href="/admin/products/{{$product->id}}/edit" class="btn btn-sm btn-default " post-id="{{$product->id}}"  ><i class="fa fa-pencil"></i></a>
                                        <a type="button"  href="/admin/products/{{$product->id}}/destroy" class="btn btn-sm btn-default " post-id="{{$product->id}}"  ><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{$products->links()}}
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection