@extends('layouts.master')
@section('content')

<h1>Contact TODOParrot</h1>
<ul>
@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
@endforeach
</ul>
{!! Form::open(['route' => 'contact_store', 'class' => 'form'])  !!}

{!! Form::close() !!}

@endsection