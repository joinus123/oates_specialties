@extends('admin.master')


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">
                  <div>
                    <h1 style="display:inline-block;">
                     Socialmedialink
                     </h1>
                     @if ($message = Session::get('success'))
                     <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                     </div>
                      <br>
                     @endif
                    <h3 class="box-title" style="display:inline-block;">List</h3>
                  </div>
                  <a class="btn btn-info" href="{{route('add-socialmedialink')}}">Add New</a>
                  <hr style="border-top: 1px solid #504444;">
                  <div class="col-md-12">
                    <div class="box-body">

                     <table id="table_id" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <td>S.no</td>
                          <td>Social Medialink Name</td>
                          <td>Social Medialink</td>
                          <td>Social Medialink Image</td>
                          <td>Actions</td>
                        </tr>
                      </thead>
                      <tbody>



                  @foreach($Socialmedialink as $value)
                    
                
                        <tr>
                          <td>{{$value->id}}</td>
                          <td>{{$value->socialmedia_name}}</td>
                          <td>{{$value->socialmedia_image}}</td>
                          <td><img style="width: 100px;" src="{{asset('storage/media/'.$value->socialmedia_image)}}"></td>
                          <td>
                            <a href="{{route('edit-socialmedialink',[$value->id])}}"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
                            <a href="{{route('delete-socialmedialink',[$value->id])}}"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                          </td>

                        </tr>
                       @endforeach

                                </tbody>
                    </table>

                  </div>
                  <div class="box-footer">
                    <a href="{{ route('dashboard') }}" class="btn btn-danger">Dashboard</a>
                  </div>
                </div>
              </div>
              </div>
        </div>
	</div>
@endsection
