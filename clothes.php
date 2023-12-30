
<?php
$connection=mysqli_connect("localhost","root","","EcoCollective");
if($connection)
{
	header('location:Contribute_thanks.html');
}
else
{
	echo "error to create";
}
?>
<html>
<body>
<h4>Thanks For Your Contribution</h4>
</body>
</html>	
<?php

$name=$_POST['name'];
$phone_no=$_POST['phone_no'];
$Address=$_POST['Address'];
$Meters=$_POST['Meters'];

/*$query="create table clothesDonation(Name varchar(30),Phone_No varchar(40),Address varchar(50),Meters int);";
if(mysqli_query($connection,$query))
{
	echo "Table created";
}
else
{
	echo "error".mysqli_error($connection);
}*/

$query1="INSERT INTO clothesDonation VALUES(?,?,?,?);";
$initialize=mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize,$query1))
{
	mysqli_stmt_bind_param($initialize,"sssi",$name,$phone_no,$Address,$Meters);
	mysqli_stmt_execute($initialize);
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

