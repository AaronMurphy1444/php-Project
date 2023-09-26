<IDOCTYPE html>

<HTML>
 

<HEAD>
<style>

</style> 


<TITLE></TITLE>

</HEAD>

<BODY>

<?php
$hostname = "localhost";
$username = "leon";
$password = "F1rstCl@ss;23";

$dbname = "CarRentalDB_";

$con = mysqli_connect($hostname,$username,$password,$dbname);

if(!$con)
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }



?>


</BODY>



</HTML>