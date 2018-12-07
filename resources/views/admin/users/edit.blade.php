@extends('layouts.admin')


@section('content')
<div class="row">
	<h1>Edit User</h1>
	<div class="col-sm-3">	
		
		<img class="img-responsive img-rounded" src="{{asset($user->photo ? $user->photo->file : 'http://placehold.it/400x400')}}">


	</div>

	<div class="col-sm-9">

		{!! Form::model($user,['method' =>'PATCH', 'action'=>['AdminUsersController@update', $user->id],'files'=>'true']) !!}
	    
	    <div class="form-group">

			{{  Form::label('name', 'Name:')  }}
			{{  Form::text('name',null,['class'=>'form-control'])  }}

		</div>
		<div class="form-group">

			{{  Form::label('email', 'E-mail:')  }}
			{{  Form::email('email',null,['class'=>'form-control','placeholder'=>'E-mail..'])  }}

		</div>
		<div class="form-group">

			{{  Form::label('password', 'Password:')  }}
			{{  Form::password('password',['class'=>'form-control'])  }}

		</div>
		<div class="form-group">

	  <!-- dodao sam + roles kao konkatenaciju, roles sam povukao iz baze sto se vidi u AdminUserController, create method. -->

			{{  Form::label('role_id', 'Role:')  }}
			{{  Form::select('role_id', $roles,null,['class'=>'form-control'])  }}

		</div>
		<div class="form-group">

			{{  Form::label('photo_id', 'Photo:')  }}
			{{  Form::file('photo_id','',['class'=>'form-control','placeholder'=>'Choose files..'])  }}

		</div>
		<div class="form-group">

			{{  Form::label('is_active', 'Status:')  }}
			{{  Form::select('is_active',array(1 => 'Active',0 => 'Not Active'),null,['class'=>'form-control'])  }}

		</div>

			{{ Form::submit('Edit User',['class'=>'btn btn-primary']) }}

		{!! Form::close() !!}

	</div>
</div>
	<div class="row" style="margin-top: 20px">
		<div class="col-sm-12">
			@include('includes.form-errors')
		</div>
	</div>
@endsection