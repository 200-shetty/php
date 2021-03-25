<?php
session_start();
$filename="hash.txt";
$handle = fopen("$filename","r");
$check = fread($handle, filesize($filename));
$pwd=md5($_POST['password1']);
if($pwd==$check)
{
echo "password ok";
}
else
{
echo "wrong password";
}
?>
<form action="hashc.php" method="POST">
confirm password: <input type="password" name="password1">
<input type="submit" value="submit"></form>
