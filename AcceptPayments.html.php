<!--Stundent Name: Aaron Murphy -->
<!--Stundent Number: C00271041 -->
<!--Fuction: User can select a company to pay off debt-->
<IDOCTYPE html>

<HTML>
 

<HEAD>
<link rel = "stylesheet" type = "text/css" href= "">
<style>

</style> 


<TITLE>Accept Payment</TITLE>

</HEAD>

<BODY>

<h1>Accept Payments</h1>
<h4>Please slect a Company and to pay some or all of owed balance</h4>


<script>
function populate()
{
    var sel = document.getElementById("Companylistbox");
    var result;
    result = sel.options[sel.selectedIndex].value;
    var companyDetails = result.split(',');
    //document.getElementById("display").innerHTML = "The details of the selected Company are: " + result;
    document.getElementById("id").value = companyDetails[0];
    document.getElementById("companyname").value = companyDetails[1];
    document.getElementById("companyowed").value = companyDetails[2];
    document.getElementById("companycredit").value = companyDetails[3];
    document.getElementById("companystreet").value = companyDetails[5];
    document.getElementById("companytown").value = companyDetails[6];
    document.getElementById("companycounty").value = companyDetails[7];

}

		

function confirmCheck()
{
    var response;
    response = confirm('Are you sure you want to make this Payment?');//Confirmation Message on if user wants to make payment
    if(response)
    {
		document.getElementById("id").disabled = false;
        document.getElementById("companyname").disabled = false;
        document.getElementById("companyowed").disabled = false;
        document.getElementById("companycredit").disabled = false;
        document.getElementById("companystreet").disabled = false;
        document.getElementById("companytown").disabled = false;
        document.getElementById("companycounty").disabled = false;
        return true;
    }
    else
    {
        populate();
        toggleLock();
		debtCheck();
        return false;
		
    }
}

</script>
<div class ="container">
	<?php include 'Companylistbox.php'; ?>
<p id = "display"> </p>

<form name ="PaymentsForm" action ="AcceptPayments.php" onsubmit="confirmCheck(); debtCheck;"  method = "POST">

<label for ="id">Company Id </label>
<input type = "text" name = "id" id ="id" disabled>
<br>
<label for ="companyname">Company Name</label>
<input type = "text" name = "companyname" id ="companyname" disabled>
<br>
<label for ="companyowed">Company Balance</label>
<input type = "number" name = "companyowed" id ="companyowed" disabled>
<br>
<label for ="companycredit">Company Credit</label>
<input type = "number" name = "companycredit" id ="companycredit" disabled>
<br>
<label for ="companystreet">Company Street</label>
<input type = "text" name = "companystreet" id ="companystreet" disabled>
<br>
<label for ="companytown">Company Town</label>
<input type = "text" name = "companytown" id ="companytown" disabled>
<br>
<label for ="companycounty">Company County</label>
<input type = "text" name = "companycounty" id ="companycounty" disabled>
<br>

<label for ="paytype">Type of Payment </label><!-- Allow user to slect from 3 payment types -->
<select name = "paytype" id ="paytype">
<option value="card">Credit Card</option>
<option value="cash">Cash</option>
<option value="cheque">Cheque</option>
</select>
	
<br>

<label for ="amountpaid">Payment Amount</label>
<input type = "number" name = "amountpaid" id ="amountpaid"><!-- Amount user wants to pay off -->
<br>
<input type ="submit" value ="Pay">
</form>
	</div>


</BODY>



</HTML>