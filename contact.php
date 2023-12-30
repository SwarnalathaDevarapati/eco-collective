
<?php
$connection=mysqli_connect("localhost","root","","EcoCollective");
/*if($connection)
{
	echo "connection successful";
}
else
{
	echo "error to create";
}*/
?>
<html>
<head>
<style>
.card{
height:160px;
width:800px;
background:linear-gradient(to right,blueviolet,lightblue);
text-align:center;
padding:10px;
margin:200px;
box-shadow:10px 10px 10px 10px;
}
.card:hover{
	height:200px;
	width:850px;
	float:right;
}
.visit-btn{
	height:30px;
	width:100px;
	background:linear-gradient(to left,blueviolet,lightblue);
	border:1px solid black;
	border-radius:10px;
}
.visit-btn:hover{
	width:120px;
	height:40px;
}
</style>
</head>
<body style="background:linear-gradient(lightblue,blueviolet)">
<div class="card">
<h3>My team Will Resolve Your Query as soon as possible</h3>
<h5>Thank You So much for your feedback.<br>Keep surfing through our website and make donations.</h5>
<a href="home.html"><button class="visit-btn">Visit Website</button></a>
</div>
</body>
</html>
<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$query=$_POST['query'];

/*$query="create table Contact(Name varchar(30) PRIMARY KEY,EmailId varchar(40),Phone varchar(10),query varchar(100));";
if(mysqli_query($connection,$query))
{
	echo "Table created";
}
else
{
	echo "error".mysqli_error($connection);
}*/

$query1="INSERT INTO Contact VALUES(?,?,?,?);";
$initialize=mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize,$query1))
{
	mysqli_stmt_bind_param($initialize,"ssss",$name,$email,$phone,$query);
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

