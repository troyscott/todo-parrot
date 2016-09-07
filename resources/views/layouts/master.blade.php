<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to TODOParrot</title>
{!! HTML::style('css/app.css') !!}
<script src="/js/app.js" ></script>

</head>
<body>
<div class="container">
	<div class="col-md-9">
    	@yield('content')
    </div>
	<div class="col-md-3">
    	@section('advertisement')
        <p>
        Jamz and Sun Lotion Special $29
        </p>
        @show
    </div>    

</div>
<script>
	console.log('Using vuejs!');
	
</script>
</body>
</html>