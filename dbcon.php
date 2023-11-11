<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Database Connection</title>
</head>

<body>
<?php



class dbcon
{
      public function __construct(){
              
$this->conn=mysqli_connect("localhost","root","","decuir");

if(!$this->conn)
{
	die('pleaseb check your connections     '. mysqli_connect_error());
}


      }
    public function getData(){
        $sql = "SELECT * FROM product";
   
        $result = mysqli_query($this->conn, $sql);
     
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    
        
        }
    }
            
   ?>
        
   
        
</body>
</html>