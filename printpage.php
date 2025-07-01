<?php
session_start();
$us=$_SESSION['id'];
if($us == true)
{

}
else
{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Portal</title>
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
        @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap");

        * {
            padding: 0;
            margin: 0;
        }

        body {
            font-family: "nunito", sans-serif;
            margin: 5px;

            padding: 0;
        }

        #brand-section {
            background-color: #0b17a0;
            padding: 10px 20px;
            color: #fff;
        }

        .logo {
            max-width: 100%;
            height: auto;
            background-color: #dee2e6;
            border-radius: 20px;
        }

        .company-details {
            text-align: right;
            color: #fff;
        }

        .body-section {
            padding: 16px;
            border: 1px solid gray;
            margin-top: 20px;
        }

        .heading {
            font-size: 20px;
            margin-bottom: 8px;
        }

        .sub-heading {
            color: #262626;
            margin-bottom: 5px;
        }

        table {
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table thead tr {
            border: 1px solid #111;
            background-color: #f2f2f2;
        }

        table td {
            vertical-align: middle !important;
            text-align: center;
        }

        table th {
            vertical-align: middle !important;
            text-align: center;
        }

        table th,
        table td {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .table-bordered {
            box-shadow: 0px 0px 5px 0.5px gray;
        }

        .text-right {
            text-align: end;
        }

        .w-20 {
            width: 20%;
        }

        #downloadBtn {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .footer-section {
            margin-top: 20px;
            text-align: center;
            color: #777;
        }

        p {}

        #headrow {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-left: -100px;
        }

        #headcol {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .watermarked-text {
            position: relative;
            overflow: hidden;
        }
        .container{
            position: relative;
        }

        .bill-container {
      position: relative;
      width: 100%;
      max-width: 794px; /* A4 width in pixels */
      margin: 20px auto;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .watermark {
      position: absolute;
      display: flex;
      margin-left:300px;
      margin-top:350px;
      gap:100px;
      align-items:center;
      transform: translate(-50%, -50%) rotate(-45deg);
      font-size: 34px;
      font-weight: bold;
      color: rgba(0, 0, 0, 0.1);
      pointer-events: none;
    }
    .watermark p{
      text-align:center;
      padding:50px;
      opacity: 0.7;
    }
        @media print {
          body{
            display:flex;
            align-items:center;
            justify-content:center;
          }
            #downloadBtn {
                display: none;
            }
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    
    <div class="container" id="print_area">
    <div class="bill-container">
    <div class="watermark">
      <div class="odd">
      <p>Test</p>
    <p> Test</p>
    <p>Test</p>
    <p>Test </p>
    <p>Test</p>
      </div>
      <div class="center">
      <p>Test</p>
    <p> Test</p>
    <p>Test</p>
    <p>Test </p>
    <p>Test</p>
    <p>Test</p>
    <p>Test</p>
      </div>
      <div class="right"><p>Test</p>
    <p>Test </p>
    <p>Test </p>
    <p>Test </p>
    <p>Test
    <p>Test </p>
    <p>Test</p></div>
    <div class="left"><p>Test</p>
    <p>Test </p>
    <p>Test </p>
    <p>Test </p>
    <p>Test </p>
    <p>Test </p>
    <p>Test</p></div>  
    
  </div>
  </div>
        <div id="brand-section">
            <div class="row" id="headcol">
                <div class="col-6" id="headrow">
                    <img src="https://static.wixstatic.com/media/8b8f2d_46f5f8aaf3ad4e93b98f0e8a390e19e8~mv2.png/v1/fill/w_117,h_117,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Overlay%20Dark%20shadowed%20compressed.png"
                        alt="calanjiyam Logo" class="logo">
                    <h1>Calanjiyam</h1>
                </div>
                <div class="col-6 company-details">
                    <p>admin@calanjiyam.com</p>
                    <p>+918667280728</p>
                </div>
            </div>
        </div>
        <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "u745359346_quotation_OCT";
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_select_db($conn, $dbname);

    $getqid = $_GET["qid"];

    // Fetch data from the quotation table
    $quotationSql = "SELECT * FROM quotation WHERE qid='$getqid'";
    $quotationResult = $conn->query($quotationSql);

    if (!$quotationResult) {
        die("Quotation query failed: " . $conn->error);
    }

    if ($quotationRow = $quotationResult->fetch_assoc()) {
        // Fetch customer information
        $customerSql = "SELECT * FROM customer WHERE cid='{$quotationRow['cid']}'";
        $customerResult = $conn->query($customerSql);

        if (!$customerResult) {
            die("Customer query failed: " . $conn->error);
        }

        if ($customerRow = $customerResult->fetch_assoc()) {
            // Fetch product information based on multiple product IDs
            $productIds = array('p1', 'p2', 'p3', 'p4', 'p5');
            $products = array();

            foreach ($productIds as $productId) {
                $productSql = "SELECT * FROM product WHERE pid='{$quotationRow[$productId]}'";
                $productResult = $conn->query($productSql);

                if (!$productResult) {
                    die("Product query failed: " . $conn->error);
                }

                if ($productRow = $productResult->fetch_assoc()) {
                    $products[] = $productRow;
                } else {
                    echo "<script>alert('Product not found for $productId');</script>";
                }
            }
    ?>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Qid: <span id="invoiceNo">
                      <b><?php echo $quotationRow['qid']; ?></b></span></h2>
                    <p class="sub-heading">Email Address: <span id="emailAddress"><b>
                                <?php echo $customerRow['cemail']; ?>
                            </b></span></p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Customer Name: <span id="fullName"><b>
                                <?php echo $customerRow['cname']; ?>
                            </b></span></p>
                    <p class="sub-heading">Address: <span id="address"><b>
                                <?php echo $customerRow['caddress']; ?>
                            </b></span></p>
                    <p class="sub-heading">Phone Number: <span id="phoneNumber"><b>
                                <?php echo $customerRow['cphone']; ?>
                            </b></span></p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th colspan="2" class="w-20">Price</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        foreach ($products as $productRow) {
                    ?>
                    <tr>
                        <td id="productName">
                            <?php echo $productRow['pid']; ?>
                        </td>
                        <td id="productName">
                            <?php echo $productRow['pname']; ?>
                        </td>
                        <td colspan="2" id="productPrice">
                            <?php echo $productRow['price']; ?>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>

                    <tr>
                        <td colspan="3" class="text-right">Sub Total</td>
                        <td id="subTotal">
                            <?php echo $quotationRow['total']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Tax Total </td>
                        <td id="taxTotal">
                            <?php echo $tax=$quotationRow['total']*0.36; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td id="grandTotal">
                            <?php echo $quotationRow['total']+ $tax; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <button id="downloadBtn" onclick="printpage()">View Bill</button>
        </div>

        <?php
        } else {
            echo "<script>alert('Customer not found');</script>";
        }
    } else {
        echo "<script>alert('Quotation not found');</script>";
    }

    // ...
 ?>
        <div class="body-section footer-section">
            <p>&copy; Copyright 2023 - Calanjiyam. All rights reserved.
                <a href="https://www.calanjiyam.com/" class="float-right">www.calanjiyam.com</a>
            </p>
        </div>
    </div>
    </div>
</div>
</div>
    </div>
    <script>
        function printpage() {
          window.print();

          
        }

    </script>
</body>

</html>