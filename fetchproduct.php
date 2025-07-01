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
    $cus="SELECT * from product where pname='$pname'";
    $r=mysqli_query($conn,$cus);
    $cou=mysqli_num_rows($r);
    if($cou>0)
    {
        echo '<script>window.alert("product already exists");window.location.href="generate_product.php";</script>';
    }
    else
    {
        $ine="INSERT INTO product(pname,price,cgst,sgst) values('$pname','$price','$cgst','$sgst')";
        $res=mysqli_query($conn,$ine);
        if($res>0)
        {
            echo '<script>window.alert("product added");window.location.href="generate_product.php";</script>';
        }
        else
        {
            echo "not added".mysqli_error($conn);
        }
    }
}
else
{
    echo '<script>window.alert("Invalid request");window.location.href="generate_product.php";</script>';
}
?>