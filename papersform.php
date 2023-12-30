
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
$paper_type=$_POST['paper_type'];
$paper_type1=$_POST['paper_type1'];
$paper_type2=$_POST['paper_type2'];
$paper_type3=$_POST['paper_type3'];
$paper_type4=$_POST['paper_type4'];
$paper_type5=$_POST['paper_type5'];
$paper_type6=$_POST['paper_type6'];
$paper_type7=$_POST['paper_type7'];

/*$query="create table PaperDonation(Name varchar(30),Phone_No varchar(40),Address varchar(50),Weight int,PaperType varchar(20),PaperType1 varchar(20),PaperType2 varchar(20),PaperType3 varchar(20),PaperType4 varchar(20),PaperType5 varchar(20),PaperType6 varchar(20),PaperType7 varchar(20));";
if(mysqli_query($connection,$query))
{
	echo "Table created";
}
else
{
	echo "error".mysqli_error($connection);
}*/

$query1="INSERT INTO PaperDonation VALUES(?,?,?,?,?,?,?,?,?,?,?,?);";
$initialize=mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize,$query1))
{
	mysqli_stmt_bind_param($initialize,"sssissssssss",$name,$phone_no,$Address,$weight,$paper_type,$paper_type1,$paper_type2,$paper_type3,$paper_type4,$paper_type5,$paper_type6,$paper_type7,);
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

