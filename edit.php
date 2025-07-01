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
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Quotation</title>
    <link rel="icon" href="https://certificates.crisscrosstamizh.in/AUG/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

        * {
            padding: 0;
            margin: 0;
        }

        body {
            margin: 0px;
            background-color: #ebeef2;
            font-family: 'nunito', sans-serif;
            min-height: 200px;
            overflow-y: auto;
            display: grid;

        }


        .active {
            color: #116be9;
        }

        #list-item {
            background: transparent;
            border: none;
            cursor: pointer;
        }

        nav {
            position: fixed;
            height: 120%;
            left: 0;
            top: 20px;
            bottom: 40px;
            margin: auto 0;
            background-color: #fefefe;
            padding: 10px 20px;
            margin-top: -20px;
            z-index: 1;
            box-shadow: 0px 0px 7px 3px lightgray;
        }

        nav ul {
            list-style: none;
            display: flex;
            row-gap: 28px;
            margin-top: 7px;
            align-items: center;
            flex-flow: column;
            height: 100%;

        }

        nav ul li {
            width: 100%;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
        }

        nav ul li i {
            font-size: 22px;
        }

        nav ul li a {
            text-decoration: none;
            color: #1a2238;
            display: flex;
            align-items: center;
            cursor: pointer;
            width: 100%;
            transition: 0.2s all ease;
            padding: 0px 0;
        }

        nav ul li a svg {
            width: 30px;
            height: 30px;
            margin-right: 5px;
        }

        nav ul li a svg path {
            transition: 0.2s all ease;
        }

        nav ul li a span {
            position: absolute;
            background-color: #fefefe;
            padding: 2px 15px;
            border-radius: 30px;
            margin-left: 10px;
            font-weight: 500;
            font-size: 15px;
            visibility: hidden;
            opacity: 0;
            transition: 0.2s all ease;
        }

        nav ul li a.active,
        nav ul li a:hover {
            background-color: #edf5fc;
            color: #116be9;
            border-radius: 10px;
        }

        nav ul li a.active span,
        nav ul li a:hover span {
            opacity: 1;
            visibility: visible;
            margin-left: 50px;
        }

        nav.active ul li a span {
            position: relative;
            opacity: 1;
            visibility: visible;
            margin-left: 0;
        }

        nav.active ul li a:hover span {
            margin-left: 0;
        }

        #main_area {
            display: block;
            margin: 0px;
            margin-left: 20px;
            overflow-y: auto;
        }

        #logo {
            display: inline-block;
            width: 60px;
            margin-left: 70px;
            vertical-align: top;
        }

        #main_area h1 {
            display: inline-block;
            font-family: 'josefin sans', sans-serif;
            font-size: 20px;
            font-weight: 400;
            margin-top: 2px;
            line-height: 1.5;
        }



        .generate {
            width: 55%;
            height: auto;
            margin: 15px auto;
            border-radius: 20px;
            background-color: white;
            justify-content: center;
            align-items: center;
            display: flex;
            padding: 15px;
        }

        .header {
            display: flex;
            gap: 10px;
        }
        form
        {
            display:block;
            width:90%;
            margin:auto;
        }
        .title_row
        {
            display:grid;
            width:100%;
            line-height:2;
            margin:auto;
            grid-template-columns:50% 50%;
        }
        .title_row a
        {
            display:block;
            width:200px;
            height:40px;
            text-decoration:none;
            text-align:center;
            font-size:18px;
            color:#0325BD;
            border:2px solid #0325BD;
            border-radius:10px;
            background-color:transparent;
            
        }
        .title_row a:hover
        {
            background-color:#0325BD;
            color:white;
        }
    </style>

</head>

<body data-new-gr-c-s-check-loaded="14.1135.0" data-gr-ext-installed="">
    <nav id="menuBar">
        <ul>
            <li>
                <a href="generatebill.php"><i class="bi bi-receipt"></i><span>Generate Quotation</span></a>
            </li>
            <li>
                <a href="quotationdetails.php"><i class="bi bi-files"></i><span>Quotation Details</span></a>
            </li>
            <li>
                <a href="login.php"><i class="bi bi-power"></i><span>Logout</span></a>
            </li>
        </ul>
    </nav>

    <div id="main_area">
        <div id="topbar" style="margin-top:10px">
            <div id="header">
                <img src="https://static.wixstatic.com/media/8b8f2d_46f5f8aaf3ad4e93b98f0e8a390e19e8~mv2.png/v1/fill/w_117,h_117,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Overlay%20Dark%20shadowed%20compressed.png"
                    id="logo" style="border-radius:10px;">
                <h1>Calanjiyam Quotation Portal<br>Edit Quotation</h1>
            </div>
        </div>
        
        <div class="generate">
            <form action="editquotation.php" method="post">
                <div class="title_row">
                   
                    <h4 class="text-center mb-5 mt-2">Customer Details</h4>
                    
                </div>
                <select class="form-control" name="product1" id="product1">
                    
                    <?php
                    $qid = $_GET['qid'];
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "u745359346_quotation_OCT";

                    session_start();
    

                    $conn=mysqli_connect($servername,$username,$password);
                    if(!$conn)
                    {
                      echo "Connection failed:".mysqli_connect_error();
                    }

                    mysqli_select_db($conn,$dbname);
                    $sql="SELECT cid FROM quotation where qid='$qid'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc())
                    {
                        $cid = $row['cid'];

                        $sql="SELECT cid,cname FROM customer where cid='$cid'";
                    $result = $conn->query($sql);            
                    while($row = $result->fetch_assoc())
                   {
                        echo "<option value='".$row['cid']."'>".$row['cname']."</option>";
                   }
                    
                    }
                
                    ?>
                </select>
                <br>
                <?php
        $qid = $_GET['qid'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "u745359346_quotation_OCT";
        
        $conn = new mysqli($servername, $username, $password, $database);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * from quotation WHERE qid = '$qid'";
        $result = $conn->query($sql);
        
        if (!$result) {
            die("Query failed: " . $conn->error);
        }
        
        if ($row = $result->fetch_assoc()) {
        }
        else
        {
            echo "<script>alert('Invalid request');</script>";
        }
        $conn->close();
        ?>
        
                <div class="form-group">
                    <div class="row">
                        <div class="col"><label for="quotationId">Quotation Name:</label>
                            <input value="<?php echo $row['qname']; ?>" type="text" class="form-control" name="quotationName" id="quotationName" required
                                placeholder="Quotation Name" style="width:300px;"></div>
                        <div class="col"><label for="quotationId">Quotation Description:</label>
                            <input value="<?php echo $row['qdes']; ?>" type="text" class="form-control" name="quotationDesc" id="quotationDesc" required
                                placeholder="Quotation Description"></div>
                </div>    
                        </div>

                                 <input value="<?php echo $row['qid']; ?>" type="hidden" class="form-control" name="qid" id="qid" required>

                <div class="title_row">
                    <h4 class="text-center mb-5 mt-2">Product Details</h4>
                    
                </div>
                <div id="items-container" class="mb-4">
                    <div class="item">
                        <div class="row mt-3">
                            <div class="col">
                                <label for="product">Product Name:</label>
                                <select class="form-control" name="product[]" required>
                                    <option value="">--SELECT PRODUCT--</option>
                                    <?php
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
                                    $sql="SELECT * FROM product";
                                    $result1 = $conn->query($sql);
                                    while($row1 = $result1->fetch_assoc())
                                    {
                                        echo "<option name='prod' id='prod' value='".$row1['pid']."'>".$row1['pname']."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                <button type="button" class="btn btn-primary" onclick="addNewItem()">Add New Item</button>

                <br><br>
                <div class="text-center">

                    <input type="submit" class="btn btn-success" onclick="validation()" name="submit" value="Submit">
                    <button class="btn btn-primary" onclick="refreshPage()">Refresh</button>
                </div>
            </form>

        </div>


    </div>
</body>
<script>

    function addNewItem() {
        var container = document.getElementById("items-container");
        if (container.children.length < 5) {
            var newItem = container.firstElementChild.cloneNode(true);

            newItem.querySelector('select').selectedIndex = 0;

            container.appendChild(newItem);

            var removeButton = document.createElement("button");
            removeButton.type = "button";
            removeButton.className = "btn btn-danger mt-3";
            removeButton.textContent = "Remove Item";
            removeButton.onclick = function () {
                container.removeChild(newItem);
            };
            newItem.appendChild(removeButton);
        }
        else {
            alert("You can add a maximum of 5 items.");
        }
    }
    function refreshPage() {
        location.reload(true);
    }
    // function handleSelection() {
    //     var selectedCustomer = document.getElementById("product1").value;
    //     var selectedProduct = document.getElementById("product2").value;
    //     alert("Selected customer: " + selectedCustomer);
    //     alert("Selected product: " + selectedProduct);
    //     var xhr = new XMLHttpRequest();
    //     xhr.onreadystatechange = function () {
    //         if (xhr.readyState === 4 && xhr.status === 200) {
    //             var response = xhr.responseText;
    //             alert(response);
    //         }
    //     };
    //     xhr.open("POST", "fetchquotation.php", true);
    //     xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //     xhr.send("selectedCustomer=" + selectedCustomer);
    //     xhr.send("selectedProduct=" + selectedProduct);
    // }
</script>

</html>