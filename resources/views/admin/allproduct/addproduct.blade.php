@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
           All Product     </h1>
        <h3 class="box-title" style="display:inline-block;">Add</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{route('submit-product')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

            <div class="form-group">
              <label> product<span class="dls">Name</span> </label>
              <input type="text" class="form-control" id="name" name="name" >
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
                <label> Product <span class="dls">Orignal Price</span> </label>
                <input type="name" class="form-control" id="orignal_price" name="orignal_price" >
                <span class="text-danger">{{ $errors->first('orignal_price') }}</span>
              </div>

              <div class="form-group">
                <label> Product <span class="dls">Discount price</span> </label>
                <input type="name" class="form-control" id="discounted_price" name="discounted_price" >
                <span class="text-danger">{{ $errors->first('discounted_price') }}</span>
              </div>
  



              <div class="row base-img-sec">
                <div class="col-xl-4 col-lg-6">
                    <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                        <label>Banner_slider_Image</label>
                    </div>
                    <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#image').click()"
                        src="{{asset('admin/assets/img/Add-Property_06.jpg')}}" alt="">
                    <input type="file" onchange="getFile(this)" name="image"  class="hidden"  id="image">
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                </div>
                </div>
              
                <div class="form-group">
                  <label> Product <span class="dls">Is New Store?</span> </label>
                  <span class="text-danger">{{ $errors->first('new_product') }}</span>
                  <select class="form-control" name="new_product">
                
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                  </select>
                 </div>





              <div class="form-group">
                <label> Product <span class="dls">Is Best Seller?</span> </label>
                <span class="text-danger">{{ $errors->first('seller_product') }}</span>
                <select class="form-control" name="seller_product">
                 
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
                </div>
                
                <div class="form-group">
                  <label> Product <span class="dls">Is Featured?</span> </label>
              
                  <select class="form-control" name="featured_product">
               
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                  </select>
                
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
