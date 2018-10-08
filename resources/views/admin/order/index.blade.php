@extends('admin.layout.main')
<!-- Main content -->
@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12 col-xs-6">
                <div class="box box-primary">
                    <div class="box-header with-border ">
                        <h3 class="box-title">Orders List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th>Order</th>
                                <th>Price</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Manage</th>
                            </tr>
                            @foreach($orders as $order)
                                <tr>
                                    <td><a href="/admin/orders/{{$order->id}}/order-product">{{$order->id}}</a></td>
                                    <td>{{$order->price}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>{{$order->updated_at}}</td>
                                    <td>
                                        <a type="button" href="#" class="btn btn-sm btn-default " post-id="{{$order->id}}"  ><i class="fa fa-pencil"></i></a>
                                        <a type="button"  href="#" class="btn btn-sm btn-default " post-id="{{$order->id}}"  ><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{$orders->links()}}
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection