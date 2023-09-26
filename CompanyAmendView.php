<!--Stundent Name: Aaron Murphy -->
<!--Stundent Number: C00271041 -->
<!--Fuction: Changes the values of a Company-->
<?php
include 'db.inc.php';

date_default_timezone_set('UTC');



$sql ="UPDATE Company SET CompanyName = '$_POST[amendcompanyname]',
        Street = '$_POST[amendstreet]',
        Town = '$_POST[amendtown]',
		County = '$_POST[amendcounty]',
        PhoneNo = '$_POST[amendphone]',
        Email = '$_POST[amendemail]',
        CreditLimit = '$_POST[amendcredit]'
	    WHERE `Company ID` = '$_POST[amendid]' ";

    if(! mysqli_query($con,$sql))
    {
        echo "Error " . mysqli_error($con);
    }
    else
    {
        if(mysqli_affected_rows($con) !=0)
            {
                echo mysqli_affected_rows($con)." record(s) updated <br>";
                echo "Company ID". $_POST['amendid'].", ".$_POST['amendcompanyname']
                ." ". $_POST['amendstreet']
                ." ". $_POST['amendtown']
                ." ". $_POST['amendphone'] 
                ." ". $_POST['amendemail']
                ." ". $_POST['amendcredit'] . " has been update";
            }
        		
        else
        {
            echo "No records were changed";
        }
		//The above if statements tell the User if a companies' details have been changes or kept the same
    }
mysqli_close($con);

?>

<form action = "CompanyAmendView.html.php" method ="post">
<input type = "submit" value ="return to previous screen">
</form>