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
                    <h3 class="box-title">New Product</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="/admin/products">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" class="form-control" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea name="description"  class="form-control" rows="3" placeholder="Enter ..." ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Status_id</label>
                            <select class="form-control" name="status_id">
                                <option>{{\App\Product::STATUS_ACTIVE}}</option>
                                <option>{{\App\Product::STATUS_INACTIVE}}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" name="price" id="price" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount</label>
                            <input type="text" name="discount" class="form-control" id="discount">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">

                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
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