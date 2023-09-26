<!--Stundent Name: Aaron Murphy -->
<!--Stundent Number: C00271041 -->
<!--Fuction: Allows user to View or Amend a Companies' details -->
<IDOCTYPE html>

<HTML>
 

<HEAD>
<link rel = "stylesheet" type = "text/css" href= "layout.css">
<style>

</style> 


<TITLE>View and Amend Company</TITLE>

</HEAD>

<BODY>

<h1> Amend/View a Company</h1>
<h4>Please slect a Company and then click the amend button if you wish to update</h4>

<?php include 'Companylistbox.php'; ?>
<script>
function populate()
{
    var sel = document.getElementById("Companylistbox");
    var result;
    result = sel.options[sel.selectedIndex].value;
    var companyDetails = result.split(',');
    document.getElementById("display").innerHTML = "The details of the selected Company are: " + result;
    document.getElementById("amendid").value = companyDetails[0];
    document.getElementById("amendcompanyname").value = companyDetails[1];
    document.getElementById("amendstreet").value = companyDetails[5];
    document.getElementById("amendtown").value = companyDetails[6];
	document.getElementById("amendcounty").value = companyDetails[7];
    document.getElementById("amendphone").value = companyDetails[9];
    document.getElementById("amendemail").value = companyDetails[8];
    document.getElementById("amendcredit").value = companyDetails[3];

}

function toggleLock()
{
    if ( document.getElementById("amendViewbutton").value == "Amend Details")
    {
        document.getElementById("amendcompanyname").disabled = false;
        document.getElementById("amendstreet").disabled = false;
        document.getElementById("amendtown").disabled = false;
		document.getElementById("amendcounty").disabled = false;
        document.getElementById("amendphone").disabled = false;
        document.getElementById("amendemail").disabled = false;
        document.getElementById("amendcredit").disabled = false;
        document.getElementById("amendViewbutton").value = "View Details";
    }

    else
    {
        document.getElementById("amendcompanyname").disabled = true;
        document.getElementById("amendstreet").disabled = true;
        document.getElementById("amendtown").disabled = true;
		document.getElementById("amendcounty").disabled = true;
        document.getElementById("amendphone").disabled = true;
        document.getElementById("amendemail").disabled = true;
        document.getElementById("amendcredit").disabled = true;
        document.getElementById("amendViewbutton").value = "Amend Details";


    }
}

function confirmCheck()
{
    var response;
    response = confirm('Are you sure you want to save these changes?');//Pop up message
    if(response)
    {
		document.getElementById("amendid").disabled = false;
        document.getElementById("amendcompanyname").disabled = false;
        document.getElementById("amendstreet").disabled = false;
        document.getElementById("amendtown").disabled = false;
		document.getElementById("amendcounty").disabled = false;
        document.getElementById("amendphone").disabled = false;
        document.getElementById("amendemail").disabled = false;
        document.getElementById("amendcredit").disabled = false;
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

<p id = "display"></p>
<input type = "button" value = "Amend Details" id = "amendViewbutton" onclick = "toggleLock()">

<form name ="myForm" action="CompanyAmendView.php" onsubmit="return confirmCheck()" method ="post">

<label for ="amendid">Company Id </label>
<input type = "text" name = "amendid" id ="amendid" disabled>
<br>
<label for ="amendcompanyname">Company Name</label>
<input type = "text" name = "amendcompanyname" id ="amendcompanyname" disabled>
<br>
<label for ="amendstreet"> Street </label>
<input type = "text" name = "amendstreet" id ="amendstreet" disabled>
<br>
<label for ="amendtown"> Town </label>
<input type = "text" name = "amendtown" id ="amendtown"  disabled>
<br>
<label for ="amendcounty"> County </label>
<input type = "text" name = "amendcounty" id ="amendcounty"  disabled>
<br>
<label for ="amendphone">Phone Number</label>
<input type = "text" name = "amendphone" id ="amendphone" disabled>
<br>
<label for ="amendemail">Email</label>
<input type = "email" name = "amendemail" id ="amendemail" disabled>
<br>
<label for ="amendcredit">Credit Limit</label>
<input type = "text" name = "amendcredit" id ="amendcredit" disabled>
<br><br>
<input type ="submit" value ="Save changes">
</form>
</BODY>



</HTML>