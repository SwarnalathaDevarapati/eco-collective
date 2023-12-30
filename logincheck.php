<?php
session_start();
?>
<?php
include "connection.php";
$username=$_POST['email'];
$password=$_POST['pwd'];
$query="select * from signUpDetails where EmailId='$username' && ConfirmPwd='$password'";
$data=mysqli_query($connection,$query);
$total=mysqli_num_rows($data);
if($total==0){
	header('location:templates/marks.html');
}
else
{
	header('location:register.html');
}
$_SESSION["email"]=$username;
$_SESSION["pwd"]=$password;
?>














