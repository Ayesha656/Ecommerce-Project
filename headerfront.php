 <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2 style=font-size:50px >deCuir</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                </li>
                

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
                    
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./productswomen.php">Women's </a>
                         <a class="dropdown-item" href="./productsmen.php">Men's</a>
                     
                    
                    </div>
                </li>
                
             
                <li class="nav-" name="mycart"><a class="nav-link" href="./cart.php "> Your Cart<?php
                
                if(isset($_SESSION['mycart'])){
                    $count=count($_SESSION['mycart']);
                    echo" ( $count ) ";
                    
                    
                }
                
                ?>
                        <li class="nav-item"><a class="nav-link" href="./userinfo.php">Checkout</a></li>

                <li class="nav-item"><a class="nav-link" href="./contact.html">Contact Us</a></li>
                    </a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>


   
             