<?php
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
$sql="SELECT * from customer";
$result=mysqli_query($conn,$sql);
$ress=mysqli_num_rows($result);

if($ress>0)
{
while($row=mysqli_fetch_assoc($result))
{
    echo $row['cid'];
    echo $row['cname'];
    echo $row['cphone'];
    echo $row['caddress'];
    echo $row['cemail'];
    echo $row['cinfo'];

 } 
} 

$sql1="SELECT * from product";
$result=mysqli_query($conn,$sql1);
$ress=mysqli_num_rows($result);

if($ress>0)
{
while($row=mysqli_fetch_assoc($result))
{
    echo $row['pid'];
    echo $row['pname'];
    echo $row['price'];
    echo $row['sgst'];
    echo $row['cgst'];
    

 } 
} 

?>