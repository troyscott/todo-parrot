@extends('layouts.master')
@section('content')
<h1>Lists</h1>

<ul>
@forelse ($lists as $list)
<li> {{ $list->name }} </li>
@empty
No data!!!<br>
@endforelse
</ul>
@endsection
