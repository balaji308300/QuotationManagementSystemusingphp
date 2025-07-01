<?php

        session_start();
if(isset($_POST['submit']))
{
$uemail =$_POST['email'];
$pass =$_POST['passkey'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u745359346_quotation_OCT";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
  die("Connection failed:".mysqli_connect_error());
}
mysqli_select_db($conn,$dbname);
$sql = "SELECT * FROM admin WHERE email = '$uemail'";
$result = $conn->query($sql);
if($row = $result -> fetch_assoc())
{
    $passRef = $row['passkey'];
    if ($pass == $passRef)
    {

        $_SESSION['id']=$uemail;
        echo '<script>alert("Welcome!");window.location.href="generatebill.php"</script>';
    }
    else
    {
        echo '<script>alert("Invalid Password");window.location.href="login.php"</script>';
    }
}
else
{
    echo '<script>alert("Invalid Email-id");window.location.href="login.php"</script>';
}
}
?>