<?php
           $fullname=$_POST['fullname'];
           $username=$_POST['username'];
           $dateofbirth=$_POST['dateofbirth'];
           $state=$_POST['state'];
           $email=$_POST['email'];
           $phonenumber=$_POST['phonenumber'];
           $password=$_POST['password'];
           $confirm=$_POST['cpassword'];

           

           mysql_connect("localhost","root","");
           mysql_select_db("portal");

           $query="SELECT * FROM users WHERE username ='$username' ";
           $result=mysql_query($query);
           $row=mysql_num_rows($result);
           if($row>0){
               echo "user exists";
           }
           else{
            $query2="INSERT INTO `portal`.`users` (
                `fullname` ,
                `username` ,
                `dateofbirth` ,
                `state` ,
                `email` ,
                `phonenumber` ,
                `password` ,
                `confirmpassword` ,
                `datetime`
                )
                VALUES (
                '$fullname', '$username', '$dateofbirth', '$state', '$email', '$phonenumber', '$password', 'confirm', NOW( )
                )";
               $result2=mysql_query($query2);
               if($result2){
                 $signup="true";
                 header("location: ../index.php?signup=$signup&username=$fullname");
               }
               
           }

          
           
           ?> 