<html>
<body>
    <?php
/*Checking validity of the data entered by the user with the database */
$user=$_POST=['userName'];
$password=$_POST['passWord'];

//Link to database
    $conn=mysql_connect('localhost','root','perez123');
    //Test Connection
    if(!$conn){
        die('Failed to Connect to Database'.mysql_error());
    }
    else{
        echo'<p>Connected Successfully</p>';
    }
//Check if user is in database
    mysql_select_db("db3",$conn);
    $sql="SELECT username, passwd from USERS where username=$user and passwd=$password";
    $result = mysql_query($sql,$conn);
    if(!$result){
        echo'<p>Username not found</p>';
    }
    else{
        echo'<p>Login Successfull!, will redirect to Mailbox</p>';
        header(mailbox.php);
    }
//close connection
    mysql_close($conn);

?>
</body>

</html>
