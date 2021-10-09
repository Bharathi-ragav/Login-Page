<?php



if(!isset($_POST['sign_in']))
{
 $id = $_POST['user'] ;

 $pass = $_POST['password'];

$con = mysqli_connect("localhost:3306","root","","profile");

 $sql = "SELECT * FROM userdetail WHERE EmailId='$id' AND Password='$pass'";

 $res = mysqli_query($con,$sql);

 $check = mysqli_num_rows($res);

 if($check>0){
echo "Login Successful";
}
else{
echo "Invalid Input";
}


}




?>