
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
$number=$_POST['number'];
$Address=$_POST['Address'];
$plasticType=$_POST['plasticType'];
$plasticWeight=$_POST['plasticWeight'];

/*$query="create table PlasticOrganisations(Name varchar(30),Number varchar(40),Address varchar(50),plasticType varchar(100),plasticWeight int);";
if(mysqli_query($connection,$query))
{
	echo "Table created";
}
else
{
	echo "error".mysqli_error($connection);
}*/

$query1="INSERT INTO PlasticOrganisations VALUES(?,?,?,?,?);";
$initialize=mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize,$query1))
{
	mysqli_stmt_bind_param($initialize,"sissi",$name,$number,$Address,$plasticType,$plasticWeight);
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

