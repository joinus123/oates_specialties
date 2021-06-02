@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
           Brand Logo     </h1>
        <h3 class="box-title" style="display:inline-block;">Add</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

            <div class="form-group">
              <label> Footer <span class="dls">Copyright Text</span> </label>
              <input type="name" class="form-control" id="copy_rightext" name="copy_rightext" >
              <span class="text-danger"></span>
            </div>

              <div class="row base-img-sec">
                <div class="col-xl-4 col-lg-6">
                    <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                        <label>Header Logo</label>
                    </div>
                    <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#brand_logo').click()"
                        src="{{asset('admin/assets/img/Add-Property_06.jpg')}}" alt="">
                    <input type="file" onchange="getFile(this)" name="brand_logo"  class="hidden"  id="brand_logo">
                    <span class="text-danger">{{ $errors->first('logo_icon') }}</span>
                </div>
                </div>

                <div class="row base-img-sec">
                    <div class="col-xl-4 col-lg-6">
                        <div class="d-flex justify-content-between base-{{asset('admin/assets')}}/images-sec">
                            <label>Footer Logo</label>
                        </div>
                        <img id="base_image" style="width:50%" class="cursor-pointer base_img img-rounded" onclick="document.querySelector('#brand_logo').click()"
                            src="{{asset('admin/assets/img/Add-Property_06.jpg')}}" alt="">
                        <input type="file" onchange="getFile(this)" name="brand_logo"  class="hidden"  id="brand_logo">
                        <span class="text-danger">{{ $errors->first('logo_icon') }}</span>
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
