@extends('layouts.cms')
@section('inbox-coun')
@php
 echo count($messages);
@endphp
@endsection
@section('title')
Inbox ({{ count($messages) }})
@endsection
@section('nav_dy')
@if(count($messages)>1)
{!! Form::open(['action' => 'ContactController@Search', 'method'=>'Post', 'enctype'=> 'multipart/form-data', 'class'=>'form-inline ']) !!}
<div class="form-group">
{{ Form::label('','') }}
{{ Form::text('search','',['class'=>'form-control ','placeholder'=>'Search Mesaages ...'])}}
</div>
{{ Form::submit('&#x1F50D;',['class'=>'invisible']) }}
{!! Form::close() !!}
@endif
@endsection
@section('counter')
<div class="btn btn-outline-dark btn-lg Dy-cms">
@if(count($messages)<1)<span class="alert text-danger"> ({{ count($messages) }})
@if(count($messages)==1)message @else messages @endif </span> @else <span class="alert text-success"> ({{ count($messages) }})
@if(count($messages)==1)message @else messages @endif </span>@endif</div>
</div>
@endsection
@section('content')
{{--  this set the time zone  --}}
{{-- {{ date_default_timezone_set('America/Bogota') }} --}}
{{--  <div class="col-lg-4 text-center ">
{!! Form::open(['action'=>['ContactController@clearAll',], 'method'=>'post', 'class'=>'']) !!}
{{ Form::submit('Delete all',['class'=>'btn btn-outline-dark btn-lg text-danger']) }}
{{ Form::hidden('_method','DELETE') }}
{!! Form::close() !!}
</div>  --}}
<div class="row">
<!--this for the message counter-->
<div class="col-lg-12  text-center">
@foreach($messages as $message)
<div class="col-lg-12 pb-3 col-xs-12">
<div class="card pt-2  bg-dark">
<a href="/contact/{{ $message->id }}" style="text-decoration:none">
<div class="card-header text-white text-center bg-dark h3 ">{!! $message->email !!}<br>{!! $message->subject !!}<br>{{ date('M j, Y h:ia', strtotime($message->created_at ))}}</div></a>
<div class="card-body  auth_user_color text-center text-white">
{{-- <div class="card-footer row">
<div class="col-lg-6">
</div>
<div class="col-lg-6 text-center ">
{!! Form::open(['action'=>['ContactController@destroy',$message->id], 'method'=>'post', 'class'=>'']) !!}
{{ Form::submit('Delete',['class'=>'btn btn-outline-dark btn-lg text-danger']) }}
{{ Form::hidden('_method','DELETE') }}
{!! Form::close() !!}
</div>
</div> --}}
</div>
</div>
</div>
@endforeach
</div>
<script>
</script>
@endsection
