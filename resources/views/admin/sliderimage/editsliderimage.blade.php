@extends('admin.master')
@section('content')
<div class="content">
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <strong>{{ $message }}</strong>
  </div>
  <br>
  @endif
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
           Sliderimage    </h1>
        <h3 class="box-title" style="display:inline-block;">Edit</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{route('update-slider',[$editslider[0]->id])}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

          

          

            <div class="form-group">
              <label>Image<span style="color:red;"> Description</span> </label>
              <textarea class="editor form-control" rows="3" id="slider_description" name="slider_description" >
                {{ $editslider[0]->slider_description}}
              </textarea>
              <span class="text-danger">{{ $errors->first('slider_description') }}</span>
            </div>
  
                <div class="row base-img-sec">
                <div class="col-xl-4 col-lg-6">
                    <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                        <label>slider_Image</label>
                    </div>
                    <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#slider_image').click()"
                        src="{{asset('storage/media/'. $editslider[0]->slider_image)}}" alt="">
                    <input type="file" onchange="getFile(this)" name="slider_image"  class="hidden"  id="slider_image">
                    <span class="text-danger">{{ $errors->first('slider_image') }}</span>
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
