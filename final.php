<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="select.css">

    <title>Congratulations</title>
</head>
<style>
        body{
            /* background-color: rgb(140, 222, 0); */
            background-image:url('final.jpeg');
        }
        h3{
            margin-top: 30px;
            margin-left: 215px;
            margin-right: 250px;
            font-size: 28px;
            font-family: 'Montserrat', sans-serif;
            font-style: italic;
        }

        .box{
            margin-left: 166px;
            margin-right: 200px;
            margin-top: 170px;
            border: brown;
            box-shadow: chocolate;

            height: 280px;
        }

    </style>
<body>
    <?php
    session_start();
    include 'partials/nav.php';
    $college_id=$_GET['id'];
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    mysql_connect("localhost","root","");
    mysql_select_db("portal");

    $query="SELECT * FROM college WHERE sno='$college_id' ";
    $result=mysql_query($query);
    $college_name;
    while($r=mysql_fetch_assoc($result)){
        $college_name= $r[college_name];
        $seats=$r[seats];
    }
    $seats=$seats-1;
    $query2=("UPDATE college SET seats='$seats' WHERE sno='$college_id'");
    mysql_query($query2);

    ?>
<?php
echo    '<div class="box">
    <h3>Hi <b>'.$username.'</b><br>
    Congratulations!! <br>
    We are glad to inform that you have been selected for the Btech program (Batch 2025) in <b>'.$college_name.'</b> college. You can visit the  
        college on or before 15 July for the further admission process.
    <br>
    Thank You.</h3>
</div>';
?>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>