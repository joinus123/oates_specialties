
@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
           Video     </h1>
        <h3 class="box-title" style="display:inline-block;">Add</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{route('submit-video')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

            <div class="form-group">
              <label>VIDEO <span class="dls">TITLE</span> </label>
              <input type="name" class="form-control" id="video_title" name="video_title" >
              <span class="text-danger">{{ $errors->first('video_title') }}</span>
            </div>

            <div class="form-group">
              <label>VIDEO <span class="dls">URL</span> </label>
              <input type="name" class="form-control" id="video_link" name="video_link" >
              <span class="text-danger">{{ $errors->first('video_link') }}</span>
            </div>

          
               <div class="row base-img-sec">
                <div class="col-xl-4 col-lg-6">
                    <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                        <label>VIDEO ICON</label>
                    </div>
                    <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#video_icon').click()"
                        src="{{asset('admin/assets/img/Add-Property_06.jpg')}}" alt="">
                    <input type="file" onchange="getFile(this)" name="video_icon"  class="hidden"  id="video_icon">
                    <span class="text-danger">{{ $errors->first('video_icon') }}</span>
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
