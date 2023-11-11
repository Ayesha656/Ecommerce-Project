
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Input form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

  <!-- /.navbar -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">deCuir Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="./dashboard.php">
          <i class="fa fa-home"></i>
          Home
          <span class="sr-only">(current)</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="./datatables.php">
          <i class="fa fa-table">
            
          </i>
          Datatables
        </a>
      </li>
      
      <li class="nav-item ">
          <a class="nav-link " href="./form.php">
          <i class="fa fa-plus">
            
          </i>
          Insert item
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-key">
          
          </i>
         User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">change password</a>
          
        </div>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="./login.php">
          <i class="fa fa-outdent">
            
          </i>
          logout
        </a>
      </li>
    </ul>
  
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <!-- Sidebar -->
    

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Items</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="insert.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="productname">Item Name</label>
                    <input type="text" class="form-control" id="productname"  name="productname" required placeholder="Enter discription">
                  </div>
                    <div class="form-group" >
                        
                      <label>Product catagory</label>
                     <br>
                  <select name="productgender" required>
                    <option >Select catagory</option>
                     <option value="Male">Male</option>
                     <option value="female">female</option>
                   </select>
                 </div>
                                     <div class="form-group" >
                        
                      <label>Product Size</label>
                     <br>
                  <select name="productsize" required>
                    <option >Select size</option>
                     <option value="S">S</option>
                     <option value="XS">XS</option>
                    <option value="M">M</option>
                     <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                   </select>
                 </div>
             
             
                    <div class="form-group">
                    <label for="productprice">Price</label>
                    <input type="text" class="form-control" id="productprice"  name="productprice" required placeholder="PKR">
                  </div>
                <input type="file"  class="btn btn-primary  " name="image" required>
       <input type="submit" class=" btn btn-primary"value="Insert" name="Insertbtn">


                </div>
                <!-- /.card-body -->

                
              </form>
              
            </div>
            <!-- /.card -->

           
            
            <!-- /.card -->

         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
