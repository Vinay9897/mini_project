<?php
$connection=mysqli_connect('localhost','root','','project');
if(!$connection){
	echo "Connection failed";

}
if (isset($_POST['signup'])) {
	// code...


$pass=$_POST['pass'];
// $confirm_password =$_POST['confirm_password'];
// if($pass==$confirm_password){
	$password =$pass;
    $name=$_POST['user'];
    $email=$_POST['email'];
    // $mob_number=$_POST['mob_number'];

$insert_query="INSERT INTO registration(`NAME`,`EMAIL`,`PASSWORD`) VALUES('$name','$email','$password')";
if (mysqli_query($connection,$insert_query)){
	// code...?>
	<script>
		alert("registration successfully");
	</script>
    <script>location.href='login.html'</script>
<?php
    //echo "insert data";

    //header('location:./signin.html');
}
 else{
 	?> 	<script>
 	alert("Data Not Inserted Properly");
	  	</script>
    //Data Not Inserted Properly
<?php
}
}
?>
