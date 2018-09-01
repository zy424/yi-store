@extends('admin.layout.main')
<!-- Main content -->
@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li><a href="/admin/products/{{$product->id}}" >Summary</a></li>
                        <li class="active"><a href="/admin/products/{{$product->id}}/image">Images</a></li>
                    </ul>
                    <div class="box box-default">
                    <div class="box-header with-border ">
                        <h3 class="box-title">Product Images</h3>
                        <div class="box-tools pull-right">
                            <a href="/admin/images/create" class="btn btn-primary btn-sm"  role="button"><i class="fa fa-plus"></i> New Image</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">Order</th>
                                <th>Insert Image</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Manage</th>
                            </tr>
                            @foreach($images as $image)
                                <tr>
                                    <td>{{$image->id}}</td>
                                    <td>

                                        <input type="file" name="product_image" id="product_image">

                                        <img src="{{asset('/storage/'.$image->image_path)}}">
                                    </td>

                                    <td>{{$image->created_at}}</td>
                                    <td>{{$image->updated_at}}</td>
                                    <td>
                                        <a type="button" href="/admin/images" class="btn btn-sm btn-default "  ><i class="fa fa-pencil"></i></a>
                                        <a type="button"  href="/admin/images" class="btn btn-sm btn-default"  ><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{$images->links()}}
                        </table>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </section>
@endsection