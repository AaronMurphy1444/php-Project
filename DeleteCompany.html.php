<!--Stundent Name: Aaron Murphy -->
<!--Stundent Number: C00271041 -->
<!--Fuction: Allow user to set a Deleted flag on a company -->
<?php   session_start();
?>

<html>

<head>
<head>

</head>
</head>
<body>
	<title>Delete Company</title>
<H1>Delete a Company</H1>
<H4>Please select a Company then click delete button</H4>

<?php include 'Companylistbox.php'; ?>


<script>
function populate()
{
    var sel = document.getElementById("Companylistbox");
    var result;
    result = sel.options[sel.selectedIndex].value;
    var companyDetails = result.split(',');
    document.getElementById("display").innerHTML = "The details of the selected Company are: " + result;
    document.getElementById("delcompid").value = companyDetails[0];
    document.getElementById("delcompname").value = companyDetails[1];
    document.getElementById("delowed").value = companyDetails[2];
    document.getElementById("delclimit").value = companyDetails[3];
 
    document.getElementById("delstreet").value = companyDetails[5];
    document.getElementById("deltown").value = companyDetails[6];
    document.getElementById("delcounty").value = companyDetails[7];
    document.getElementById("delemail").value = companyDetails[8];
    document.getElementById("delphone").value = companyDetails[9];

}



function confirmCheck()
{
    var response;
    response = confirm('Are you sure you want to delete this Company?'); 
    if(response)
    {
        document.getElementById("delcompid").disabled = false;
        document.getElementById("delcompname").disabled = false;
        document.getElementById("delowed").disabled = false;
        document.getElementById("delclimit").disabled = false;

        document.getElementById("delstreet").disabled = false;
        document.getElementById("deltown").disabled = false;
        document.getElementById("delcounty").disabled = false;
        document.getElementById("delemail").disabled = false;
        document.getElementById("delphone").disabled = false;
        return true;
    }
    else
    {
        populate();
        toggleLock();
        return false;
    }
}


	
	
</script>
<p id = "display"> </p>

<form name ="deleteForm" action = "deleteCompany.php" onsubmit = "return confirmCheck()" method ="post">

<label for ="delcompid">Company ID</label>
<input type = "text" name = "delcompid" id ="delcompid" disabled>
<br>

<label for ="delcompname">Company Name</label>
<input type = "text" name = "delcompname" id ="delcompname" disabled>
<br>
<label for ="delowed">Amount Owed</label>
<input type = "text" name = "delowed" id ="delowed" disabled>
<br>
<label for ="delclimit">Credit Limit</label>
<input type = "text" name = "delclimit" id ="delclimit" disabled>
<br>


<label for ="delstreet">Street</label>
<input type = "text" name = "delstreet" id ="delstreet" disabled>
<br>
<label for ="deltown">Town</label>
<input type = "text" name = "deltown" id ="deltown" disabled>
<br>
<label for ="delcounty">County</label>
<input type = "text" name = "delcounty" id ="delcounty" disabled>
<br>
<label for ="delemail">Email</label>
<input type = "text" name = "delemail" id ="delemail" disabled>
<br>
<label for ="delphone">Phone Number</label>
<input type = "text" name = "delphone" id ="delphone" disabled>
<br><br>
<input type= "submit"  value ="Delete the record">
	</form>
	<?php
		session_destroy();
	?>

</body>
</html>