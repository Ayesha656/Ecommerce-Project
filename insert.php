<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
include('dbcon_1.php');
if (isset($_POST['Insertbtn'])) {

$productname=$_POST['productname'];
$productgender=$_POST['productgender'];
$productsize=$_POST['productsize'];
$productprice=$_POST['productprice'];
$image_name=$_FILES['image']['name'];
$image_temp_name=$_FILES['image']['tmp_name'];
$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size'];
$new_folder="./images/";


if(strtolower($image_type)=="image/jpg" || strtolower($image_type)=="image/gif"|| strtolower($image_type)=="image/jifi"  ||strtolower($image_type)=="image/png" ||strtolower($image_type)=="image/jpeg")
{
if($image_size<=1000000)
{

$new_folder="./images_1/".$image_name;
$query="insert into product(productname,productgender,productsize,productprice,productimage)values('$productname','$productgender','$productsize','$productprice','$new_folder')";
$run=mysqli_query($conn,$query);
if ($run) {
echo "<script> alert('data inserted successfully!! ')</script>";

if (move_uploaded_file($image_temp_name,$new_folder)) {


echo '<script>window.location="./index.php"</script>';  

}
else{


echo "sorry image not found";
}


}
else
{
echo "<script> alert('data inserted failed!! ')</script>";
}
}
else
{
echo "<script> alert('Image should be less than 1MB')</script>";
}
}
else{
echo "image format not supported";
}
}




?>
</body>
</html>