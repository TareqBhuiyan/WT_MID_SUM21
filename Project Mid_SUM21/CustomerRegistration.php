<?php
    $pic="";
	$err_pic="";
	$name="";
	$err_name="";
	$cardname="";
	$err_cardname="";
	$cardno="";
	$err_cardno="";
	$address=""
	$cvvno="";
	$err_cvvno="";
	$err_address="";
	$cpass="";
	$err_cpass="";
	$conpass="";
	$err_conpass="";
	$birth="";
	$err_birth="";
	$phone="";
	$err_phone="";
	$nationality="";
	$err_nationality="";
	
	$hasError=false;
	
	function Customer($customer){
		global $;
		foreach($customer as $csm){
			if($csm == $customer){
				return true;
			}
		}
		return false;
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=2){
			$err_name="Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
		if(empty($_POST["cardname"])){
			$err_cardname="Cardname Required";
			$hasError = true;
		}
		
		else{
			$cardname=htmlspecialchars($_POST["cardname"]);
		}
		if(empty($_POST["cardno"])){
			$err_cardno="Number Required";
			$hasError = true;
		}
		else{
			$cardno=htmlspecialchars($_POST["cardno"]);
		}
		if(empty($_POST["cvvno"])){
			$err_cvvno="CVVno Required";
			$hasError = true;
		}
		
		else{
			$cvvno=htmlspecialchars($_POST["cvvno"]);
		}
		
		if(empty($_POST["address"])){
			$err_address="Adress Required";
			$hasError = true;
		}
		else{
			$address=htmlspecialchars($_POST["address"]);
		}
		if(empty($_POST["Email"])){
			$err_eemail="Email Required";
			$hasError = true;
		}
		
		else{
			$eemail=htmlspecialchars($_POST["email"]);
		}
		
		if(empty($_POST["cpass"])){
			$err_cpass="Password Required";
			$hasError = true;
		}
		
		else{
			$cpass=htmlspecialchars($_POST["pass"]);
		}
		if(empty($_POST["password"])){
			$err_conpass="Password Required";
			$hasError = true;
		}
		
		else{
			$conpass=htmlspecialchars($_POST["pass"]);
		}
		
		
		if(empty($_POST["birth"])){
			$err_birth="Birth Required";
			$hasError = true;
		}
		
		else{
			$birth=htmlspecialchars($_POST["birth"]);
		}
		if(empty($_POST["npic"])){
			$err_npic="Password Required";
			$hasError = true;
		}
		
		
		else{
			$phone=htmlspecialchars($_POST["phone"]);
		}
		
		if(!isset($_POST["nationality"])){
			$err_nationality="Merital status Required";
			$hasError = true;
		}
		else{
			$nationality =htmlspecialchars($_POST["nationality"]);
		}
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["pic"]."<br>";
			echo $_POST["name"]."<br>";
			echo $_POST["cardname"]."<br>";
			echo $_POST["cardno"]."<br>";
			echo $_POST["cvvno"]."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["Email"]."<br>";
			echo $_POST["cpass"]."<br>";
			echo $_POST["conpass"]."<br>";
			echo $_POST["birth"]."<br>";
			echo $_POST["Phone"]."<br>";
			echo $_POST["nationality"]."<br>";
			echo $_POST["religion"]."<br>";
			
			$arr = $_POST[" "];
			
			foreach($arr as $e){
				echo "$e <br>";
			}
		}
		
		
	}
?>
	
	
	
	
	
<html>
	<head>
		<title>
			Customer Registration Form
		</title>
	</head>
	
	<body align = "center">
		<h1>
			Customer Registration Form
		</h1>
		
		<form>
			<table align = "center">
			<tr>
					<td>
						Upload Your Profile Picture:
					</td>
					<td>
						<input type= "file" name= "pic" value="<?php echo $pic;?>">
					</td>
					<td><span><?php echo $err_pic;?></span></td>
				</tr>
				<tr>
					<td>
						 Name:
					</td>
					
					<td>
						<input type= "text" placeholder= "Name" name= "uname" value="<?php echo $name;?>">
					</td>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr> <td> Card's Name : </td>
				 <td><input type ="text" placeholder="holders name" name="cname"  value="<?php echo $cname;?>" ></td> 
				 <td><span><?php echo $err_name;?></span></td>
				 <td> Card Type:</td>
				 <td><select><option>VISA</option>
				 <option>PLATINUM</option>
				 <option> MASTER CARD</option>
				 <option>AMERICAN EXPRESS</option>
				 </select></td> 
				 </tr>
				  <tr><td> Card No. </td>
				    <td><input type="text" placeholder="card number" name="cardno." value="<?php echo $cardno;?>"></td>
                      <td><span><?php echo $err_cardno;?></span></td>
					<td>CVV </td><td><input type="text" placeholder="number" name="cvvno." value="<?php echo $cvvno;?>"></td>
					 <td><span><?php echo $err_cvvno;?></span></td>
					</tr>
				  <tr>
					<td>
						 Address:
					</td>
					<td><input type="text" name="email" value="<?php echo $address;?> " placeholder="Email"></td>
						 <td><span><?php echo $err_address;?></span></td>
					
					</tr>
				<tr>
					<td>
						  Email:
					</td>
					
					<td>
						<td><input type="text" name="email" value="<?php echo $email;?> " placeholder="Email"></td>
						 <td><span><?php echo $err_email;?></span></td>
					</td>
				</tr>
				<tr>
					<td>
					   Create Password:
					</td>
					
					<td>
						<input type= "text" placeholder= "Password" name= "password">
					</td>
				</tr>
				<tr>
					<td>
						Confirm Password:
					</td>
					
					<td>
						<input type= "text" placeholder= "Password" name= "password">
					</td>
				</tr>
				<tr> 
				<td> Date Of Birth : </td>
				<td> <input type ="text" name="birth" value="<?php echo $birth;?> " placeholder="birth"></td>
					<td><span><?php echo $err_birth;?></span></td>
				
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
					<td><span><?php echo $err_phone;?></span></td>
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
				   </td>
				   </tr>
				   
				 <tr>
					<td>
						Click here to submit -
					</td>
					
				     <td>
						<input type= "submit" value="Confirm">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>