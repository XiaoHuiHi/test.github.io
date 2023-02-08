<!DOCTYPE html>
<html>

<head>
<title>COMMENT</title>

<style type="text/css">

span {color:red }

</style>

<script type="text/javascript">

function validate()
{
	var uname, email, phone, taste="Null", comment;
	var name_flag=false, phone_flag=false, email_flag=false, taste_flag=false, comm_flag=false;
	uname = document.detailsfrm.cust_name.value;
	phone = document.detailsfrm.cust_phone.value;
    email = document.detailsfrm.cust_email.value;
	comment = document.detailsfrm.cust_comm.value;
	len = document.detailsfrm.f_taste.length;
	for(x=0; x<len; x++)
	{
		if (document.detailsfrm.f_taste[x].checked)
        taste = document.detailsfrm.f_taste[x].value;
	}
	if (uname.trim() == "")
		document.getElementById("error_name").innerHTML = "Key in the correct Name";
	else
	{	
		document.getElementById("error_name").innerHTML = "&nbsp;";
		name_flag = true;
	}
	if (isNaN(phone) || phone.trim() == "" )
		document.getElementById("error_phone").innerHTML = "Key in the correct Phone Number";
	else
	{
		document.getElementById("error_phone").innerHTML = "&nbsp;";
		phone_flag = true;
	}
    if (email.trim() == "" )
		document.getElementById("error_email").innerHTML = "Key in the correct Email Address";
	else
	{
		document.getElementById("error_email").innerHTML = "&nbsp;";
		email_flag = true;
	}
	if (comment.trim() == "" )
		document.getElementById("error_comm").innerHTML = "What is your comment for us";
	else
	{
		document.getElementById("error_comm").innerHTML = "&nbsp;";
		comm_flag = true;
	}
	if (taste == "Null")
		document.getElementById("error_taste").innerHTML = "How is our food taste";
	else
	{
		document.getElementById("error_taste").innerHTML = "&nbsp;";
	switch(taste)
	{
		case "Good" : taste = "Good"; break;
		case "Normal" : taste = "Normal"; break;
		case "Bad" : taste = "Bad"; break;
	}
	taste_flag = true;
}
	if (name_flag && phone_flag && email_flag && taste_flag && comm_flag)
		display(uname, phone, email, taste, comment);
	else
		alert("The form has errors");
}

function display(uname, phone, email, taste, comment)
{
	document.write("<br />Name    : " + uname);
	document.write("<br />Phone   : " + phone);
    document.write("<br />Email   : " + email);
	document.write("<br />Taste   : " + taste);
    document.write("<br />Comment : " + comment);	
}

</script>

</head>

<body>

<form name="detailsfrm">

	<p>Name  : <input type="text" name="cust_name" /> <span id="error_name"></span></p>
	<p>Phone : <input type="tel" name="cust_phone" maxlength="10" /> <span id="error_phone"></span></p>
    <p>Email : <input type="email" name="cust_email" /> <span id="error_email"></span></p>
	<p>Taste : <input type="radio" name="f_taste" value="Good" />Good
					  <input type="radio" name="f_taste" value="Normal" />Normal
					  <input type="radio" name="f_taste" value="Bad" />Bad
					   <span id="error_taste"></span>
	<p>Comment:</p><p><textarea name="cust_comm" rows="4" cols="50">INSERT COMMENT HERE</textarea><span id="error_comm"></span></p>
	<p><input type="button" name="displaybtn" value="Display Details" onclick="validate();" /></p>

</form>



</body>

</html>

<?php
include("dataconnection.php");
if(isset($_POST["savebtn"])) 	
{
	$mtitle = $_POST["mov_title"];  	
	$mprice = $_POST["mov_price"];  	
	$msummary = $_POST["mov_summary"];  	
	$mrelease = $_POST["mov_release"];  	
	
	mysqli_query($conn,"insert into movie (movie_title, movie_ticket_price, movie_summary, movie_release_date) values ('$mtitle',$mprice,'$msummary','$mrelease')");
	
	?>
	
		<script type="text/javascript">
			alert("<?php echo 'comment saved' ?>");
		</script>
	
	<?php
	
	
}

?>