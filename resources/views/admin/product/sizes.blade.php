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
                        <li><a href="/admin/products/{{$product->id}}/image">Images</a></li>
                        <li class="active"><a href="/admin/products/{{$product->id}}/size">Sizes</a></li>
                    </ul>
                    <div class="box box-default">
                    <div class="box-header with-border ">
                        <h4 class="box-title">Product Sizes</h4>
                        <div class="box-tools pull-right">
                            <a href="/admin/products/{{$product->id}}/size-create" class="btn btn-primary btn-sm"  role="button"><i class="fa fa-plus"></i>Add Size</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">Size
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th>Size</th>
                                <th>Amount</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Manage</th>
                            </tr>
                            @foreach($sizes as $size)
                                <tr>
                                    <td>{{$size->size}}</td>
                                    <td>{{$size->amount}}</td>
                                    <td>{{$size->created_at}}</td>
                                    <td>{{$size->updated_at}}</td>
                                    <td>
                                        <a type="button"  href="/admin/products/{{$size->id}}/size-edit" class="btn btn-sm btn-default"  ><i class="fa fa-pencil"></i></a>
                                        <a type="button"  href="/admin/products/{{$product->id}}/{{$size->id}}/size-delete" class="btn btn-sm btn-default"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{$sizes->links()}}
                        </table>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </section>
@endsection