<?php

$nameErr = $fathernameErr =$mothernameErr = $addressErr = $emailErr = $passwordErr = $birthErr = $pictureErr = $nidErr = $photoErr = $phoneErr = $hobbiesErr =$genderErr= $nationalityErr = $religionErr = $bioErr= $departmentErr = "";
$name = $fathername = $mothername = $address= $email =$password = $birth = $picture = $nid = $photo = $hobbies = $gender = $nationality = $religion = $phone = $bio = $department= "";
$hasError=false;



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
	$hasError= true;
  } else {
    $name =($_POST["name"]);
  }
  if (empty($_POST["fathername"])) {
    $fathernameErr = "father name is required";
	$hasError= true;
  } else {
    $fathername = htmlspecialchars($_POST["fathername"]);
  }
  if (empty($_POST["mothername"])) {
    $mothernameErr = "mother name is required";
	$hasError= true;
  } else {
    $mothername = htmlspecialchars($_POST["mothername"]);
  }
   if (empty($_POST["address"])) {
    $addressErr = "address is required";
	$hasError= true;
  } else {
    $email = htmlspecialchars($_POST["address"]);
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

  if (empty ($_POST["picture"])) {
    $pictureErr = "Profile picture is required";
	$hasError= true;
  }
  else {
    $picture = htmlspecialchars($_POST["picture"]);
  }
  if (empty ( $_POST["nid"])) {
    $nidErr = "nid is required";
	$hasError= true;
  }
  else {
    $nid = htmlspecialchars($_POST["nid"]);
  }
  if (empty ($_POST["photo"])) {
    $photoErr = " NID photo is required";
	$hasError= true;
  }
  else {
    $photo = htmlspecialchars($_POST["photo"]);
  }
  if (empty ($_POST["phone"])) {
    $phoneErr = "phone is required";
	$hasError= true;
  } 
   else{
    $phone = htmlspecialchars($_POST["phone"]);
  }
  if (!isset( $_POST["hobbies"])) {
    $hobbiesErr = "hobby is required";
	$hasError= true;
  }
  else {
    $hobbies = htmlspecialchars($_POST["hobbies"]);
  }
  if (!isset($_POST["gender"])) {
    $genderErr = " gender is required";
	$hasError= true;
  }
  else {
    $gender = htmlspecialchars($_POST["gender"]);
  }
  if (empty( $_POST["nationality"])) {
    $nationalityErr = "nationality is required";
	$hasError= true;
  }
  else {
    $nationality = htmlspecialchars($_POST["nationality"]);
	
  }
  if (!isset ( $_POST["religion"])) {
    $religionErr = "religion is required";
	$hasError= true;
  }
  else {
    $religion = htmlspecialchars($_POST["religion"]);
  }
  if (empty ( $_POST["bio"])) {
    $bioErr = "Bio is required";
	$hasError= true;
  }
  else {
    $bio = htmlspecialchars($_POST["bio"]);
  }
  if (!isset($_POST["department"])) {
    $departmentErr = "departmentis required";
	$hasError= true;
  } 
   else {
    $department = htmlspecialchars($_POST["department"]);
  }
 if(!$hasError){
			echo $name."<br>";
			echo $_POST["fathername"]."<br>";
			echo $_POST["mothername"]."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["Email"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["birth"]."<br>";
			echo $_POST["picture"]."<br>";
			echo $_POST["nid"]."<br>";
			echo $_POST["photo"]."<br>";
			echo $_POST["Phone"]."<br>";
			echo $_POST["hobbies"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["nationality"]."<br>";
			echo $_POST["religion"]."<br>";
			echo $_POST["bio"]."<br>";
			echo $_POST["department"]."<br>";
			
			$arr = $_POST["name"];
			
			
			foreach($arr as $e){
				echo "$e <br>";
			}
		}
		
}
?>
<html>
	<head>
		<title>
			Change Employees Information
		</title>
	</head>
	
	<body align = "center">
		<h1>
			Change Employees Information
		</h1>
		
		
		<form  method="post" action="<?php echo htmlspecialchars($_SERVER["REQUEST_METHOD"]);?>">
			<table align = "center">
			<tr>
					<td>
						Upload Your Profile Picture:
					</td>
					
					<td><input type= "file" name= "picture" value ="<?php echo picture;?>"></td>
					<td><span><?php echo $pictureErr;?></span></td>
				</tr>
				<tr>
					<td>
						Employee Name:
					</td>
					
					<td>
						<input type="text" name="name" value="<?php echo $name;?>">
					</td>
					<td><span><?php echo $nameErr;?></span></td>
				</tr>
				<tr> 
				<td> Father's Name: </td>
				<td><input type="text" name="fathername" value="<?php echo $fathername;?>"></td>
				<td><span><?php echo $fathernameErr;?></span></td>
				</tr>
				<tr> 
				<td> Mother's Name: </td>
				<td><input type="text" name="mothername" value="<?php echo $mothername;?>"></td>
				<td><span><?php echo $mothernameErr;?></span></td>
				</tr>
				<tr>
					<td>
						 Address:
					</td>
					
					<td>
						<input type= "text" name= "address" value=" <?php echo $address;?>">
					</td>
					<td><span><?php echo $addressErr;?></span></td>
					</tr>
					</tr>
				<tr>
					<td>
						Employee Email:
					</td>
					
					<td>
						<input type="text" name="email" value="<?php echo $email;?>">
					</td>
					<td><span><?php echo $emailErr;?></span></td>
				</tr>
				<tr>
					<td>
					   Create Password:
					</td>
					
					<td>
						<input type= "text" name= "password" value="<?php echo $password;?>">
					</td>
					<td><span><?php echo $passwordErr;?></span></td>
				</tr>
				<tr>
					<td>
						Confirm Password:
					</td>
					
					<td>
						<input type= "text" name= "password" value="<?php echo $password;?>">
					</td>
					<td><span><?php echo $passwordErr;?></span></td>
				</tr>
				<tr> <td>Date Of Birth</td>
				<td> <input type= "Date" name= "birth" value="<?php echo $birth;?>"></td>
				<td><span><?php echo $birthErr;?></span></td>
				</tr>
				
				<tr>
					<td>
						Upload NID Photo:
					</td>
					
					<td>
						<input type= "file" name= "photo" value="<?php echo $photo;?>"></td>
                        <td><span><?php echo $photoErr;?></span></td>						
				</tr>
				<tr> <td> Write Your NID Serial: </td>
				<td><input type="text" name="nid"value="<?php echo $nid;?>"></td>
				<td><span><?php echo $nidErr;?></span></td>
				</tr>
				 
							
				<tr>
					<td>
						Employee Phone:
					</td>
					
					<td>
					<input type= "text"name= "phone" value="<?php echo $phone;?>"></td>
					<td><span><?php echo $phoneErr;?></span></td>
				</tr>
				<tr>
					<td>
						Hobbies:
					</td>
					<td>
					<input type="checkbox" name="hobbies" <?php if (isset($hobbies) && $hobbies=="Football") echo "checked";?>
                     value="Football">Football
                    <input type="checkbox" name="hobbies" <?php if (isset($hobbies) && $hobbies="Basketball") echo "checked";?>
                     value="Basketball">Basketball
					<input type="checkbox" name="hobbies" <?php if (isset($hobbies) && $hobbies="Cricket") echo "checked";?>
                     value="Cricket">Cricket 
					</td>
					<td><span><?php echo $hobbiesErr;?></span></td>
	
				</tr>
				
				<tr>
                     <td>Gender:</td>
                     <td><input type="radio" name="gender"
                     <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
					 
                     <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>
                     value="male">Male
					 <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
					 </td>
					 <td><span><?php echo $genderErr;?></span></td>
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
				   </select 
				  <input type= "option" name= "nationality" value="<?php echo $nationality;?>">
				  </td>
				  <td><span><?php echo $nationalityErr;?></span></td>
				   </tr>
				   <tr>
					<td> Religion : </td>
                    <td> 
                     <input type="checkbox"  name="Religion" <?php if (isset($Religion) && $Religion=="Islam") echo "checked";?>
                     value="Islam">Islam
                     <input type="checkbox"  name="Religion" <?php if (isset($Religion) && $Religion=="Christian") echo "checked";?>
                     value="Christian">Christian
                     <input type="checkbox"  name="Religion" <?php if (isset($Religion) && $Religion=="Jews") echo "checked";?>
                     value="Jews">Jews<br>
                     <input type="checkbox"  name="Religion" <?php if (isset($Religion) && $Religion=="Buddha") echo "checked";?>
                     value="Buddha">Buddha
                     <input type="checkbox"  name="Religion" <?php if (isset($Religion) && $Religion=="Hindu") echo "checked";?>
                     value="Hindu" >Hindu
                   </td>
				   <td><span><?php echo $religionErr;?></span></td>
                 </tr>
				<tr>
				 <td> About Yourself: </td>
				 <td><textarea type= "text" name="bio" rows="5" cols="40"></textarea><br><br>
				 </td>
				 <td><span><?php echo $bioErr;?></span></td>
				 </tr>
				<tr>
					<td>Department:  </td>
                    <td> 
                     <input type="checkbox" name="department" <?php if (isset($department) && $department=="Sales") echo "checked";?>
                     value="Sales">Sales
                     <input type="checkbox"name="department" <?php if (isset($department) && $department=="Logistics") echo "checked";?>
                     value="Logistics">Logistics
                     <input type="checkbox" name="department" <?php if (isset($department) && $department=="Manager") echo "checked";?>
                     value="Manager">Manager<br>
                     <input type="checkbox" name="department" <?php if (isset($department) && $department=="Store") echo "checked";?>
                     value="Store">Store
                     <input type="checkbox"name="department" <?php if (isset($department) && $department=="Marketing") echo "checked";?>
                     value="Marketing">Marketing
                     <input type="checkbox" name="department" <?php if (isset($department) && $department=="Product Analyst") echo "checked";?>
                     value="Product Analyst">Product Analyst
                   </td>
				   <td><span><?php echo $departmentErr;?></span></td>
                 </tr>

				 <tr>
					<td>
						Click here to submit -
					</td>
					<td align="right" colspan="2"><input type="submit" value="Save"></td>
				    
				</tr>
				
     		</table>
		</form>
		<a href="index.html" class="previous">&laquo; Previous</a>
		
	</body>
</html>