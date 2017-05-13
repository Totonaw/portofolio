<!DOCTYPE>
<html>
	<meta></meta>
	<head>
	
	</head>
	<body>
		Ini Login
		<form action="{{ action('Cms\LoginController@auth') }}" method="post">
			Username: <input type="text" class="" name="username" />
			Password: <input type="password" class="" name="password" />
			<input type="submit" name="submit" />
			<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
		</form>
	</body>
</html>