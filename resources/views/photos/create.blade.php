@extends('layouts.cms')
@section('title')
Photo upload
@endsection
@section('content')
<p class="h3 text-white">Upload an Image to this album</p>
{!! Form::open(['action' => 'PhotosController@store', 'method'=>'Post', 'enctype'=> 'multipart/form-data']) !!}
<div class="form-group">
 {{ Form::label('title','Photo title',['class'=>'text-white']) }}
 {{ Form::text('title','',['class'=>'form-control','placeholder'=>'Title']) }}
</div>
<div class="form-group">
 {{ Form::label('description','Photo description',['class'=>'text-white']) }}
 {{ Form::textarea('description','',[ 'id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Photo description']) }}
</div>
<div class="form-group">
{{ Form::file('photo') }}
</div>
<div class="form-group">
{{Form::hidden('album_id', $album_id)}}
</div>
{{ Form::submit('Create',['class'=>'btn btn-outline-primary btn-lg']) }}
{!! Form::close() !!}
@endsection


