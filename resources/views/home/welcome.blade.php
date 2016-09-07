<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to TODOParrot</title>
</head>
<body>
<h1>Welcome to TODOParrot</h1>
<ul>
	@forelse ($lists as $list)
    	<li>{{ $list }} </li>
    @empty
    	<li>No Data</li>
    @endforelse
</ul>

</body>
</html>