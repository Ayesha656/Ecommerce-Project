<?php
include ('dbcon_1.php');    
session_start();
if(isset($_POST['submit']))
{
    
   if (empty($_POST['username'])  ||  empty($_POST['password']))
   {
       
     echo '<script>alert("Please enter required Specifications")</script>'; 
       
   }
   
       else {
         
       $query="select * from adminuser where username ='".$_POST['username']."' and password ='".$_POST['password']."' ";
   
       $result= mysqli_query($conn,$query);
       $num= mysqli_num_rows($result);
       if ($num==1){
            $_SESSION['user']=$_POST['username'];
           
          
           header("location:./dashboard.php");
           
           
       }
           else {
               
              echo '<script>alert("Invalid  Specifications")</script>';
                
              exit();
               
           }
           
           
       }    
    
    
}
?>
