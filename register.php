<?php
//get user entered items
$user=$_POST=['username'];
$name=$_POST=['fullname'];
$lock=$_POST=['password'];
//connect to database
$conn = mysql_connect('localhost','root','perez123');
//test connection
if(!$conn){
  die('Failed to connect to database'.mysql_error());
}
else{
  echo "Connection Established";
  //if connected, enter user input into respective table columns
  mysql_select_db("db3",$conn);
  $sql="insert into users (Fullname,Username,Password) values($name,$user,$lock)";
  $result=mysql_query($sql,$conn);
  if(!$result){
    echo"Failed to add user into DB3";
  }
  else{
    echo"Added User successfully, directing to dashboard"
    header(dashboard.php);
  }
}
//close connection
mysql_close($conn);
 ?>
