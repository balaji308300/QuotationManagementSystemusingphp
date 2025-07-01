<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['submit']))
{
      $pname =$_POST['productName'];
    $price =$_POST['price'];
    $cgst="0.18";
    $sgst="0.18";
    $pid=$_POST['pid'];
    $pstatus=$_POST['pstatus'];

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
    $cus="SELECT * from product where pid='$pid'";
    $r=mysqli_query($conn,$cus);
    $cou=mysqli_num_rows($r);
    if($cou>0)
    {
         $ine="UPDATE product SET pname='$pname',price='$price',cgst='$cgst',sgst='$sgst',pstatus='$pstatus' WHERE pid='$pid'";

        $res=mysqli_query($conn,$ine);
        if($res>0)
        {
            echo '<script>window.alert("product updated");window.location.href="viewproduct.php";</script>';
        }
        else
        {
            echo "not updated".mysqli_error($conn);
        }   
    }
        else{

        echo '<script>window.alert("product not updated");window.location.href="editproduct.php";</script>';
    }
    
}
?>
