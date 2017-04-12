<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
<h1>Send Mail</h1>

	<form action="send" method="post">

		{{csrf_field()}}
		to: <input type="text" name="to">
		message: <textarea name="message" cols="30" rows="10"></textarea>
		<input type="submit" value="Send">
		</form>
</body>
</html>