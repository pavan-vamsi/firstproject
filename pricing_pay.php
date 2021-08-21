<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Styled Navigation</title>
	<link rel="stylesheet" href="drop_down_navigation_style.css">
  <style type="text/css">
    table {
      position: relative;
      top: 50px;
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
    <p style="text-align: center;color: rgb(33,66,99);font-size: 200%;">Pricing and pay</p>
    <?php
          /* Attempt MySQL server connection. Assuming you are running MySQL
          server with default setting (user 'root' with no password) */
          $link = mysqli_connect("localhost", "root", "", "laundry");
          


          // Attempt select query execution
          $sql = "SELECT * FROM pricingprofit";
          if($result = mysqli_query($link, $sql)){
              if(mysqli_num_rows($result) > 0){
                  echo "<table>";
                      echo "<tr>";
                          echo "<th>priceOfOneNonWhiteShirt</th>";
                          echo "<th>priceOfOneWhiteShirt</th>";
                          echo "<th>priceOfOneNonWhitePant</th>";
                          echo "<th>priceOfOneWhitePant</th>";
                          echo "<th>priceOfOneBedSheet</th>";
                          echo "<th>Money Earned</th>";
                      echo "</tr>";
                  while($row = mysqli_fetch_array($result)){
                      echo "<tr>";
                          echo "<td>" . $row['priceOfOneNonWhiteShirt'] . "</td>";
                          echo "<td>" . $row['priceOfOneWhiteShirt']    . "</td>";
                          echo "<td>" . $row['priceOfOneNonWhitePant']  . "</td>";
                          echo "<td>" . $row['priceOfOneWhitePant']     . "</td>";
                          echo "<td>" . $row['priceOfOneBedSheet']      . "</td>";
                          echo "<td>" . $row['MoneyEarned']      . "</td>";

                      echo "</tr>";
                  }
                  echo "</table>";
                  // Close result set
                  mysqli_free_result($result);
              } else{
                  echo "<center><h1>No records of pricing table</h1></center>";
              }
          } else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
          }
           
          // Close connection
          mysqli_close($link);
    ?>
    <div class="btngroup" style="position: relative;top: 100px;">
      
      <button onclick="setPrice()">set or update prices</button>
      <button onclick="calculateCost()">calculate cost of a customer</button>
      
    
    </div>
    
    <script type="text/javascript">
      function setPrice()
      {
        // body...
        location.replace("set_price.php");
      }
      function calculateCost()
      {
        // body...
        location.replace("calculate_cost.php");
      }
    </script>

</body>

</html>