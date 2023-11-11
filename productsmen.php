

<?php

session_start();

require_once ('./dbcon.php');
include 'dbcon_1.php';
// create instance of Createdb class
$database = new dbcon("Productdb", "Producttb");

if (isset($_POST['shopping_cart'])) {

    if (isset($_SESSION['mycart'])){

             $item_array_id = array_column($_SESSION['mycart'],"productid");
       
        
         
        if(in_array($_POST['productid'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'productswomen.php'</script>";
        
            
        }else{
            
           $count = count($_SESSION['mycart']);
            $item_array = array(
                'productid' => $_POST['productid']
            );

            $_SESSION['mycart'][$count] = $item_array;
        
        }
    } else {

        $item_array = array('productid' => $_POST['productid']);

        $_SESSION['mycart'][0] = $item_array;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="assets/images/favicon.ico">

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="./dist/frontendcss/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="./dist/frontendcss/fontawesome.css">
        <link rel="stylesheet" href="./dist/frontendcss/style.css">
        <link rel="stylesheet" href="./dist/frontendcss/owl.css">
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="./dist/js/myscript.js"></script>

    </head>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            text-align: center;
            float: left;
            margin-left: 32px;
            height: auto;
            margin-top: 122px;
            width: auto;
        }
        img{
            width: 200px;
            height:200px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white; 
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }
        table, th, tr{
            text-align: center;

        }
        .title2{
            text-align: center;
            background-color: #000;
            color: #66afe9;
            padding: 2%;

        }
        table th{
            background-color: #efefef;
        }


    </style>
    <body>

<?PHP
include './headerfront.php';
?>
        <!-- Page Content -->

<?php
include 'dbcon_1.php';
$query = "select * from product where productgender='Male'";
$result = mysqli_query($conn, $query);
$run = mysqli_num_rows($result) > 0;
if ($run) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <form method="post" action=""<?php echo$row['productid'] ?> >
                    <div class="container ">
                        <div class col-md-3>
                            <div class="card" >
                                <div class="card-body">
                                  <img src="<?php  echo "./".$row['productimage']; ?>"class="card-img-top" height="200" width="200" > <br>
                                      <h2 class="card-title " name="productname"><?php echo $row['productname']; ?> </h2>
                                    <h3 class="card-title"name="productsize"><?php echo $row['productsize']; ?></h3>
                                    <h3 class="card-title" name="productquantity">
                                    <h4 class="card-title"><?php echo $row['productprice']; ?></h4>  
                                    <button  name="shopping_cart" >Add to Cart</button>
                                    <input type='hidden' name='productid' value=<?php echo $row['productid'] ?>>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

                <?php
            }
        } else {
            echo "No data found";
        }
        ?>





      
  
    <!-- Bootstrap core JavaScript -->
    <script src="./dist/js/jquery.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>


    <!-- Additional Scripts -->
    <script src="./dist/js/custom.js"></script>
    <script src="./dist/js/owl.js"></script>
    </body>

</html>
