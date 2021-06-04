@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
          Contact Us  </h1>
        <h3 class="box-title" style="display:inline-block;">Add</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{route('submit-contact')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

           

            <div class="row base-img-sec">
              <div class="col-xl-4 col-lg-6">
                  <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                      <label>Icon Image</label>
                  </div>
                  <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#icon').click()"
                      src="{{asset('admin/assets/img/Add-Property_06.jpg')}}" alt="">
                  <input type="file" onchange="getFile(this)" name="icon"  class="hidden"  id="icon">
                  <span class="text-danger">{{ $errors->first('icon') }}</span>
              </div>
              </div>
              <div class="form-group">
                <label>Social Icon <span class="dls">Heading</span> </label>
                <input type="name" class="form-control" id="name" name="heading" >
                <span class="text-danger">{{ $errors->first('heading') }}</span>
              </div>
  
              <div class="form-group">
                <label>Social Icom <span class="dls">Text</span> </label>
                <input type="name" class="form-control" id="name" name="text" >
                <span class="text-danger">{{ $errors->first('text') }}</span>
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
