<?php

include 'dbcon_1.php';
$query="select * from product";
$result= mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> DataTable</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<style type="text/css">
  a{
    color: white;
  }
</style>
<body class="hold-transition sidebar-mini">
  
  <!-- /.navbar -->
 <!-- Navbar -->
  <!-- Navbar -->
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
            <a class="dropdown-item" href="./updatepass.php">change password</a>
          
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
  <!-- /.navbar -->

 
  </aside>

 

  <!-- Content Wrapper. Contains page content -->
 
              <div class="card-header">
                <h3 class="card-title">Your order access Tables</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>productid</th>
                    <th>productname</th>
                    <th>productgender</th>
                    <th>productsize</th>
                    <th>product price</th>
                    <th>productimage</th>
                     <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                       <?php
                  
                  while($rows= mysqli_fetch_assoc($result))
                  {
                      
                      
                  
                  
                  ?>
                  <tr>
                      <th><?php echo $rows    ['productid'];?></th>
                     <td><?php echo $rows    ['productname'];?></td>
                      <td><?php echo $rows    ['productgender'];?></td>
                        <td><?php echo $rows    ['productsize'];?></td>
                         <td><?php echo $rows    ['productprice'];?></td>
                         <td><?php echo $rows    ['productimage'];?></td>
                         <?php
                         echo "<td><a href='edit.php?productid=$rows[productid]&productname=$rows[productname]&productgender=$rows[productgender]&productsize=$rows[productsize]&productprice=$rows[productprice]&productimage=$rows[productimage]'>Edit</a></td>
                    <td><a href='edit.php?id=$rows[productid]'>Delete</a></td>
                  </tr>
                  "?>
                  <?php
         }
                ?> 
              
                
                  </tbody>
                  <tfoot>
                  <tr>
                   
                     <th>productid</th>
                    <th>productname</th>
                    <th>productgender</th>
                    <th>productsize</th>
                    <th>productimage</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io"></a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
