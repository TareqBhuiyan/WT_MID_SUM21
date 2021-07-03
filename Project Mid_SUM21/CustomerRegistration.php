<?php

$pictureErr = $nameErr = $cardnameErr = $cardtypeErr = $cardnoErr = $cvvnoErr = $addressErr = $emailErr = $passwordErr = $birthErr = $phoneErr = $nationalityErr ="";
$picture = $name = $cardname = $cardtype = $cardno = $cvvno= $address = $email= $password = $birth = $phone = $nationality ="";


$hasError=false;



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
	$hasError= true;
  }
  else {
    $name =($_POST["name"]);
  }
  if (empty($_POST["picture"])) {
    $pictureErr = "profile picture is required";
	$hasError= true;
  } 
  else {
    $picture = htmlspecialchars($_POST["picture"]);
  }
  if (empty($_POST["cardname"])) {
    $cardnameErrErr = "Card name is required";
	$hasError= true;
  } 
  else {
    $cardname = htmlspecialchars($_POST["cardname"]);
  }
   if (empty($_POST["cardtype"])) {
    $cardtypeErr = "Card Type is required";
	$hasError= true;
  } 
  else {
    $cardtype = htmlspecialchars($_POST["cardtype"]);
  }
  if (empty($_POST["cardno"])) {
    $cardnoErr = "Card number is required";
	$hasError= true;
  } 
  else {
    $cardno = htmlspecialchars($_POST["cardno"]);
  }
  if (empty($_POST["cvvno"])) {
    $cvvnoErr = "CVV serial is required";
	$hasError= true;
  } 
  else {
    $cvvno = htmlspecialchars($_POST["cvvno"]);
  }
if (empty($_POST["address"])) {
    $addressErrErr = "Address is required";
	$hasError= true;
  } 
  else {
    $address = htmlspecialchars($_POST["address"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
	$hasError= true;
  } else {
    $email = htmlspecialchars($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = " password is required ";
	$hasError= true;
  }
  else {
    $password = htmlspecialchars($_POST["password"]);
  }

  if (empty($_POST["birth"])) {
    $birthErr= " Birth date required ";
	$hasError= true;
  }
  else {
    $birth = htmlspecialchars($_POST["birth"]);
  }

  if (empty( $_POST["nationality"])) {
    $nationalityErr = "nationality is required";
	$hasError= true;
  }
  else {
    $nationality = htmlspecialchars($_POST["nationality"]);
	
  }
 if(!$hasError){
			echo $name."<br>";
			echo $_POST["picture"]."<br>";
			echo $_POST["cardname"]."<br>";
			echo $_POST["cardtype"]."<br>";
			echo $_POST["Email"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["birth"]."<br>";
			echo $_POST["cardno"]."<br>";
			echo $_POST["cvvno"]."<br>";
			echo $_POST["Phone"]."<br>";
			echo $_POST["nationality"]."<br>";
			
			$arr = $_POST["$name"];
			
			
			foreach($arr as $e){
				echo "$e <br>";
			}
		}
		
}
?>
	<html>
	<head>
		<title>
			Customer's Membership Registration Form
		</title>
	</head>
	
	<body align = "center">
		<h1>
			Customer's Membership Registration Form
		</h1>
		
		<form  method="post" action="<?php echo htmlspecialchars($_SERVER["REQUEST_METHOD"]);?>">
			<table align = "center">
			<tr>
					<td>
						Upload Your Profile Picture:
					</td>
					<td>
						<input type= "file" name= "picture" value="<?php echo $picture;?>">
					</td>
					<td><span><?php echo $pictureErr;?></span></td>
				</tr>
				<tr>
					<td>
						 Name:
					</td>
					
					<td>
						<input type= "text" placeholder= "Name" name= "name" value="<?php echo $name;?>">
					</td>
					<td><span><?php echo $nameErr;?></span></td>
				</tr>
				<tr>
				<td> Card's Name : </td>
				 <td><input type ="text" name="cardname"  value="<?php echo $cardname;?>" ></td> 
				 <td><span><?php echo $cardnameErr;?></span></td>
				 </tr>
				 <tr>
				 <td> Card Type:</td>
				 <td><select>
				 <option>VISA</option>
				 <option>PLATINUM</option>
				 <option> MASTER CARD</option>
				 <option>AMERICAN EXPRESS</option>
				 </select>
				 </td>
				 </tr>
				  <tr>
				  <td>CVV :</td>
					 <td><input type="text" name="cvvno" value="<?php echo $cvvno;?>"></td>
					 <td><span><?php echo $cvvnoErr;?></span></td>
					</tr>
					<tr>
					<td> Card No. : </td>
				    <td><input type="text" name="cardno" value="<?php echo $cardno;?>"></td>
                     <td><span><?php echo $cardnoErr;?></span></td>
					 </tr>
				  <tr>
					<td>
						 Address:
					</td>
					<td><input type="text" name="address" value="<?php echo $address;?> " placeholder="Address"></td>
						 <td><span><?php echo $addressErr;?></span></td>
					
					</tr>
				<tr>
					<td>
						  Email:
					</td>
					
						<td><input type="text" name="email" value="<?php echo $email;?>"></td>
						<td><span><?php echo $emailErr;?></span></td>
					
				</tr>
				<tr>
					<td>
					   Create Password:
					</td>
					
					<td>
						<input type= "text" placeholder= "Password" name= "password"></td>
						<td><span><?php echo $passwordErr;?></span></td>
				</tr>
				<tr>
					<td>
						Confirm Password:
					</td>
					
					<td>
						<input type= "text" placeholder= "Password" name= "password"></td>
						<td><span><?php echo $passwordErr;?></span></td>
				</tr>
				<tr> 
				<td> Date Of Birth : </td>
				<td> <input type ="Date" name="birth" value="<?php echo $birth;?> " placeholder="Date of birth"></td>
					<td><span><?php echo $birthErr;?></span></td>
				
				</tr>
				
				
							
				<tr>
					<td>
						 Phone:
					</td>
					
					<td><select><option>+880</option>
					<option>+441</option>
					<option>+012</option>
					<option>+440</option>
					<option>+511</option></select>
					<input type= "text" placeholder= "12345678" name= "phone" value="<?php echo $phone;?>">
					</td>
					<td><span><?php echo $phoneErr;?></span></td>
				</tr>
				
				<tr> 
				 <td> Nationality : </td>
				 <td>
				   <select>
				   <option> Bangladesh </option>
				   <option> Turkey      </option>
				   <option> Turkey      </option>
				   <option> U.S.America </option>
				   <option> England     </option>
				   <option> Germany     </option>
				   <option> Canada      </option>
				   </select>
				   <input type= "text" name= "nationality" value="<?php echo $nationality;?>">
					</td>
					<td><span><?php echo $nationalityErr;?></span></td>
				   
				   </td>
				   </tr>
				   
				 <tr>
					<td>
						Click here to submit -
					</td>
					
				     <td align="right" colspan="2"><input type="submit" value="Register"></td>
			      </tr> 
					
			</table>
		</form>
		<a href="index.html" class="previous">&laquo; Previous</a>
	</body>
</html>