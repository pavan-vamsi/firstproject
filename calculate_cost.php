<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Styled Navigation</title>
	<link rel="stylesheet" href="drop_down_navigation_style.css">
  <style type="text/css">
    table {
      position: relative;
      top: 5px;
    }
    button {
      width: 20%;
  background-color: rgb(33,66,99);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
    }
  </style>
</head>
<body>

    <nav>
          <ul>
              <li>
                    <a href="home.php">Home</a>
              </li>
              <li>
                    <a href="createdb.php">createdb</a>
                    <ul>
                      <li><a href="customers.php">customers</a></li>
                      <li><a href="inventory.php">inventory</a></li>
                      <li><a href="pricing_profit.php">pricing_table</a></li>
                    </ul>
              </li>
              <li>
                    <a  >Manage</a>
                    <ul>
                      <li><a href="manage_customers.php">manage_customers</a></li>
                      <li><a href="manage_inventory.php">manage_inventory</a></li>
                      
                      
                    </ul>
              </li>
              <li>
                    <a href="pricing_pay.php">Pricing and pay</a>
              </li>
              <li>
                    <a >Contact</a>
              </li>
          </ul>
    </nav>
    <div class="formstyle">
              <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

                  <label for="Phone">Enter Phone Number of the Customer:</label>
                  <input type="text" name="phone" id="Phone">
                  <br>
                  <input type="submit" value="Submit">
              </form>
    </div>
    
    <?php
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        $link = mysqli_connect("localhost", "root", "", "laundry");
         
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        if(isset($_POST['phone']))
        {
        // Attempt select query execution<button style="float: right;position: relative;right: 100px;top: 30px;" onclick="updateStatus()">set status as paid for this customer</button>

              echo "<button style='float: right;position: relative;right: 100px;top: 30px;' onclick='updateStatus()'>set status as paid for this customer</button>";

              $name   = 0;
              $phone  = $_POST['phone'];
              $nws    = 0;
              $ws     = 0;
              $nwp    = 0;
              $wp     = 0;
              $bs     = 0;
              $status = 0;
              $date   = 0;

              $pnws   = 0;
              $pws    = 0;
              $pnwp   = 0;
              $pwp    = 0;
              $pbs    = 0;

              $sql1 = "SELECT * FROM customers WHERE phone='$phone'";
              if($result = mysqli_query($link, $sql1))
              {
                  if(mysqli_num_rows($result) > 0)
                  {
                        $row = mysqli_fetch_array($result);
                        $name  = $row['name'];
                        $phone = $row['phone'];
                        $nws   = $row['non_whiteShirts'];
                        $ws    = $row['whiteShirts'];
                        $nwp   = $row['non_whitePants'];
                        $wp    = $row['whitePants'];
                        $bs    = $row['bedSheets'];
                        $status= $row['status'];
                        $date  = $row['dateCreated'];
                  }
                  else
                  {
                      echo "<center><h1>No records matching your query were found.</h1></center>";
                  }
              } 
              else
              {
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }

              $sql2 = "SELECT * FROM pricingprofit WHERE reference='ppref'";
              if($result = mysqli_query($link, $sql2))
              {
                  if(mysqli_num_rows($result) > 0)
                  {
                        $row    = mysqli_fetch_array($result);
                        $pnws   = $row['priceOfOneNonWhiteShirt'];
                        $pws    = $row['priceOfOneWhiteShirt'];
                        $pnwp   = $row['priceOfOneNonWhitePant'];
                        $pwp    = $row['priceOfOneWhitePant'];
                        $pbs    = $row['priceOfOneBedSheet'];
                  }
                  else
                  {
                      echo "<center><h1>No records matching your query were found.</h1></center>";
                  }
              } 
              else
              {
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }
              $total_cost = $nws*$pnws + $ws*$pws + $nwp*$pnwp + $wp*$pwp + $bs*$pbs;
              echo "<h1 style='color:rgb(33,66,99);'> Collect ".$total_cost." rupees from ".$name."</h1>";
              echo "<h2 style='color:rgb(33,66,99);'>Summary of the cost </h2>";
              echo "<table>";
                          echo "<tr>";
                              echo "<th>Type of Cloth</th>";
                              echo "<th>Number of pieces</th>";
                              echo "<th>price of one piece</th>";
                              echo "<th>Total</th>";
                          echo "</tr>";
                          echo "<tr>";
                              echo "<td>" . "Non white shirt" . "</td>";
                              echo "<td>" . $nws . "</td>";
                              echo "<td>" . $pnws . "</td>";
                              echo "<td>" . $nws*$pnws . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                              echo "<td>" . "White shirt" . "</td>";
                              echo "<td>" . $ws . "</td>";
                              echo "<td>" . $pws . "</td>";
                              echo "<td>" . $ws*$pws . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                              echo "<td>" . "Non white pant" . "</td>";
                              echo "<td>" . $nwp . "</td>";
                              echo "<td>" . $pnwp . "</td>";
                              echo "<td>" . $nwp*$pnwp . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                              echo "<td>" . "White pant" . "</td>";
                              echo "<td>" . $wp . "</td>";
                              echo "<td>" . $pwp . "</td>";
                              echo "<td>" . $wp*$pwp . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                              echo "<td>" . "Bed Sheet" . "</td>";
                              echo "<td>" . $bs . "</td>";
                              echo "<td>" . $pbs . "</td>";
                              echo "<td>" . $bs*$pbs . "</td>";
                          echo "</tr>";
                          echo "<tr>";
                              echo "<td colspan = '3'>" . "Overall Cost" . "</td>";
                              echo "<td>" . $total_cost . "</td>";
                          echo "</tr>";
            echo "</table>";
        }
    ?>
    <script type="text/javascript">
       function updateStatus()
       {
         // body...
         <?php
                    /* Attempt MySQL server connection. Assuming you are running MySQL
                    server with default setting (user 'root' with no password) */
                    $link = mysqli_connect("localhost", "root", "", "laundry");
                     
                    // Check connection
                    if($link === false){
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
                    $ME = 0;

                    $sql1 = "UPDATE customers SET status='paid' WHERE phone='$phone' ";
                    mysqli_query($link, $sql1);

                    $sql2 = "SELECT * FROM pricingprofit WHERE reference='ppref'";
                    if($result = mysqli_query($link, $sql2))
                    {
                        if(mysqli_num_rows($result) > 0)
                        {
                             $row    = mysqli_fetch_array($result);
                             $ME     = $row['MoneyEarned'];
                             $ME += $total_cost;
                        }
                        else
                        {
                            echo "<center><h1>No records matching your query were found.</h1></center>";
                        }
                    } 
                    else
                    {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    $sql2 = "UPDATE pricingprofit SET MoneyEarned='$ME' WHERE reference='ppref' ";
                    mysqli_query($link, $sql2);
                    
        ?>
        alert("Status updated");

       }
    </script>
</body>

</html>