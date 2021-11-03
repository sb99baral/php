<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title> Search Directory</title>
</head>
<body style="background-color: rgb(240, 235, 248);"><br/>
    <div>
		<img src="logo.png" alt="Italian Trulli" style="padding-top:10px;padding-bottom:10px;float:left;width:300px;400height:200px;">
	</div>
<?php

if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]))
{
  $found = 0;
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  if(file_exists("PhoneBook.txt"))
  {
  	
  	$FileRead = fopen("PhoneBook.txt","r");
  	$FileContent = file_get_contents("PhoneBook.txt");
    //Going through each contact list seperated from the --
  	$Fields = explode("--",$FileContent);
    //Total number of Fields
    $count = count($Fields);
    for($i=1;$i<$count;$i++)
    {
      //Taking each field and then going after each field seperated by comma
      $Field = explode(",",$Fields[$i]);
      //Compares 2 strings case sensitive
      if((!strcasecmp($Field[0],$fname)) && (!strcasecmp($Field[1],$lname)))
       {
        $found = 1;
       // echo "Found";
        //print_r($Field); 
        echo "<br/><br/><br/><br/><br/><br/><form method ='post' action ='update.php'>
              <p><font color=Black size='4pt'>First Name <input type ='text' name ='new_firstname' value = '{$Field[0]}'>
               name ='new_lastname' value = '{$Field[1]}'><br/><br/>
                 Vaccinated <select name ='new_email' value = '{$Field[2]}'>
				 <option value = 'Yes'>Yes</option>
                 <option value = 'No'>No</option></select><br/><br/>

 




                Behavior <input type = 'text' name='new_zip' value = '{$Field[3]}'>


                Dog Type <input type = 'text' name='new_zip' value = '{$Field[4]}'><br/><br/>
				Weight <input type = 'text' name='new_zip' value = '{$Field[5]}'>

              </font></p>
             </form>";
       // echo "<p><b> Click on Update to update your info or click here to go back</b></p>";
        echo '<a href = "index.html"> Return to search page </a>';
       }
    }
   if(!empty($fname) && !empty($lname) && $found == 0){
     echo "<p> Contact Not Found</p>";
     echo '<a href ="index.html"> Return to search page </a>';
   }
  }
}
else
{
	echo"<p> Enter both first name and last name</p>";
	echo '<a href ="index.html"> Return to search page </a>';
}

?>

 <img src="find.jpg" alt="Italian Trulli" style="float:right;width:px;500 height:300px;">
</body>
</html>