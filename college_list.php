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

    <title>Select Your College</title>
</head>
<style>
.container {
    margin: auto;
    width: 70%;
    
    padding: 10px;

}
body{
    background-image:url('table.jfif');
}
</style>

<body>
    <?php
    session_start();
    include 'partials/nav.php';
    $rank=$_GET['rank'];
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    // echo $rank;
    mysql_connect("localhost","root","");
    mysql_select_db("portal");

    $query="SELECT * FROM college";
    $result=mysql_query($query);
    $count=0;
        echo "<div class='container'>";
        echo  "<table style='width:100%'>";
        echo   "<tr>";
        echo   "<th width='129px'>Sno</th>";
        echo   "<th>College Name</th>";
        echo    "<th>College Address</th>";
        echo    "<th>College Rating</th>";
        echo    "<th>Number of seats available</th>";
        echo    "</tr>";
        echo    "</table>";
        echo    "</div>";
        $sn=1;
    while($r=mysql_fetch_assoc($result)){
        if($count<5){
        if($r['rankid']>=$rank && $r['seats']>0){
            $count++;
            echo "<div class='container'>";
            echo "<table border='1' width='90%'>";

            echo    "<tr height='5px'>";
            echo        "<td  width = '16%'>$sn</td >";
            echo        "<td  width = '18%'><b>$r[college_name]</b></td >";
            echo        "<td  width = '18%'>$r[college_add]</td >";
            echo        "<td  width = '17.5%'>$r[rating]</td >";
            echo        "<td  width = '17%'>$r[seats]</td >";
            echo        "<td  width = '30%'>$r[6] <a href=final.php?id=$r[sno]>Click here to book</a> </td >";
            echo    "</tr>";

            echo "</table>";
            $sn++;
        echo "</div>";
        }
    }
    }
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