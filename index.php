<html>
  <head>
	<meta charset="utf-8">
    <title>PHP Test</title>
  </head>
  <body background-color="lightred">
		<form onsubmit="go()">
		<p id="sign up" >Sign up<br></p>
		<input id="name1.1" name="name1" placeholder="NAME"><br>
		<input id="password1.1" name="password1" placeholder="PASSWORD"><br>
		<input type="submit">
		<input type="reset">
		</form>
<script>
function go(){
	x=document.getElementById("name1.1").value
	y=document.getElementById("password1.1").value
	document.open()
	document.close()
	document.write('<body background-color="lightred"><p id="sign in">Sign in<br></p><form action="signin.php" id="form2" method="post"><input id="name2" name="name2" placeholder="NAME"><br><input id="password2" name="password2" placeholder="PASSWORD"><input id="name1" name="name1" value="" hidden=true><br><input id="password1" name="password1" value="" hidden=true><br><input id="submit2" type="submit"><input id="reset2" type="reset"></form>')
	document.getElementById("name1").value=x
	document.getElementById("password1").value=y
}
</script>
</body>
</html>
