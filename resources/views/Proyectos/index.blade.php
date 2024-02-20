<html>
	<body>
    	<h1>Hello,</h1>

    	@foreach ($proyectos as $proyecto)
        	<li>{{ $proyecto->nombre }}</li>
    	@endforeach

	</body>
</html>