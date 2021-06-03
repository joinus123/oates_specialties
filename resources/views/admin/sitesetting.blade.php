@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
         <button type="button" class="close" data-dismiss="alert">×</button>
         <strong>{{ $message }}</strong>
      </div>
      <br>
      @endif
      <div>
        <h1 style="display:inline-block;">
           Sitesetting      </h1>
        <h3 class="box-title" style="display:inline-block;">Update</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{route('submit-sitesetting')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

            <div class="form-group">
              <label> Footer <span class="dls">Copyright Text</span> </label>
              <input type="name" class="form-control" id="copy_righttext" name="copy_righttext" value="{{ isset($sitesetting[0]->copy_righttext)?$sitesetting[0]->copy_righttext:NULL }}">
              
            </div>

              <div class="row base-img-sec">
                <div class="col-xl-4 col-lg-6">
                    <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                        <label>Header Logo</label>
                    </div>
                    <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#header_logo').click()"
                        src="{{asset('storage/media/'.$a=isset($sitesetting[0]->header_logo)?$sitesetting[0]->header_logo:Null)}}" alt="">
                    <input type="file" onchange="getFile(this)" name="header_logo"  class="hidden"  id="header_logo">
                    
                </div>
                </div>

                <div class="row base-img-sec">
                    <div class="col-xl-4 col-lg-6">
                        <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                            <label>Footer Logo</label>
                        </div>
                        <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#footer_logo').click()"
                            src="{{asset('storage/media/'.$a=isset($sitesetting[0]->footer_logo)?$sitesetting[0]->footer_logo:Null)}}" alt="">
                        <input type="file" onchange="getFile(this)" name="footer_logo"  class="hidden"  id="footer_logo">
                      
                    </div>
                    </div>

        </div>
        <div class="box-footer">
          <input type="hidden" name="id" value="<?php if(isset($sitesetting[0]->id)){ echo $sitesetting[0]->id;}?>">
          <button type="submit" class="btn btn-primary"><?php if(isset($sitesetting[0]->id)){echo "UPDATE";}else{echo "Submit";}?></button>
          <a href="{{ route('dashboard') }}" class="btn btn-danger">Dashboard</a>
          <a href="" class="btn btn-info">Cancel</a>
        </div>
      </form>
    </div>
  </div>
  </div>
@endsection
