@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
           About Us  Team   </h1>
        <h3 class="box-title" style="display:inline-block;">Add</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{route('update-contact',[])}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

           

              <div class="form-group">
                <label>Socail <span class="dls">Icon</span> </label>
                <input type="name" class="form-control" id="name" name="name" >
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>

              <div class="form-group">
                <label>Social Icon <span class="dls">Heading</span> </label>
                <input type="name" class="form-control" id="name" name="name" >
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>
  
              <div class="form-group">
                <label>Social Icom <span class="dls">Text</span> </label>
                <input type="name" class="form-control" id="name" name="name" >
                <span class="text-danger">{{ $errors->first('name') }}</span>
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
