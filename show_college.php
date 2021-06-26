<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <title>Fill your details</title>
</head>
<style>
body{
    background-image:url('blur-background.jpg')
}
.container {
    margin: auto;
    width: 70%;
    /* border: 3px solid green; */
    padding: 10px;
    height:390px;


}
.left{
    float:left;
    width:33%;
    /* border:2px solid red; */
}
.right{
    float:right;
    width:230px;
    /* border:2px solid green; */
}
p{
    font-size:15px;
}



.jumbotron {}
</style>

<body>
    <?php
    session_start();
    include 'partials/nav.php';
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];

    $address=$_GET['address'];
    $tenboard=$_GET['tenboard'];
    $tenstream=$_GET['tenstream'];
    $tenpercentage=$_GET['tenpercentage'];
    
    $twelveboard=$_GET['twelveboard'];
    $twelvestream=$_GET['twelvestream'];
    $twelvepercentage=$_GET['twelvepercentage'];

    $centerid=$_GET['centerid'];
    $rollnumber=$_GET['rollnumber'];
    $marks=$_GET['marks'];
    $rank=$_GET['rank'];
    $interest=$_GET['interest'];
    $hobies=$_GET['hobies'];
    

    echo '<div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h3 style = text-align:center;>Kindly Check your data </h3>
            <br>
            <div class="left">
           <b> <p >Username : <b>'.$username.'</b></p>
            <p >Address : <b>'.$address.'</b></p>
            <p >10 Marks : <b>'.$tenpercentage.' Percentage</b></p>
            <p >10 Board : <b>'.$tenboard.'</b></p>
            <p >Center ID : <b>'.$centerid.'</b></p>
            <p >Roll Number : <b>'.$rollnumber.'</b></p>
            <p >Entrance Marks : <b>'.$marks.'</b></p>
            </b>
            <br>
            <button type="submit" class="btn btn-success"><a href="college_list.php?rank='.$rank.'" style= color:white; >Lock Data</a></button>
            
            </div>

            <div class="right">
               <b> <p>10 Stream : <b>'.$tenstream.'</b></p>
                <p >12 Board: <b>'.$twelveboard.'</b></p>
                <p >12 Percentage : <b>'.$twelvepercentage.' Percentage</b></p>
                <p >12 Stream : <b>'.$twelvestream.'</b></p>
                <p >Entrance Rank : <b>'.$rank.'</b></p>
                <p >Interest : <b>'.$interest.'</b></p>
                <p >Future Goals : <b>'.$hobies.'</b></p>
                </b>
                <br>
                <button type="submit" class="btn btn-success"><a href="third.php" style=color:white;>Edit Data</a></button>
            </div>

                
                
     
            
            
            </div>
        </div>
    </div>';
    ?>




    <!-- mysql_connect("localhost","root","");
    mysql_select_db("portal");
    $query="SELECT * from users WHERE username='$username' AND password='$password'";
    $result=mysql_query($query); -->



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