<!--Stundent Name: Aaron Murphy -->
<!--Stundent Number: C00271041 -->
<!--Fuction: For setting the deleted flag on a company-->
<?php   session_start();
?>
<?php
include 'db.inc.php';
//Below code makes sure to flag the roght company by comparing IDs
$sql ="UPDATE Company SET deletedflag = true WHERE `Company ID` = '$_POST[delcompid]'";


if(!mysqli_query($con,$sql))
    {
        echo "ERROR " . mysqli_error($con);
    }

$_SESSION["Company ID"] = $_POST['delcompid'];
$_SESSION["CompanyName"] = $_POST['delcompname'];
$_SESSION["AmountOwed"] = $_POST['delowed'];
$_SESSION["CreditLimit"] = $_POST['delclimit'];
$_SESSION["BlacklistFlag"] = $_POST['delblacklist'];
$_SESSION["Street"] = $_POST['delstreet'];
$_SESSION["Town"] = $_POST['deltown'];
$_SESSION["County"] = $_POST['delcounty'];
$_SESSION["Email"] = $_POST['delemail'];
$_SESSION["PhoneNo"] = $_POST['delphone'];


mysqli_close($con);

?>

<script>
window.location = "Delete.html.php"
</script>
