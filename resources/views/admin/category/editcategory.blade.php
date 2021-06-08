@extends('admin.master')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div>
        <h1 style="display:inline-block;">
           Category   </h1>
        <h3 class="box-title" style="display:inline-block;">Edit</h3>
      </div>
      <div class="col-md-6">
        <form role="form" action="{{route('update-category',[$view->id])}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="box-body">

            <div class="form-group">
              <label> Category <span class="dls">Name</span> </label>
              <input type="name" class="form-control" id="category_name" value="{{ $view->category_name}}"  name="category_name" >
              <span class="text-danger">{{ $errors->first('heading_one') }}</span>
            </div>

          
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('dashboard') }}" class="btn btn-danger">Dashboard</a>
          <a href="" class="btn btn-info">Cancel</a>
        </div>
      </form>
    </div>
  </div>
  </div>
@endsection
