<?php

$nameErr = "";
$name="";
$phoneErr = "";
$phone="";
$emailErr ="";
$email="";
$addressErr = "";
$address="";

$hasError=false;





if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = htmlspecialchars($_POST["name"]);
  }
    if (empty($_POST["phone"])) {
    $phoneErr = " Phone no. is required ";
  } else {
    $phone = htmlspecialchars($_POST["phone"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email =htmlspecialchars($_POST["email"]);
  }



  if (empty($_POST["address"])) {
    $addressErr = "Address is Required";
  } else {
    $address = htmlspecialchars($_POST["address"]);
  }
  if(!$hasError){
			echo $name."<br>";
			echo $_POST["Email"]."<br>";
			echo $_POST["Phone"]."<br>";
			echo $_post["address"]."<br>";
			
			
			
			$arr = $_POST["$name"];
			
			
			foreach($arr as $e){
				echo "$e <br>";
				
			}
   }
 	
}
?>

<html>
<head>
<title> Place your order here </title>
</head>

<body align= "center">

  <h1> Place Your Order Here 
  </h1>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["REQUEST_METHOD"]);?>">
	<table align= "center">
	<tr>
	<td> Full Name :</td>
	<td><input type="text" placeholder="Name " name="name" value="<?php echo $name;?>"></td>
    <td><span><?php echo $nameErr;?></span></td>
   </tr>
   <tr>
   <td> Phone No:
   </td>
   <td><select><option>+880</option>
   <option>+441</option>
   <option>+012</option>
   <option>+440</option>
   <option>+511</option></select>
   <input type= "text" placeholder= "12345678" name= "phone" value="<?php echo $phone;?>">
   </td><td><span><?php echo $phoneErr;?></span></td>
   
   </tr>
   <tr>
	<td> Email :</td>
	<td> <input type ="text" placeholder= "ex:myname@example.com " name = "Email" value="<?php echo $email;?>" ></td>
	<td><span><?php echo $emailErr;?></span></td>
	</tr>
	
	<tr>
    <td> Delivery Address:</td>
    <td><textarea type= "text" placeholder= "Address" name="Address" value="<?php echo $address; ?>"></textarea>
    </td>
	<td><span><?php echo $addressErr;?></span></td>
    </tr>
	
	<tr>
    <td> Click here to submit :
    </td>
                   
    <td>
    <input type= "submit" value="comfirm">
    </td>
	</tr>
	
	
	
	   
				

   </table>
   </form>
   </body>
  </html>
   