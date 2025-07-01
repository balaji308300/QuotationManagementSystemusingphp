
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        $products = $_POST["product"];
        $customer = $_POST["product1"];

        $qname = $_POST['quotationName'];
        $qdes = $_POST['quotationDesc'];
        $taxable = "0.20";
        $gst = "0.18";

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "u745359346_quotation_OCT";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $productIDs = [];
        $count = 1;
            foreach ($products as $product) {
                $productName = $conn->real_escape_string($product);
                $productIDs["p{$count}id"] = $productName;
                $count++;
                if ($count > 5) {
                    break;
                }
            }
            $P1=$productIDs['p1id'];
            $P2=$productIDs['p2id'];
            $P3=$productIDs['p3id'];
            $P4=$productIDs['p4id'];
            $P5=$productIDs['p5id'];
    

            $totalValue = 0;

        foreach ($productIDs as $key => $productID) {
            $sql = "SELECT price FROM product WHERE pid = '$productID'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            if ($row) {
                $productValue = $row['price'];
                $totalValue += $productValue;
            } else {
                echo "Product $key not found <br>";
            }
        } 
        }
        $ine="INSERT INTO quotation(qname,qdes,cid,p1,p2,p3,p4,p5,taxable,gst,total) values('$qname','$qdes','$customer','$P1','$P2','$P3','$P4','$P5','$taxable','$gst','$totalValue')";

        $res=mysqli_query($conn,$ine);
        if($res>0)
        {
            echo '<script>window.alert("quotation submited");
            window.location.href="quotationdetails.php";</script>';
        }
        else
        {
            echo "not submitted".mysqli_error($conn);
        }

        $conn->close();
    }

?>
