<!--Stundent Name: Aaron Murphy -->
<!--Stundent Number: C00271041 -->
<!--Fuction: Send taken in data from the Accept Payments form to record in the payments table and to decrement the amount a AmountOwed in the Company table -->
<IDOCTYPE html>

<HTML>
 

<HEAD>
<style>

</style> 


<TITLE>Accept Payments</TITLE>

</HEAD>

<BODY>

<?php
include 'db.inc.php';//data base connection


$TDate = date("Y/m/d");//Variable called TDate that gets todays date

$sql = "Insert into Payments (CompanyID, DateOfPayment, PaymentMethod, PaymentAmount)
VALUES ('$_POST[id]','$TDate','$_POST[paytype]','$_POST[amountpaid]')";
//Above code is inserting data from Payments form to the database


if(!mysqli_query($con,$sql))
    {
        die ("An error in the SQL Query : " . mysqli_error($con) ) ;

    }
echo "<br> A record of payment has been added for " . $_POST['companyname'];

$sql = "UPDATE Company SET AmountOwed = AmountOwed - '$_POST[amountpaid]'
WHERE `Company ID` ='$_POST[id]' ";
//Above code decrements the AmountOwed in Company Table
if(!mysqli_query($con,$sql))
    {
        die ("An error in the SQL Query : " . mysqli_error($con) ) ;

    }
mysqli_close($con);
?>
<script>
window.location = "AcceptPayments.html.php"
</script>


