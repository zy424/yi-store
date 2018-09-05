@extends('admin.layout.main')
<!-- Main content -->
@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12 col-xs-6">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li><a href="/admin/products/{{$product->id}}/edit" >Summary</a></li>
                        <li class="active"><a href="/admin/products/{{$product->id}}/image">Images</a></li>
                    </ul>
                    <div class="box box-default">
                    <div class="box-header with-border ">
                        <h4 class="box-title">Product Images</h4>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> New Image</button>

                            <!-- Modal -->

                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Upload image</h4>
                                        </div>

                                        <form enctype="multipart/form-data" id="modal_form_id"  method="POST">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <input type="file" name="product_image" id="product_image">
                                                <input type="hidden" id="product_id" value="{{$product->id}}">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default add-image-button">Add Image</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
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
                                        <img height="200" src="{{asset('/storage/'.$image->image_path)}}">
                                    </td>

                                    <td>{{$image->created_at}}</td>
                                    <td>{{$image->updated_at}}</td>
                                    <td>
                                        {{--<a type="button"  delete-url="/admin/products/{{$product->id}}/{{$image->id}}/image-delete" class="btn btn-default resource-delete"  href="#" ><i class="fa fa-trash"></i></a>--}}
                                        <a type="button"  href="/admin/products/{{$product->id}}/{{$image->id}}/image-delete" class="btn btn-default"><i class="fa fa-trash"></i></a>
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