@extends('admin.layout.main')
<!-- Main content -->
@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12 col-xs-6">
                <div class="box box-primary">
                    <div class="box-header with-border ">
                        <h3 class="box-title">Order Product List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th>Order Product</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Stock</th>
                            </tr>
                            @foreach($orderProducts as $orderProduct)
                                <tr>
                                    <td>{{$orderProduct->product->name}}</td>
                                    <td>{{$orderProduct->productSize->size}}</td>
                                    <td>{{$orderProduct->product_quantity}}</td>
                                    <td>{{$orderProduct->product_price}}</td>
                                    <td>{{$orderProduct->created_at}}</td>
                                    <td>{{$orderProduct->updated_at}}</td>
                                    <td>{{$orderProduct->productSize->amount}} </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{$orderProducts->links()}}
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection