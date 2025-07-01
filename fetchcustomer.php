<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['submit']))
{
    $cname =$_POST['customerName'];
    $cemail =$_POST['customerEmail'];
    $cphone =$_POST['customerPhone'];
    $caddress =$_POST['customerAddress'];
    $cinfo =$_POST['customerInformation'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "u745359346_quotation_OCT";
    $conn=mysqli_connect($servername,$username,$password);
    if(!$conn)
    {
      echo "Connection failed:".mysqli_connect_error();
    }
    mysqli_select_db($conn,$dbname);
    // echo "1";
    $cus="SELECT * from customer where cemail='$cemail'";
    $r=mysqli_query($conn,$cus);
    $cou=mysqli_num_rows($r);
    if($cou>0)
    {
        // echo "2";
        echo '<script>window.alert("Email already exists");window.location.href="register_customer.php";</script>';
    }
    else
    {
        // echo "3";
        $ine="INSERT INTO customer(cname,cemail,cphone,caddress,cinfo) values('$cname','$cemail','$cphone','$caddress','$cinfo')";
        $res=mysqli_query($conn,$ine);
        if($res>0)
        {
            echo '<script>window.alert("Cusomter registered");window.location.href="register_customer.php";</script>';
        }
        else
        {
            echo "not registered".mysqli_error($conn);
        }
    }
}
else
{
    // echo "4";
    echo '<script>window.alert("Invalid request");window.location.href="register_customer.php";</script>';
}
?>