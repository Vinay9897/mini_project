<?php
$name = $_POST['users'];
$pwd = $_POST['password'];
//echo "$name and $pwd";
//echo "hello";
$connection=mysqli_connect('localhost','root','','project');
if (!$connection){
    echo "<script>alert('data base not connected')</script>";
}
if (isset($_POST['signin'])) {
    //echo "hello";
        $read_query = "SELECT * from registration";
        $data = mysqli_query($connection, $read_query);
        if (mysqli_num_rows($data) > 0) {
            while ($row = mysqli_fetch_array($data)) {
                if ($row['EMAIL'] == $name && $row['PASSWORD'] == $pwd) {
                    //$_SESSION['username']=$row['EMAIL'];

                    //echo "welcome to home";

                    //echo "<script>location.href='patient.html'</script>";
                    header("location:index.html");
                } 
                else {
                    //echo "Wrong data match";
                    //header("location:signin.html");
                    echo "<script>alert('You entered Wrong user id or Password')</script>";
                    echo "<script>location.href='login.html'</script>";
                    //echo "raja";


                }
                //echo "ghanshyam";
            }

        }
        }
        else{
            echo "galat";
            //echo "<script>alert("not connection database")</script>";
        }
?>

