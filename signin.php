<p id="p"></p>
<?php
$l=$_POST["name1"];
$p=$_POST["password1"];
if ($_POST["name2"]==$l && $_POST["password2"]==$p)
	echo "Login Sucessfull";
else
	echo '<body background-color="lightred">Permission denied<br><form action="signin2.php" method="post">
<input onsubmit="go()" type="submit" value="Try again">
<input name="name" hidden=true id="name" value="'.$l.'">
<input name="password" hidden=true id="password" value="'.$p.'"></form>';
?>
