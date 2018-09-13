@extends('admin.layout.main')
<!-- Main content -->
@section('content')
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-10 col-md-offset-1">
                <!-- general form elements -->

                <div class="nav-tabs-custom">

                    <div class="box box-default">
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="/admin/products/{{$productSize->id}}/size-update" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Size</label>
                                    <select class="form-control" name="size">
                                        <option value="XS" @if($productSize->size == 'XS') selected @endif>{{\App\ProductSIze::SIZE_XS}}</option>
                                        <option value="S" @if($productSize->size == 'S') selected @endif>{{\App\ProductSIze::SIZE_S}}</option>
                                        <option value="M" @if($productSize->size == 'M') selected @endif>{{\App\ProductSIze::SIZE_M}}</option>
                                        <option value="L" @if($productSize->size == 'L') selected @endif>{{\App\ProductSIze::SIZE_L}}</option>
                                        <option value="XL" @if($productSize->size == 'XL') selected @endif>{{\App\ProductSIze::SIZE_XL}}</option>
                                        <option value="XXL" @if($productSize->size == 'XXL') selected @endif>{{\App\ProductSIze::SIZE_XXL}}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input name="amount" class="form-control" id="amount" placeholder="Enter size amount" value="{{$productSize->amount}}">
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