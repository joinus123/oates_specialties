@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
          Socialmedia Link Edit   </h1>
        <h3 class="box-title" style="display:inline-block;">Edit</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{route('update-socialmedialink',[$view->id])}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">
            <div class="form-group">
              <label> Social Media Link<span class="dls">Name</span> </label>
              <input type="name" class="form-control" id="socialmedia_name" value="{{$view->socialmedia_name}}" name="socialmedia_name" >
              <span class="text-danger">{{ $errors->first('socialmedia_name') }}</span>
            </div>

        
              <div class="row base-img-sec">
                <div class="col-xl-4 col-lg-6">
                    <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                        <label>Social Media Link  Icon</label>
                    </div>
                    <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#socialmedia_image').click()"
                        src="{{asset('storage/media/'.$view->socialmedia_image)}}" alt="">
                    <input type="file" onchange="getFile(this)" name="socialmedia_image"  class="hidden"  id="socialmedia_image">
                    <span class="text-danger">{{ $errors->first('socialmedia_image') }}</span>
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
