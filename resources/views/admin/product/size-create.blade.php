@extends('admin.layout.main')
<!-- Main content -->
@section('content')
    <section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-10 col-md-offset-1">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Product Size</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="/admin/products/{{$product->id}}/size-store">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label>Sizes</label>
                            <select class="form-control" name="size">
                                <option>{{\App\ProductSize::SIZE_XS}}</option>
                                <option>{{\App\ProductSize::SIZE_S}}</option>
                                <option>{{\App\ProductSize::SIZE_M}}</option>
                                <option>{{\App\ProductSize::SIZE_L}}</option>
                                <option>{{\App\ProductSize::SIZE_XL}}</option>
                                <option>{{\App\ProductSize::SIZE_XXL}}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" name="amount" class="form-control" id="amount">
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->



        </div>

    </div>
    <!-- /.row -->
</section>
@endsection('content')