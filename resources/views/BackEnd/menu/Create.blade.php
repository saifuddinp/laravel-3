@extends('BackEnd.main')
@section('maincontent')
	<div class="main-div">
    <div class="panel">
   <h2>Create Menus</h2>

   @if(Session::has('message-success'))
   <p class="alert text-success">{{Session::get('message-success')}}</p>
   @elseif(Session::has('message-success'))
    <p class="alert text-danger">{{Session::get('message-danger')}}</p>

    @endif
    @if ($errors->any())
     @foreach ($errors->all() as $error)
         <p class="alert text-denger">{{ $error}}</p>
     @endforeach
 @endif

   </div>
    <form id="Login" action="{{Url('menu/store')}}" method="post">

    	@csrf
        <div class="form-group">
          <p>Title<input type="text" id="inputEmail" placeholder="Title" name="Title"></p>

        </div> 
        <div class="form-group">
          <p>Url<input type="text" id="inputEmail" placeholder="Url" name="Url"></p>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    </div>
@endsection