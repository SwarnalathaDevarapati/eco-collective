
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
$weight=$_POST['weight'];
$book_type=$_POST['book_type'];

/*$query="create table BooksIndividuals(Name varchar(30),Phone_No varchar(40),Address varchar(50),Weight int,BookType varchar(20));";
if(mysqli_query($connection,$query))
{
	echo "Table created";
}
else
{
	echo "error".mysqli_error($connection);
}

$query1="INSERT INTO BooksIndividuals VALUES(?,?,?,?,?);";
$initialize=mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize,$query1))
{
	mysqli_stmt_bind_param($initialize,"sssis",$name,$phone_no,$Address,$weight,$book_type);
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

