<?php
session_start();
if(isset($_POST['password'])&&(!empty($_POST['password'])))
{
$_SESSION['pwd']=md5($_POST['password']);
$handle=fopen("hash.txt","w");
fwrite($handle,$_SESSION['pwd'] );
}
?>
<form action="image.php" method="POST">
enter password: <input type="password" name="password">
<input type="submit" value="submit"></form>
