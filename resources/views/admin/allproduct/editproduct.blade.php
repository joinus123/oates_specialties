
@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
           All Product     </h1>
        <h3 class="box-title" style="display:inline-block;">Edit</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{route('update-product',[$view->id])}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

            <div class="form-group">
              <label> product<span class="dls">Name</span> </label>
              <input type="text" class="form-control" id="name" value="{{ $view->name}}" name="name" >
              <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
           
            
            <div class="form-group">
                <label> Select Category<span class="dls">Name</span> </label>
                <select class="form-control" name="category">
                  @foreach($category as $cat)
                  <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                  @endforeach
                </select>
                </div>

                <div class="form-group">
                  <label> Product<span class="dls"> Description</span> </label>
                  <input type="text" class="form-control" id="product_description" name="product_description" value="{{ $view->product_description}}" >
                  <span class="text-danger">{{ $errors->first('product_description') }}</span>
                </div>

           

              <div class="form-group">
                <label> Product <span class="dls">Discount price</span> </label>
                <input type="name" class="form-control" id="discounted_price"   value="{{ $view->discounted_price}}"  name="discounted_price" >
                <span class="text-danger">{{ $errors->first('discounted_price') }}</span>
              </div>

              <div class="form-group">
                <label> Product <span class="dls"> price</span> </label>
                <input type="name" class="form-control" id="price"  value="{{ $view->price}}"  name="price" >
                <span class="text-danger">{{ $errors->first('price') }}</span>
              </div>
  



            <div class="row base-img-sec">
                <div class="col-xl-4 col-lg-6">
                    <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                        <label>Banner_slider_Image</label>
                    </div>
                    <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#image').click()"
                        src="{{asset('storage/media/'.$view->image)}}" alt="">
                    <input type="file" onchange="getFile(this)" name="image"  class="hidden"  id="image">
                    <span class="text-danger">{{ $errors->first('bannerslider_image') }}</span>
                </div>
                </div>
              {{-- @dd($view->new_store_product); --}}
                <div class="form-group">
                  <label> Product <span class="dls">Is New Store?</span> </label>
                  <select class="form-control" name="new_product">
                    <option value="0" <?php echo $view->new_store_product==0?"selected":""?> >No</option>
                    <option value="1" <?php echo $view->new_store_product==1?"selected":""?>>Yes</option>
                  </select>
                 </div>





              <div class="form-group">
                <label> Product <span class="dls">Is Best Seller?</span> </label>
                <select class="form-control" name="seller_product">
                  <option value="0"<?php echo $view->best_seller==0?"selected":""?>>No</option>
                  <option value="1"<?php echo $view->best_seller==1?"selected":""?>>Yes</option>
                </select>
                </div>
                
                <div class="form-group">
                  <label> Product <span class="dls">Is Featured?</span> </label>
                  <select class="form-control" name="featured_product">
                    <option value="0"<?php echo $view->featured_product==0?"selected":""?>>No</option>
                    <option value="1"<?php echo $view->featured_product==1?"selected":""?>>Yes</option>
                  </select>
                  </div>
      
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('dashboard') }}" class="btn btn-danger">Dashboard</a>
          <a href="" class="btn btn-info">Cancel</a>
        </div>
      </form>
    </div>
  </div>
  </div>
@endsection
