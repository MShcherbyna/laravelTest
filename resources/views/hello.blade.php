@extends('layouts.main')

@section('content')
   <h1>All Posts</h1>
   @foreach($posts as $val)
      <div>
         <h2>{{$val->title}}</h2>
         <p>{!!$val->desc!!}</p>
      </div>
   @endforeach
@endsection
