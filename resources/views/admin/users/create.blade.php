@extends('layouts.admin')


@section('content')

	<h1>Create Users</h1>

	{!! Form::open(['method' => 'POST', 'action'=>'AdminUsersController@store','files'=>'true']) !!}
    
    <div class="form-group">

		{{  Form::label('name', 'Name:')  }}
		{{  Form::text('name','',['class'=>'form-control','placeholder'=>'Name..'])  }}

	</div>
	<div class="form-group">

		{{  Form::label('email', 'E-mail:')  }}
		{{  Form::email('email','',['class'=>'form-control','placeholder'=>'E-mail..'])  }}

	</div>
	<div class="form-group">

		{{  Form::label('password', 'Password:')  }}
		{{  Form::password('password',['class'=>'form-control','placeholder'=>'Enter Password..'])  }}

	</div>
	<div class="form-group">

  <!-- dodao sam + roles kao konkatenaciju, roles sam povukao iz baze sto se vidi u AdminUserController, create method. -->

		{{  Form::label('role_id', 'Role:')  }}
		{{  Form::select('role_id',[''=>'Choose Options'] + $roles,'',['class'=>'form-control'])  }}

	</div>
	<div class="form-group">

		{{  Form::label('file', 'File:')  }}
		{{  Form::file('file','',['class'=>'form-control','placeholder'=>'Choose files..'])  }}

	</div>
	<div class="form-group">

		{{  Form::label('is_active', 'Status:')  }}
		{{  Form::select('is_active',array(1 => 'Active',0 => 'Not Active'),0,['class'=>'form-control'])  }}

	</div>

		{{ Form::submit('Create User',['class'=>'btn btn-primary']) }}

	{!! Form::close() !!}

@include('includes.form-errors')

@endsection