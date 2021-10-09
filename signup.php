<html>
<head>
<title>Sign_Up Page</title>

<link rel="stylesheet" href="styleforsignup.css"/>

</head>
<body>

<center><h3>Welcome</h3></center>
<br><br>


<center>

<form method="POST" action="signupcheck.php">

<center><h1>Sign Up</h1></center>
  <br>
<label id="f_name">First Name </label>
    
<input type="text" name="first_name">
<br><br>
<label id="l_name" >Last Name </label>
<input type="text" name="last_name">
<br><br>
<label id="email">Email Id </label>
<input type="text" name="email_id">
<br><br>
<label id="dob">Date Of Birth</label>
<input type="date" name="dob">
<br><br>
<label id="gender">Gender</label>

<select name="gender">

<option value="NA">Select</option>
<option value="male">Male</option>
<option value="Female" >Female</option>
<option value="Not_to_prefer" >Not to Prefer</option>

</select>

<br><br>
<label id="pass">New Password</label>
<input type="password" name="password">
<br><br>
<label id="con_pass">Confirm Password</label>
<input type="password" name="con_password">
<br><br>
<label id="phone">Phone No.</label>
<input type="text" name="phone_no">
<br><br>
<input id="sub" type="submit" name="submit" value="sign_up">
  
</form>

</center>

</body>
</html>