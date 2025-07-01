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
    $cid=$_POST['cid'];
    $cstatus=$_POST['cstatus'];

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
    $cus="SELECT * from customer where $cid='$cid'";
    $r=mysqli_query($conn,$cus);
    $cou=mysqli_num_rows($r);
    if($cou>0)
    {
         $ine="UPDATE customer SET cname='$cname',cphone='$cphone',caddress='$caddress',cinfo='$cinfo',cstatus='$cstatus' WHERE cid='$cid'";

        $res=mysqli_query($conn,$ine);
        if($res>0)
        {
            echo '<script>window.alert("customer updated");window.location.href="viewcustomer.php";</script>';
        }
        else
        {
            echo "not updated".mysqli_error($conn);
        }   
    }
        else{

        echo '<script>window.alert("invalid");window.location.href="editcustomer.php";</script>';
    }
    
}
?>