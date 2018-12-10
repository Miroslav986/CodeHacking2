@extends('layouts.admin')



@section('content')

<h1>Create Posts</h1>
<div class="row">
{!! Form::open(['method' => 'POST', 'action'=>'AdminPostsController@store','files'=>'true']) !!}
    
    <div class="form-group">

		{{  Form::label('title', 'Title:')  }}
		{{  Form::text('title',null,['class'=>'form-control'])  }}

	</div>
	<div class="form-group">

		{{  Form::label('category_id', 'Category:')  }}
		{{  Form::select('category_id',['' => 'Choose Options'] + $categories ,null,['class'=>'form-control'])  }}
	</div>
	<div class="form-group">

		{{  Form::label('photo_id', 'Photo:')  }}
		{{  Form::file('photo_id',null,['class'=>'form-control'])  }}

	</div>
	<div class="form-group">
  <!-- rows => 5 je jos jedan atribut koji smo dodali -->

		{{  Form::label('body', 'Description:')  }}
		{{  Form::textarea('body',null,['class'=>'form-control','rows'=>5])  }}

	</div>

		{{ Form::submit('Create posts',['class'=>'btn btn-primary']) }}

{!! Form::close() !!}
</div>

<div class="row">

	@include('includes.form-errors')

</div>	

@endsection