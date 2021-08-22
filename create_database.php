<?php


 $con = mysqli_connect('localhost','root','') or die("connection failed");

  if($con){
        echo "connection success";
  }else{
      echo "connection failes" .mysqli_connect_error($con);
  }

  $sql = "CREATE  DATABASE class";
  
  $result = mysqli_query($con,$sql);

  if($result){
        echo "database created successfully";
  }else{
      echo "database already created" .mysqli_error($con);
}

?>