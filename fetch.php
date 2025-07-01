
            <table>
                <thead>
                    <tr>
                        <th class="border-radius-left">Customer ID</th>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Customer Info</th>
                         <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $servername = "localhost";
                  $username = "u745359346_WDI_OCT23_T4";
                  $password = "WDI@Calanjiaym#OCT23_T4";
                  $database = "u745359346_quotation_OCT";

                    
                    $conn = new mysqli($servername, $username, $password, $database);
                    
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    
                    $sql = "SELECT * from quotation";
                    $result = $conn->query($sql);
                    
                    if (!$result) {
                        die("Query failed: " . $conn->error);
                    }
                    
                    while ($row = $result->fetch_assoc()) {
                        $cid = $row['cid'];
                        echo "<tr>
                                <td>" . $row['qid'] . "</td>
                                <td>" . $row['qname'] . "</td>
                                <td>" . $row['cid'] . "</td>
                                
                                </tr>";
                            }
                            
                            $conn->close();
                    ?>
            </tbody>
            </table>
