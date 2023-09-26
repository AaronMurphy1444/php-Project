<!--Stundent Name: Aaron Murphy -->
<!--Stundent Number: C00271041 -->
<!--Fuction: To input data for adding a new company to the database-->
<IDOCTYPE html>

<HTML>
 

<HEAD>
<style>

</style> 


<TITLE>Add Company</TITLE>

</HEAD>

<BODY>

<?php
include 'db.inc.php';




$sql = "Insert into Company (CompanyName, CreditLimit, Street, Town, County, Email, PhoneNo)
VALUES ('$_POST[CompanyName]','$_POST[CreditLimit]','$_POST[Street]','$_POST[Town]','$_POST[County]','$_POST[Email]','$_POST[PhoneNo]')";
//Above inserts values into Company Table
if(!mysqli_query($con,$sql))
    {
        die ("An error in the SQL Query : " . mysqli_error($con) ) ;

    }
echo "<br> A record has been added for " . $_POST['CompanyName'];
//Confrims the Addition of a new company
mysqli_close($con);
?>

<form action = "insert.html" method ="POST">
<br>
<input type ="submit" value = "return to insert page"/>
</form>





</BODY>



</HTML>