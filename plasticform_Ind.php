
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
$email=$_POST['email'];
$number=$_POST['number'];
$plasticType=$_POST['plasticType'];
$Address=$_POST['Address'];
$PlasticLocation=$_POST['PlasticLocation'];
$plasticWeight=$_POST['plasticWeight'];

/*$query="create table PlasticIndividuals(Name varchar(30),Email varchar(40),number varchar(10),plasticType varchar(100),Address varchar(50),PlasticLocation varchar(50),plasticWeight int);";
if(mysqli_query($connection,$query))
{
	echo "Table created";
}
else
{
	echo "error".mysqli_error($connection);
}*/

$query1="INSERT INTO PlasticIndividuals VALUES(?,?,?,?,?,?,?);";
$initialize=mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize,$query1))
{
	mysqli_stmt_bind_param($initialize,"ssssssi",$name,$email,$number,$plasticType,$Address,$PlasticLocation,$plasticWeight);
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

