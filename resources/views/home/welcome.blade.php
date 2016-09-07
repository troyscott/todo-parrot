@extends('layouts.master')
@section('content')
<h1>Welcome to TODOParrot</h1>
<ul>
	@forelse ($lists as $list)
    	<li>{{ $list }} </li>
    @empty
    	<li>No Data</li>
    @endforelse
</ul>
@endsection


