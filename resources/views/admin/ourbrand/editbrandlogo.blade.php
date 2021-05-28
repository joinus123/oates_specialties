@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
           BannerSlider     </h1>
        <h3 class="box-title" style="display:inline-block;">Edit</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{route('update-brandlogo',[$view->id])}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

            <div class="form-group">
              <label> Brand Logo <span class="dls"></span>Name </label>
              <input type="name" class="form-control" id="brand_name"  value="{{ $view->brand_name}}"  name="brand_name" >
              <span class="text-danger"></span>
            </div>

          
             
               <div class="row base-img-sec">
                <div class="col-xl-4 col-lg-6">
                    <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                        <label>Banner_slider_Image</label>
                    </div>
                    <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#brand_logo').click()"
                        src="{{asset('storage/media/'.$view->brand_logo)}}" alt="">
                    <input type="file" onchange="getFile(this)" name="brand_logo"  class="hidden"  id="brand_logo">
                    <span class="text-danger"></span>
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
