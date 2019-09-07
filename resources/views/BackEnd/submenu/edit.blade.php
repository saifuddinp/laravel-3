@extends('BackEnd.main')
@section('maincontent')
	<div class="main-div">
    <div class="panel">
   <h2>Edit Sub Menus</h2>

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
    <form id="form-horizontal" action="{{Url('sub-menu/'.$sub_menu->id)}}" method="POST">

    	@csrf
              {{ method_field('PATCH')}}
                  <div class="form-group">
                      <!-- The second value will be selected initially -->
                    <p>menu
                <select name="menu" class="form-group">
                   <option value="}">select</option> 
                  @foreach($menus as $menu)
                  <option value="{{$menu->id}}" {{$sub_menu->menu_id == $menu->id? 'selected':''}}>{{$menu->Title}}</option> 
                  @endforeach
                  </p>
                </select>
                </div>

           <div class="form-group">
          <p>Title<input type="text" id="inputEmail" placeholder="Title" name="Title" value="{{$sub_menu->Title}}"></p>

        </div> 
        <div class="form-group">
          <p>Url<input type="text" id="inputEmail" placeholder="Url" name="Url" value="{{$sub_menu->Url}}"></p>

        </div>
        <button type="submit" class="btn btn-primary">Update</button>

    </form>
    </div>
@endsection