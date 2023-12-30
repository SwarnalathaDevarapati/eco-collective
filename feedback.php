
<?php
$connection=mysqli_connect("localhost","root","","EcoCollective");
if($connection)
{
	header('location:donate.html');
}
else
{
	echo "error to create";
}
?>

<?php

$fullname=$_POST['fullname'];
$mail=$_POST['mail'];
$commentfield=$_POST['commentfield'];

/*$query="create table Feedback(FullName varchar(30) PRIMARY KEY,EmailId varchar(40),CommentField varchar(1000));";
if(mysqli_query($connection,$query))
{
	echo "Table created";
}
else
{
	echo "error".mysqli_error($connection);
}*/

$query1="INSERT INTO Feedback VALUES(?,?,?);";
$initialize=mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize,$query1))
{
	mysqli_stmt_bind_param($initialize,"sss",$fullname,$mail,$commentfield);
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

