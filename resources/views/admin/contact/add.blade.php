@extends('admin.master')
@section('content')

<div class="content">
  <div class="container-fluid">
    <div>
      <h1 style="display:inline-block;">
        Contact Us     </h1>
      <h3 class="box-title" style="display:inline-block;">Add</h3>
    </div>
    <div class="col-md-6">
      <form role="form" action="{{route('submit-contact')}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="box-body">

          <div class="form-group">
            <label>Contactus Icon<span class="dls"> Link</span> </label>
            <input type="text" class="form-control" id="icon" name="icon" >
            <span class="text-danger">{{ $errors->first('icon') }}</span>
          </div>

         
          
        
            <div class="form-group">
              <label>Contactus  <span class="dls">Heading</span> </label>
              <input type="name" class="form-control" id="name" name="heading" >
              <span class="text-danger">{{ $errors->first('heading') }}</span>
            </div>

            <div class="form-group">
              <label>Contactus test <span class="dls">Text</span> </label>
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
