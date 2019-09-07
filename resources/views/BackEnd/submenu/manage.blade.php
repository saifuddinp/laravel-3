@extends('BackEnd.main')
@section('maincontent')
	<div class="main-div">
    <div class="panel">
   <h2>manages Sub manus</h2>

   @if(Session::has('message-success'))
   <p class="alert text-success">{{Session::get('message-success')}}</p>
   @elseif(Session::has('message-success'))
    <p class="alert text-denger">{{Session::get('message-danger')}}</p>

    @endif
    @if ($errors->any())
     @foreach ($errors->all() as $error)
         <p class="alert text-denger">{{ $error}}</p>
     @endforeach
 @endif

   </div>
    
    	@csrf
       
       <div class="panel-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>manu</th>
                                    <th>Title</th>
                                    <th>Url</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                	@php $i= 0;
                                	@endphp
                                	@foreach($sub_menus as $sub_menu)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$sub_menu->menu->Title}}</td>
                                    <td>{{$sub_menu->Title}}</td>
                                    <td>{{$sub_menu->Url}}</td>
                                    <td><a href="{{url('Sub-menu/'.$sub_menu->id.'/edit')}}" class="btn btn-info btn-xs">edit</a>
                                    <a href="{{url('menu/delete/'.$sub_menu->id)}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this itram')">delete</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
    
    </div>


@endsection