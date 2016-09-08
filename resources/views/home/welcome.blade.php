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

@section('advertisement')
	@parent
    <p>
    	Buy TODOParrot Productivity guide $10!
    </p>
	<a href="/about/contact" class="btn btn-primary">Contact Us</a>
@endsection


