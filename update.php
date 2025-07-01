<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "u745359346_quotation_OCT";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $cid=1;
        $qid=1;

        $ine="UPDATE quotation SET cid='$cid' WHERE qid='$qid'";

        $res=mysqli_query($conn,$ine);
        if($res>0)
        {
            echo '<script>window.alert("quotation updated");window.location.href="quotationdetails.php";</script>';
        }
        else
        {
            echo "not updated".mysqli_error($conn);
        }

        $conn->close();


?>