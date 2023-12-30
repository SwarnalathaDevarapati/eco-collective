
<?php
$connection=mysqli_connect("localhost","root","","EcoCollective");
if($connection)
{
	header('location:home.html');
}
else
{
	echo "error to create";
}
?>

<?php


$email=$_POST['email'];
$pass=$_POST['pass'];
$cpwd=$_POST['pwd'];

$query="create table signUpDetails(EmailId varchar(40) PRIMARY KEY,password varchar(10),ConfirmPwd varchar(10));";
if(mysqli_query($connection,$query))
{
	echo "Table created";
}
else
{
	echo "error".mysqli_error($connection);
}

$query1="INSERT INTO signUpDetails VALUES(?,?,?);";
$initialize=mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize,$query1))
{
	mysqli_stmt_bind_param($initialize,"sss",$email,$pass,$cpwd);
	mysqli_stmt_execute($initialize);
	header('location:home.html');
}
else{
	echo "error".mysqli_error($connection);
}
/*$query2="SELECT *FROM signup;";
$check=mysqli_query($connection,$query2);
if(mysqli_num_rows($check))
{
	while ($row=mysqli_fetch_assoc($check))
	{
		echo $row['uname']." ".$row['email']." ".$row['pass']." ".$row['cpwd']." ".$row['mobile']."<br>";
	}
}
else
{
	echo "error".mysqli_error($connection);
}*/
?>

