<?php
        $user=$_POST['username'];
        $password=$_POST['password'];
        mysql_connect("localhost","root","");
        mysql_select_db("portal");

        $query="SELECT * FROM users WHERE username='$user' AND password='$password' ";
        $result=mysql_query($query);
        $row=mysql_num_rows($result);
        echo "$row";
        if($row==1){
            session_start();
            $_SESSION['username']=$user;
            $_SESSION['password']=$password;
            header("location: ../details.php");
        }
        else{
            echo "type mismatch";
        }
        
        ?>