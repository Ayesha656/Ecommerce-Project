




 <?php
include 'dbcon_1.php';
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$query = "insert into userinfo(name,email,address,city,phone) values('$name','$email','$address ','$city','$phone');";
$result = mysqli_query($conn, $query);
if ($result) {
echo "<script> alert('data inserted successfully!! ')</script>";
}
else{
	echo "<script> alert('data insertion failed')</script>";
}


        ?>