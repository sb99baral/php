<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>New Contact</title>
</head>
<body style="background-color: rgb(240, 235, 248);">
    <div>
		<img src="logo.png" alt="Italian Trulli" style="float:left;width:300px;400height:200px;">
	</div>

<?php
$name1 = "aggresive";
$name2 = "inappropriate urination";

if(!empty($_POST["firstname"]) && !empty($_POST["email"]) &&!empty($_POST["address"])  && !empty($_POST["state"]) && !empty($_POST["zip"]) && ( ($_POST["zip"]) > 25) || (($_POST["address"]) == $name1 ) || (($_POST["address"]) == $name2 ) || ((($_POST["email"]) == "not" )))
{

if (($_POST["zip"]) > 25)
{
  echo "<p align='center'><font color=Red size='12pt'> Your dog is not compatable at puppypalacio. Dogs cannot be more than 25lb </font></p>";
    	 echo "<a href=' https://puppypalacio.com' target='_blank'>Click here to Go Back to HomePage</a>"; 

}
elseif  ((($_POST["address"]) == $name1 ))
{ 
  echo "<p align='center'><font color=Red size='12pt'>  Your dog is not compatable at puppypalacio. Dogs cannot be aggresive. </font> </p>";
    	 echo "<a href=' https://puppypalacio.com' target='_blank'>Click here to Go Back to HomePage</a>"; 

}
elseif  ((($_POST["email"]) == "not" ))
{ 
  echo "<p align='center'><font color=Red size='12pt'>  Your dog is not compatable at puppypalacio. Dogs must be vaccinated </font></p>";
    	 echo "<a href=' https://puppypalacio.com' target='_blank'>Click here to Go Back to HomePage</a>"; 

}

elseif  ((($_POST["address"]) == $name2 ))
{ 
  echo "<p align='center'><font color=Red size='12pt'>  Your dog is not compatable at puppypalacio. Dogs cannot have inappropriate urination </font></p>";
    	 echo "<a href=' https://puppypalacio.com' target='_blank'>Click here to Go Back to HomePage</a>"; 

}

}


else {


if( !empty($_POST["firstname"]) && !empty($_POST["email"])&&!empty($_POST["address"]) && !empty($_POST["state"]) && !empty($_POST["zip"]))
{
   $fname = $_POST["firstname"];
   $email = $_POST["email"];
   $add = $_POST["address"];
   $state = $_POST["state"];
   $zip = $_POST["zip"];
   $FieldEntry = "--".$fname.",".$email.",".$add.",".$state.",".$zip;
   $File = fopen("PhoneBook.txt","a");
   if(fwrite($File,$FieldEntry)>0)
   {
     echo "<p align='center'><font color=Green size='12pt'> Your Dog successfully passed the screening. </font></p>";
  echo "<p>...</p>";
    echo "<p></p>";
	 echo "<a href=' https://puppypalacio.com/book-with-us-today/' target='_blank'>Click here to Schedule Appointment</a>"; 
	  echo "<p></p>";
	 echo '<a href ="new.html"> Return to go back to screening question </a>';
   }
   else
   {
     echo"<p align='center'><font color=Red size='12pt'> Your dog is not compatable at puppypalacio. We appreciate your time. </font></p>";
     echo '<a href ="new.html">Return to Screening page</a>';
   }
   
}
else
{
  echo "<p> Please Enter all the data in the fields</p>";
  echo '<a href ="new.html">Return to add contact page</a>';
}
}
?>

</body>
</html>