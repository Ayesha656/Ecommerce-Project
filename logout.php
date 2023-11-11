<?php
session_start();


if(isset($_GET['logout'])){
    
    session_destroy();
    header("location:index.php");
    
    
    
}else{
     
    
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

