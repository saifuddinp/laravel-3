@extends('BackEnd.main')
@section('maincontent')
	<div class="main-div">
    <div class="panel">
   <h2>manages manus</h2>

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
                                    <th>Title</th>
                                    <th>Url</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                	@php $i= 0;
                                	@endphp
                                	@foreach($manus as $manu)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$manu->Title}}</td>
                                    <td>{{$manu->Url}}</td>
                                    <td><a href="{{url('menu/edit/'.$manu->id)}}" class="btn btn-info btn-xs">edit</a>
                                    <a href="{{url('menu/delete/'.$manu->id)}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this itram')">delete</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
    
    </div>


@endsection