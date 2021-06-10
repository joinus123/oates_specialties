@extends('admin.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div>
                <h1 style="display:inline-block;">
                    All Product </h1>
                <h3 class="box-title" style="display:inline-block;">Add</h3>
            </div>
            <div class="col-md-6">
                <form role="form" action="{{ route('submit-product') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                    
                        <div class="form-group">
                            <label> Select Product<span class="dls"> ID</span> </label>
                            <select class="form-control" name="category">
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{$product->id}}</option>
                                @endforeach
                            </select>
                        </div>

                         <div class="row base-img-sec">
                            <div class="col-xl-4 col-lg-6">
                                <div class="d-flex justify-content-between base-{{ asset('admin/assets') }}/images-sec">
                                    <label>Product_Detail_Image</label>
                                </div>
                                <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded"
                                    onclick="document.querySelector('#image').click()"
                                    src="{{ asset('admin/assets/img/Add-Property_06.jpg') }}" alt="">
                                <input type="file" onchange="getFile(this)" name="product_image" class="hidden" id="product_image">
                                <span class="text-danger">{{ $errors->first('product_image') }}</span>
                            </div>
                        </div>

                      
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('dashboard') }}" class="btn btn-danger">Dashboard</a>
                        <a href="" class="btn btn-info">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
