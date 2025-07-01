<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Product Details</title>
<link rel="icon" href="https://certificates.crisscrosstamizh.in/AUG/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="Style/view.css">
<style type="text/css">
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
@import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap");
    * {
  padding: 0;
  margin: 0;
}
body {
  margin: 0px;
  background-color: #ebeef2;
  font-family: "nunito", sans-serif;
  /*min-height:1000px;*/
  /* Hide vertical scrollbar */
  overflow-y: hidden;
  overflow-x: hidden;
  min-height: 200px;
}

#list-item {
  background: transparent;
  border: none;
  cursor: pointer;
}
nav {
  position: fixed;
  height: 100%;
  /* Increased height */
  left: 0;
  top: 20px;
  bottom: 40px;
  margin: auto 0;
  background-color: #fefefe;
  padding: 10px 20px;
  /*border-radius: 20px;*/
  margin-top: -20px;
  z-index: 1;
  box-shadow: 0px 0px 7px 3px lightgray;
}

nav ul {
  list-style: none;
  display: flex;
  /* justify-content: space-between; */
  row-gap: 36px;
  margin-top: 7px;
  align-items: center;
  flex-flow: column;
  height: 100%;
}

nav ul li {
  width: 100%;
  margin-bottom: 5px;
  /* Reduced spacing between icons */
  display: flex;
  /* Add this line */
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
  /* Increased vertical padding */
}

nav ul li a svg {
  width: 30px;
  height: 30px;
  margin-right: 5px;
  /* Added margin to the right of the icon */
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

/*#trigger {*/
/*    display: block;*/
/*    position: fixed;*/
/*    z-index: 2;*/
/*    padding: 5px;*/
/*    font-size: 20px;*/
/*    margin: 20px;*/
/*    background-color: transparent;*/
/*    color: black;*/
/*    border-radius: 40px;*/
/*    border: 0px solid transparent;*/
/*    width: 40px;*/
/*    height: 40px;*/
/*}*/

/*#trigger:hover {*/
/*    background-color: black;*/
/*    color: white;*/
/*    cursor: pointer;*/
/*}*/

/*#sidebar {*/
/*    display: block;*/
/*    position: fixed;*/
/*    height: 100%;*/
/*    width: 200px;*/
/*    margin: 0;*/
/*margin-left: -200px;*/
/*    background-color: white;*/
/*    border-right:2px solid lightgray;*/
/*    z-index:1;*/
/*}*/

/*#menu {*/
/*    width: 100%;*/
/*    margin: 0px;*/
/*    margin-top: 60px;*/
/*}*/

/*.menu_item {*/
/*    display: block;*/
/*    width: 70%;*/
/*    margin: auto;*/
/*    margin-top: 12px;*/
/*    padding: 10px;*/
/*    border-radius: 10px;*/
/*    text-decoration: none;*/
/*    color: black;*/
/*    font-size: 15px;*/
/*}*/

/*.menu_item:hover {*/
/*    background-color: #edf5fc;*/
/*    color: #116be9;*/
/*}*/

.active {
  /*background-color: #edf5fc;*/
  color: #116be9;
}

/*.menu_item i {*/
/*    padding-right: 10px;*/
/*    padding-left: 10px;*/
/*}*/

#main_area {
  display: block;
  margin: 0px;
  margin-left: 20px;
  /* Add padding to the right */
  padding-right: 20px;
  /* Set a fixed height and enable vertical scrollbar */
  height: 800px;
  overflow-y: auto;
}

#logo {
  display: inline-block;
  width: 60px;
  margin-left: 20px;
  vertical-align: top;
  /*margin-top:25px;*/
}

#main_area h1 {
  display: inline-block;
  font-family: "josefin sans", sans-serif;
  font-size: 20px;
  font-weight: 400;
  /*margin: 0px;*/
  /*margin-left:40px;*/
  /*margin-top: 13px;*/
  line-height: 1.5;
}
.profile-container {
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

.profile-img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin-right: 20px;
  margin-top: -14px;
  margin-bottom: -13px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 120px;
  /*box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
  z-index: 1;
  right: 0;
  margin-top: 140px;
  margin-right: 50px;
  border-radius: 10px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #edf5fc;
  color: #116be9;
}

.show {
  display: block;
}

/*media screen*/
@media screen and (min-width: 992px) {
  #topbar {
    display: grid;
    grid-template-columns: 90% 10%;
  }
}

.bar p {
  margin-left: 0;
  text-align: center;
  font-size: 12px;
}

#downloadButton {
  float: right;
  border-radius: 18px;
  background-color: #116be9;
  /* Change to your desired color */
  color: #fff;
  height: 32px;
  /* Adjust the height to your preference */
  padding: 0px 10px;
  margin-right: 10px;
  margin-top: 50px;
  /*border:#116be9;*/
  border: 2px solid black;
  font-size: 30px;
}

#downloadButton:hover {
  background-color: #edf5fc;
  color: #116be9;
}

#searchInput {
  float: right;
  margin-right: 30px;
  margin-top: 10px;
  width: 250px;
  /* You can also add additional styles as needed */
}

.input-search {
  height: 50px;
  float: right;
  margin-right: 30px;
  margin-top: 10px;
  width: 30px;
  border-style: none;
  padding: 10px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 25px;
  transition: all 0.5s ease-in-out;
  background-color: #ebeef2;
  padding-right: 40px;
  color: black;
}

.input-search::placeholder {
  color: black;
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 80;
}

.btn-search {
  width: 50px;
  height: 50px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 0px;
  color: black;
  background-color: transparent;
  pointer-events: painted;
}

.btn-search:focus ~ .input-search {
  width: 300px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom: 1px black;
  transition: all 500ms cubic-bezier(0, 0.11, 0.35, 2);
}

.input-search:focus {
  width: 280px;
  border-radius: 0px;
  background-color: transparent;
  border: 1px solid black;
  transition: all 500ms cubic-bezier(0, 0.11, 0.35, 2);
}

.hidden {
  display: none;
}

table {
  font-family: "Nunito", sans-serif;
  border-collapse: collapse;
  width: 97%;
  /*margin: 50px auto;*/
  margin-left: 60px;
  margin-top: 30px;
}

th,
td {
  border: none; /* Remove all borders */
  border-bottom: 1px solid #5c5a5a; /* Add bottom border */
  /*padding: 8px 15px 8px 15px;*/
  padding: 10px 10px;
  text-align: center;
}

th {
  padding: 6px;
  background-color: #f5f5f5; /* Darker gray on hover */
  color: rgb(100, 99, 99);
  /* Rounded corners for th elements */
}

tr:nth-child(even) {
  background-color: #ffffff;
}

tr:nth-child(odd) {
  background-color: #ffffff;
  /* Rounded corners for tr elements */
}

tr:hover,
tr:hover td #button a {
  /*background-color:rgb(230, 228, 228);
            color:black;*/ /* Darker blue on hover */
  background-color: #edf5fc;
  color: #116be9;
}

table tr .border-radius-right {
  border-top-right-radius: 15px;
  border-bottom-right-radius: 15px;
}

table tr .border-radius-left {
  border-top-left-radius: 15px;
  border-bottom-left-radius: 15px;
}

.filter-bar {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

#filterInput {
  padding: 8px;
  width: 150px;
  border: 1px solid #ccc;
  /* Remove margin-right */
}

.filterButton {
  border: none;
  background-color: #007bff;
  color: #ffffff;
  cursor: pointer;
  /* Remove margin-right */
}

.filterInput select option i {
  margin-right: 5px;
}

.sb-example-1 .search {
  width: 50%;
  display: flex;
  margin-left:-100px;
  margin-top:120px;
}

.sb-example-1 .searchTerm {
  width: 30%;
  /*border: 3px solid #116be9;*/
  border: 3px solid black;
  padding: 10px;
  /*border-radius: 5px 0 0 5px;*/
  outline: none;
  /*color: #9DBFAF;*/
  border-radius: 10px;
  font-size: 17px;
}

.sb-example-1 .searchTerm:focus {
  color: black;
}

/*.sb-example-1 .searchButton {*/

/*  width: 30px;*/
/*  height: 50px;*/
/*  border: 1px solid #116be9;*/
/*  background: #116be9;*/
/*  text-align: center;*/
/*  color: #fff;*/
/*  border-radius: 0 19px 19px 0;*/
/*  cursor: pointer;*/
/*  font-size: 20px; */
/*}*/
/*.sb-example-1 .searchButton i{*/
/*  color: white;*/
/*}*/

.sb-example-1 {
  margin-top: -110px; /* Adjust the margin-top to your preference */
  margin-left: 22px;
}

.sb-example-2 {
  display: flex;
  align-items: center;
  margin-left: 100px;
  border-top: 2px solid #ccc; /* 2px width for top border */
  border-bottom: 1px solid #116be9; /* 1px width, dashed line, and color #116be9 */
  border-radius: 10px;
  padding: 5px;
}

#filterInput {
  padding: 8px;
  width: 120px;
  border: none;
  outline: none;
}

.custom-select {
  position: relative;
  display: inline-block;
  cursor: pointer;
  font-size: 17px;
  /*border: 2px solid #737171;*/
  border: 2px solid black;
  border-radius: 19px; /* Rounded corners */
  padding: 10px 7px;
  background-color: #fff;
  /*margin-left: 660px;*/
  margin-top: 50px;
  margin-bottom: -35px;
}

.custom-select select {
  display: none;
}

.custom-select .select-trigger {
  display: block;
}

.custom-select .select-trigger::after {
  content: "\25BC";
  font-size: 15px;
  margin-left: 10px;
  color: #737171;
}

.custom-select .options {
  display: none;
  position: absolute;
  width: 80%;
  border: #737171;
  border-radius: 0 0 10px 10px;
  background-color: white;
  z-index: 1;
  font-size: 15px;
  font-family: "nunito", sans-serif;
}

.custom-select .option {
  padding: 8px 16px;
  cursor: pointer;
}

.custom-select option:hover {
  background-color: #edf5fc;
  color: #116be9;
  cursor: pointer;
}

.custom-select.open .options {
  display: block;
}
.select-trigger i {
  color: #737171;
}

/*pending*/
.status-label {
  padding: 5px 12px;
  border-radius: 5px;
  font-weight: bold;
}

.status-label.in {
  padding: 5px 8px;
  background-color: #ffc107; /* Yellow color for pending status */
  color: #333;
}

.status-label.block {
  background-color: red;
  color: white;
}

.status-label.issued {
  background-color: #28a745; /* Green color for approved status */
  color: #fff;
}

/*action-button*/
#button {
  display: inline-block;
  height: 30px;
  padding: 3px 16px;
  border-radius: 5px;
  border: 0.5px solid black;
  text-decoration: none;
  background-color: #ebeef2;
  color: black;
  transition: background-color 0.3s;
}

#button:hover {
  background-color: #0056b3;
  color: white;
}

#button i {
  font-size: 18px;
}

/*PROFILE*/
.profile-container {
  display: flex;
  justify-content: flex-end; /* Align to the right */
  align-items: center;
}

.profile-img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin-right: 5px;
}

.dropdown-content {
  /*display: none;*/
  position: absolute;
  background-color: #f9f9f9;
  min-width: 120px;
  /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
  z-index: 1;
  /* right: 0; */
  margin-top: 90px;
  margin-right: 60px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #edf5fc;
  color: #116be9;
}

.show {
  display: block;
}

#pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 32px;
  /*float: right;*/
  margin-right: 0px;
  margin-bottom: -30px;
}
#pagination button {
  display: flex;
  padding: 5px 10px;
  margin: 2px 2px;
  height: 30px;
  font-size: 15px;
  cursor: pointer;
  align-items: center;
  border-radius: 6px;
  background-color: #116be9;
  color: #f9f9f9;
  border: none;
  text-align: center;
}
#legend {
  display: flex;
  align-items: center;
  justify-content: flex-end; /* Shifts the content to the right */
  margin-top: 10px;
}

.legend-item {
  display: flex;
  align-items: center;
  margin-left: 20px;
}

.legend-color {
  width: 20px;
  height: 10px;
  background-color: #f88379;
  border-radius: 8px; /* Set border-radius to 8px for rounded corners */
  margin-right: 5px;
}

.legend-label {
  font-size: 14px;
  font-weight: bold;
}

@media (max-width: 768px) {
  #topbar {
    text-align: center;
  }

  #header {
    display:flex;
    align-items:center;
    text-align: center;
    margin-bottom: 10px;
  }

  #logo {
    display: block;
    margin: 0 auto;
  }

  h1 {
    font-size: 1.5em;
  }

  .profile-container {
    float: none;
    display: block;
    margin: 0 auto;
  }

  .dropdown-content {
    right: 0;
    left: auto;
  }

  .searchTerm {
    width: 80%;
  }

  select {
    width: 100%;
  }

  #downloadButton {
    margin-top: 10px;
  }

  #pagination {
    text-align: center;
    margin-top: 10px;
  }
}

/* Adjustments for even smaller screens (e.g., mobile phones) */
@media (max-width: 576px) {
  #menuBar ul {
    flex-direction: column;
  }

  #menuBar ul li {
    width: 100%;
    text-align: center;
  }
}
@media (max-width: 650px) {
  /* Set a max-width for your filters */

  #Categories,
  #Batch,
  #Dpt,
  #Status {
    width: 100px;
    font-size: 12px;
    margin-bottom: 10px;
    margin-top: 20px;
    display: block;
    margin-left: -100px;
  }
  #pagination {
    margin-left: -200px;
    display: inline-flex;
  }
  #certificates-details {
    /*overflow-y:auto;*/
  }

  .sb-example-1 .search {
    display: block;
    
  }

  /* Adjust font size and padding for better visibility */
  .custom-select {
    font-size: 14px;
    padding: 8px;
  }
  #prevBtn,
  #nextBtn {
    margin-left: 60px;
    font-size: 14px;
    padding: 4px 8px;
  }

  /* Legend items */
  .legend-item {
    margin-right: 5px;
  }

  /* Download button */
  #downloadButton {
    font-size: 14px;
    padding: 8px 16px;
  }
}

/* Adjustments for even smaller screens (e.g., mobile phones) */
@media (max-width: 576px) {
  /* Further reduce font size and padding for very small screens */
  .custom-select {
    font-size: 12px;
    padding: 6px;
  }
}

#header {
  display: flex;
  margin-top: 10px;
}

#main_area h1 {
  display: inline-block;
  font-family: "josefin sans", sans-serif;
  font-size: 20px;
  font-weight: 400;
  /*margin: 0px;*/
  /*margin-left:200px;*/
  margin-top: 2px;
  line-height: 1.5;
}

#logo {
  display: inline-block;
  width: 60px;
  margin-left: 70px;
  vertical-align: top;
  /*margin-top:25px;*/
}
.createbtn{
    display:flex;
    margin-top:10px;
    margin-left:90%;
}
.createbtn a{
            display:block;
            width:200px;
            height:30px;
            text-decoration:none;
            text-align:center;
            font-size:18px;
            color:#0325BD;
            border:2px solid #0325BD;
            border-radius:10px;
            background-color:transparent;
            
        }
.createbtn a:hover
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
                <a href="quotationdetails.php"><i class="bi bi-files"></i><span>Quotation Details</span></a>
            </li>
            <li>
                <a href="viewcustomer.php"><i class="bi bi-people"></i><span>Customer Table</span></a>
            </li>
            <li>
                <a href="viewproduct.php"><i class="bi bi-boxes"></i><span>Product Table</span></a>
            </li>
            <li>
                <a href="login.php"><i class="bi bi-power"></i><span>Logout</span></a>
            </li>
        </ul>
    </nav>

    <div id="main_area">
        <div id="topbar" >
            <div id="header">
                <img src="https://static.wixstatic.com/media/8b8f2d_46f5f8aaf3ad4e93b98f0e8a390e19e8~mv2.png/v1/fill/w_117,h_117,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Overlay%20Dark%20shadowed%20compressed.png"
                    id="logo" style="border-radius:10px;">
                <h1>Calanjiyam Quotation Portal<br>Product Table</h1>
            </div>
            <div class="sb-example-1">
                <div class="search">
                   <input type="text" id="searchInput" class="searchTerm" placeholder="Search...">
                </div>
             </div>
        </div> 
        <div class="createbtn">
            <a href="generate_product.php">Create Product</a>
        </div>
        <form action="">
    
          <table>
              <thead>
                  <tr>
                      <th class="border-radius-left">Product ID</th>
                      <th>Product Name</th>
                      <th>Product Price</th>
                      <th>CGST</th>
                      <th>SGST</th>
                      <th>pstatus</th>
                      <th>Edit</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $database = "u745359346_quotation_OCT";
                  
                  $conn = new mysqli($servername, $username, $password, $database);
                  
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  }
                  
                  $sql = "SELECT * from product";
                  $result = $conn->query($sql);
                  
                  if (!$result) {
                      die("Query failed: " . $conn->error);
                  }
                  
                  while ($row = $result->fetch_assoc()) {
      $pid = $row['pid'];
                      echo "<tr>
                              <td>" . $row['pid'] . "</td>
                              <td>" . $row['pname'] . "</td>
                              <td>" . $row['price'] . "</td>
                              <td>" . $row['cgst'] . "</td>
                              <td>" . $row['sgst'] . "</td>
                              <td>" . $row['pstatus'] . "</td>
                              <td><a href='editproduct.php?pid=$pid' type='submit'><i class='bi bi-pencil'></i></a></td>
                              </tr>";
                          }
                          
                          $conn->close();
                          ?>
  
  
  
          </tbody>
          </table>
      </form>
    </div>
    
<script>
    let currentPage = 1;
const rowsPerPage = 12;

function showPage() {
    const rows = document.querySelectorAll("#certificates-details tbody tr");
    const startIndex = (currentPage - 1) * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;

    rows.forEach((row, index) => {
        if (index >= startIndex && index < endIndex) {
            row.style.display = "table-row";
        } else {
            row.style.display = "none";
        }
    });
}

function prevPage() {
    if (currentPage > 1) {
        currentPage--;
        showPage();
    }
}

function nextPage() {
    const rows = document.querySelectorAll("#certificates-details tbody tr");
    const maxPage = Math.ceil(rows.length / rowsPerPage);

    if (currentPage < maxPage) {
        currentPage++;
        showPage();
    }
}


        // Function to go to the next page
        function nextPage() {
            const rows = document.querySelectorAll("#certificates-details tbody tr");
            const maxPage = Math.ceil(rows.length / rowsPerPage);

            if (currentPage < maxPage) {
                currentPage++;
                showPage();
            }
        }

        // Initial display
        showPage();
           
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("dropdownMenu").addEventListener("click", function () {
            document.getElementById("myDropdown").classList.toggle("show");
        });


        window.addEventListener("click", function (event) {
            if (!event.target.matches('.top-right-image')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        });
    });
    function toggleOverflow() {
    var content = document.getElementById('content');
    var pagination = document.getElementById('pagination');

    if (pagination.offsetHeight < pagination.scrollHeight) {
        content.style.overflowY = 'scroll';
    } else {
        content.style.overflowY = 'hidden';
    }
}

window.onload = toggleOverflow;

    document.addEventListener('DOMContentLoaded', function() {
        // Function to handle search by name
        function searchByName() {
            var searchTerm = document.querySelector('.searchTerm').value.toUpperCase();
            var tableRows = document.querySelectorAll('tbody tr');

            tableRows.forEach(function(row) {
                var name = row.children[1].textContent.toUpperCase();
                if (name.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        // Function to handle CSV download
        function downloadCSV() {
            var rows = document.querySelectorAll('table tr');
            var csvContent = "data:text/csv;charset=utf-8,";
            
            rows.forEach(function(row) {
                var rowData = [];
                row.querySelectorAll('td').forEach(function(cell) {
                    rowData.push(cell.innerText);
                });
                csvContent += rowData.join(',') + "\n";
            });

            var encodedUri = encodeURI(csvContent);
            var link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "certificates.csv");
            document.body.appendChild(link);
            link.click();
        }

        // Add click event listener to search button
       

        // Add click event listener to CSV download button
        document.getElementById('downloadButton').addEventListener('click', downloadCSV);
    }); 
    const searchInput = document.getElementById('searchInput');
    const tableBody = document.getElementsByTagName('tbody')[0];

    // Add an event listener to the input field
    searchInput.addEventListener('input', function () {
        const searchText = searchInput.value.toLowerCase();

        // Get all rows in the table body
        const rows = tableBody.getElementsByTagName('tr');

        // Loop through each row and hide/show based on the search text
        for (let i = 0; i < rows.length; i++) {
            const row = rows[i];
            const cells = row.getElementsByTagName('td');
            let rowMatch = false;

            // Loop through all cells in the row
            for (let j = 0; j < cells.length; j++) {
                const cell = cells[j];
                const cellText = cell.textContent.toLowerCase();

                // Check if the cell contains the search text
                if (cellText.includes(searchText)) {
                    rowMatch = true;
                    break; // No need to check other cells once a match is found in this row
                }
            }

            // Show or hide the row based on the search result
            if (rowMatch) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
            // Get all custom selects
            const customSelects = document.querySelectorAll('.custom-select');

            // Add click event listener to each custom select
            customSelects.forEach(function(select) {
                const trigger = select.querySelector('.select-trigger');
                const options = select.querySelector('.options');

                trigger.addEventListener('click', function() {
                    // Toggle the 'open' class to show/hide options
                    select.classList.toggle('open');
                });

                // Add click event listener to each option
                options.querySelectorAll('.option').forEach(function(option) {
                    option.addEventListener('click', function() {
                        // Update the selected option text
                        trigger.innerText = option.innerText;

                        // Close the options
                        select.classList.remove('open');
                    });
                });
            });
        });
    document.addEventListener('DOMContentLoaded', function () {
        const filterDropdown = document.getElementById('filterDropdown');
        const dataTable = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
        const rows = dataTable.getElementsByTagName('tr');

        function filterTable() {
            const selectedCategory = filterDropdown.value;
                
            for (let i = 0; i < rows.length; i++) {
                const categoryColumn = rows[i].getElementsByTagName('td')[2]; // Assuming category is in the third column (index 2)
                const categoryText = categoryColumn.textContent;

                if (selectedCategory === 'all' || categoryText === selectedCategory) {
                    rows[i].classList.remove('hidden'); // Show the row
                } else {
                    rows[i].classList.add('hidden'); // Hide the row
                }
            }
        }

        filterDropdown.addEventListener('change', filterTable);
    });
    function filterByCategory() {
            var selectedCategory = document.querySelector('.custom-select .select-trigger').innerText;
            var tableRows = document.querySelectorAll('tbody tr');

            tableRows.forEach(function(row) {
                var category = row.children[2].textContent.toUpperCase();
                if (selectedCategory === 'All' || category.includes(selectedCategory)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
        function toggleDropdown() {
        var dropdown = document.getElementById("dropdown");
        dropdown.classList.toggle("show");
    }

    window.onclick = function (event) {
        if (!event.target.matches('.profile-img')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    
    function toggleMenu() {
        var menuBar = document.getElementById('menuBar');
        menuBar.classList.toggle('active');
    }
    
    
    
</script>

<script>
    const filterSelect = document.getElementById("Batch");

        // Reference to the HTML table element
        const dataTable = document.getElementById("certificates-details");

        // Get all unique values from the "Name" column
        const uniqueValues = Array.from(new Set(Array.from(dataTable.querySelectorAll("tbody td:nth-child(4)")).map(cell => cell.textContent)));

        // Populate the filter dropdown with unique values
        uniqueValues.forEach(value => {
            const option = document.createElement("option");
            option.textContent = value;
            filterSelect.appendChild(option);
        });

    document.addEventListener("DOMContentLoaded", function () {
    function renderTable(data) {
        const tableBody = document.querySelector('tbody');
        tableBody.innerHTML = '';

        data.forEach(cert => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${cert[0]}</td>
                <td>${cert[1]}</td>
                <td>${cert[2]}</td>
                <td>${cert[3]}</td>
                <td>${cert[4]}</td>
                <td>${cert[5]}</td>
                <td>${cert[6]}</td>
                <td>${cert[7]}</td>
                <td>${cert[8]}</td>
                <td>
                  <a href="change_status.php?id=${cert[0]}" style="text-decoration:none;color:black;"  class="status-label  ${cert[9].toLowerCase()}">${cert[9]}</a>
                </td>
<td>${cert[10]}</td>
                <td> <form method='post' action='edit_intern_details.php'>
                                            <input type='hidden' name='id' value='${cert[0]}'>
                                            <button class="action-button" type='submit' name='submit' id='button'><i class="bi bi-pencil-square"></i></button>
                                        </form></td>
                <td><img src="printicon.png" style="width:20%"></td>
            `;
            tableBody.appendChild(row);
        });
    }

    const certificates = [];
    const rows = document.querySelectorAll('table tbody tr');
    rows.forEach(row => {
        const cols = row.querySelectorAll('td');
        const cert = [];
        cols.forEach(col => {
            cert.push(col.textContent);
        });
        certificates.push(cert);
    });

    renderTable(certificates);

    document.getElementById('Categories').addEventListener('change', applyFilters);
    document.getElementById('Dpt').addEventListener('change', applyFilters);
    document.getElementById('Status').addEventListener('change', applyFilters);
    document.getElementById('Batch').addEventListener('change', applyFilters);

    function applyFilters() {
        const categoryValue = document.getElementById("Categories").value;
        const departmentValue = document.getElementById("Dpt").value;
        const statusValue = document.getElementById("Status").value;
            const batchValue = document.getElementById("Batch").value;
    
    const filteredCertificates = certificates.filter(cert => {
        return  (categoryValue === "All" || cert[2] === categoryValue) &&
                (batchValue ==="All" || cert[3] === batchValue) &&
                (departmentValue === "All" || cert[4] === departmentValue) &&
                (statusValue === "All" || cert[9] === statusValue);
    });
    
    renderTable(filteredCertificates);
    showPage();
     highlightPastRows();
    }
    });
</script>
<script>
  function getCurrentDate() {
    let today = new Date();
    let dd = String(today.getDate()).padStart(2, '0');
    let mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
    let yyyy = today.getFullYear();

    return new Date(`${mm}-${dd}-${yyyy}`);
}

function highlightPastRows() {
    let currentDate = getCurrentDate();
    let table = document.getElementById('certificates-details');
    let rows = table.getElementsByTagName('tr');

    for (let i = 1; i < rows.length; i++) {
        let endDate = rows[i].getElementsByTagName('td')[7].innerText;
        let endDateParts = endDate.split('-');
        let endDateFormatted = new Date(`${endDateParts[1]}-${endDateParts[0]}-${endDateParts[2]}`);
        let status = rows[i].getElementsByTagName('td')[9].innerText.trim();

        if (status === 'In Draft' && endDateFormatted < currentDate ) {
            rows[i].style.backgroundColor = '#F88379';
        }
        if (status === 'Block') {
            rows[i].style.backgroundColor = '#FFBAA4';
        }
    }
}

window.onload = highlightPastRows;
 
</script>
<script>
  // Function to convert date strings to comparable format
  function convertToDate(dateString) {
    var parts = dateString.split('-');
    return new Date(parts[2], parts[1] - 1, parts[0]);
  }

  // Function to sort rows by End Date
  function sortTableByEndDate() {
    var table = document.getElementById('certificates-details').getElementsByTagName('tbody')[0];
    var rows = table.getElementsByTagName('tr');
    
    var sortedRows = Array.from(rows).sort(function(rowA, rowB) {
      var dateA = convertToDate(rowA.cells[7].innerText);
      var dateB = convertToDate(rowB.cells[7].innerText);
      return dateB - dateA;
    });
    
    // Remove existing rows
    while (table.firstChild) {
      table.removeChild(table.firstChild);
    }

    // Append sorted rows
    sortedRows.forEach(function(row) {
      table.appendChild(row);
    });
  }

  // Call the sorting function
  window.addEventListener('DOMContentLoaded', function() {
    sortTableByEndDate();
  });
</script>
    </body>
    
    </html>