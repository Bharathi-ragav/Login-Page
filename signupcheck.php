<?php

if (!isset($_POST['sign_up']))
{

$first = $_POST['first_name'];

$last = $_POST['last_name'];

$email = $_POST['email_id'];

$dob = $_POST['dob'];

$gender = $_POST['gender'];

$password = $_POST['password'];

$con_passwrd = $_POST['con_password'];

$phone = $_POST['phone_no'];

if($password=$con_passwrd){

$con = mysqli_connect("localhost","root","","profile");

$sql = "INSERT INTO userdetail(FirstName,LastName,EmailId,Gender,DOB,Password,Phone)VALUES('$first','$last','$email','$gender','$dob','$password','$phone')";

$res = mysqli_query($con,$sql);

if($res>0){
echo "Successfully Submitted";
}
else{
echo "UnSuccessful";
}

}

else{
echo "Password Mismatch";
}



}


?>