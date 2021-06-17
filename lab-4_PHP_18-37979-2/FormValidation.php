<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$email=" ";
	$err_email="";
	$phone=" ";
	$err_phone="";
	$adress=""
	$err_adress="";
	$birth="";
	$err_birth="";
	$gender="";
	$err_gender="";
	$hearing=[];
	$err_hearing="";
	$bio="";
	$err_bio="";
	
	$hasError=false;
	
	
	
	function hearingExist($hearing){
		global $hearing;
		foreach($hearing as $hr){
			if($hr == $hearing){
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
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		
		else{
			$uname=htmlspecialchars($_POST["uname"]);
		}
		if(empty($_POST["password"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		
		else{
			$password=htmlspecialchars($_POST["pass"]);
		}
		if(empty($_POST["Email"])){
			$err_email="Email Required";
			$hasError = true;
		}
		
		else{
			$email=htmlspecialchars($_POST["email"]);
		}
		if(empty($_POST["Phone"])){
			$err_phone="Phone Required";
			$hasError = true;
		}
		else{
			$phone=htmlspecialchars($_POST["phone"]);
		}
		if(empty($_POST["adress"])){
			$err_adress="Adress Required";
			$hasError = true;
		}
		else{
			$address=htmlspecialchars($_POST["address"]);
		}
		if(empty($_POST["birth"])){
			$err_birth="Birth Required";
			$hasError = true;
		}
		
		else{
			$birth=htmlspecialchars($_POST["birth"]);
		}
		
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$hasError = true;
		}
		else{
			$gender =htmlspecialchars($_POST["gender"]);
		}
		if(!isset($_POST["hearing"])){
			$err_hearing="Hearing Required";
			$hasError = true;
		}
		else{
			$hearing =htmlspecialchars($_POST["hearing"]);
		}
		if(empty($_POST["bio"])){
			$err_bio="Bio Required";
			$hasError = true;
		}
		else{
			$bio =htmlspecialchars($_POST["bio"]);
		}
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["Email"]."<br>";
			echo $_POST["Phone"]."<br>";
			echo $_POST["Adress"]."<br>";
			echo $_POST["birth"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["bio"]."<br>";
			
			$arr = $_POST["hearing"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}
		}
		
		
	}
?>
<html>
	<head> <title> Club Member Registration</title>
	</head>
	 <body>
	
		<fieldset>
			<form action="" method="post">
				<table border="2" >
				 <tr>
				 <th colspan="1"> Club Member Registration</th>
				 </tr>
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" placeholder="Password"></td>
					</tr>
					<tr>
					     <td> Email: </td>
						 <td><input type="text" name="email" value="<?php echo $email;?> " placeholder="email"></td>
						 <td><span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
					<td> Phone : </td>
					<td> <input type ="text" name="phone" value="<?php echo $phone;?> " placeholder="phone"></td>
					<td><span><?php echo $err_phone;?></span></td>
					</tr>
					<tr>
					<td> Adress : </td>
					<td> <input type ="text" name="Adress" value="<?php echo $adress;?> " placeholder="address"></td>
					<td><span><?php echo $err_adress;?></span></td>
					</tr>
					<tr>
					<td> Date of birth : </td>
					<td> <input type ="text" name="Date of birth " value="<?php echo $birth;?> " placeholder="birth"></td>
					<td><span><?php echo $err_birth;?></span></td>
					</tr>
                    <tr>
						<td>Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
					</tr>
					
					<tr>
						<td>Where did you hear about us ? </td>
						<td>
							<input type="checkbox" value="A Friend or Colleague" <?php if(hearingExist("A Friend or Colleague")) echo "checked";?>  name="hobbies[]"> Movies
							<input type="checkbox" value="Google" <?php if(hearingExist("Google")) echo "checked";?> name="hobbies[]"> Music<br>
							<input type="checkbox" value="Blog Post" <?php if(hearingExist("Blog Post")) echo "checked";?> name="hobbies[]"> Sports
							<input type="checkbox" value="News Article" <?php if(hearingExist("News Article")) echo "checked";?> name="hobbies[]"> Games
						</td>
						<td><span><?php echo $err_hearing;?></span></td>
					</tr>
					<tr>
						<td>Bio:  </td>
						<td>
							<textarea name="bio"><?php echo $bio;?></textarea>
						</td>
						<td><span><?php echo $err_bio;?></span></td>
					</tr>
					<tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
	</body>
</html>