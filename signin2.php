<?php
$x=$_POST["name"];
$y=$_POST["password"];
echo '<p id="sign in">Sign in<br></p><form action="signin.php" id="form2" method="post"><input id="name2" name="name2" placeholder="NAME" oninput="go()"><br><input id="password2" name="password2" placeholder="PASSWORD"><input id="name1" name="name1" value="'.$x.'" hidden=true><br><input id="password1" name="password1" value="'.$y.'" hidden=true><br><input id="submit2" type="submit"><input id="reset2" type="reset"></form>';
?>
