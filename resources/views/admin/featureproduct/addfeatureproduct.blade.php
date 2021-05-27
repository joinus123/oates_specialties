@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
           Banner Slider     </h1>
        <h3 class="box-title" style="display:inline-block;">Add</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{route('submit-slider')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

            <div class="form-group">
              <label> Banner_slider <span class="dls">heading_one</span> </label>
              <input type="name" class="form-control" id="heading_one" name="heading_one" >
              <span class="text-danger">{{ $errors->first('heading_one') }}</span>
            </div>

            <div class="form-group">
                <label> Banner_slider <span class="dls">heading_two</span> </label>
                <input type="name" class="form-control" id="heading_two" name="heading_two" >
                <span class="text-danger">{{ $errors->first('heading_two') }}</span>
              </div>

              <div class="form-group">
                <label> Banner_slider <span class="dls">heading_three</span> </label>
                <input type="name" class="form-control" id="heading_three" name="heading_three" >
                <span class="text-danger">{{ $errors->first('heading_three') }}</span>
              </div>
  



            <div class="row base-img-sec">
                <div class="col-xl-4 col-lg-6">
                    <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                        <label>Banner_slider_Image</label>
                    </div>
                    <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#bannerslider_image').click()"
                        src="{{asset('admin/assets/img/Add-Property_06.jpg')}}" alt="">
                    <input type="file" onchange="getFile(this)" name="bannerslider_image"  class="hidden"  id="bannerslider_image">
                    <span class="text-danger">{{ $errors->first('bannerslider_image') }}</span>
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
