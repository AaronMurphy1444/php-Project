<!--Stundent Name: Aaron Murphy -->
<!--Stundent Number: C00271041 -->
<!--Fuction: Listbox to show all companies that have not been flagged for deletion-->
<?php
include "db.inc.php";
date_default_timezone_set('UTC');

$sql = "SELECT * FROM Company WHERE DeletedFlag = 0";
//The above only allows companies where they have not been flagged
if(!$result = mysqli_query($con, $sql))
{
    die( 'Error in querying the database ' . mysqli_error($con));
}

echo "<br><select name = 'Companylistbox' id = 'Companylistbox' onclick = 'populate()'>";

while($row = mysqli_fetch_array($result))
{
    $id = $row['Company ID'];
    $cname = $row['CompanyName'];
    $aowed = $row['AmountOwed'];
    $climit = $row['CreditLimit'];
    $bflag = $row['BlacklistFlag'];
    $street = $row['Street'];
    $town = $row['Town'];
    $county = $row['County'];
    $email = $row['Email'];
    $phone = $row['PhoneNo'];
   
    $allText = "$id,$cname,$aowed,$climit,$bflag,$street,$town,$county,$email,$phone";
    echo "<option value = '$allText'>$cname</option>";

}
//To populate a form with data automatically
echo "</select>";
mysqli_close($con);
?>