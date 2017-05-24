<html>
    <body>
        <h3>Welcome to your Messages Folder</h3>
        <h3>Here are your messages so far</h3>
    </body>
    <?php
    //connect to database to print messages currently available
    $connect=mysql_connect('ecsmsql','cs431s25','ixupeijo');
    if(!$connect){
        die('Failed to Fetch messages'.mysql_errno());
    }
    else{
        //make query and print
        $slq="SELECT * FROM MAILBOX";
        $result=mysql_query($sql,$connect);
        $num=mysql_num_rows($result);
        for($i=0;$i<$num;$i++){
            echo
        }
    }
    ?>
</html>