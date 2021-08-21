<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Styled Navigation</title>
	<link rel="stylesheet" href="drop_down_navigation_style.css">
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

    <h1 style="color: rgb(33,66,99);position: relative; top: 100px;left: 550px;">This is the inventory</h1>
    <?php
          /* Attempt MySQL server connection. Assuming you are running MySQL
          server with default setting (user 'root' with no password) */
          $link = mysqli_connect("localhost", "root", "", "laundry");
           
          // Check connection
          if($link === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
          }
           
          // Attempt select query execution
          $sql = "SELECT * FROM inventory";
          if($result = mysqli_query($link, $sql)){
              if(mysqli_num_rows($result) > 0){
                  echo "<table>";
                      echo "<tr>";
                          echo "<th>bakingSoda</th>";
                          echo "<th>detergentBar</th>";
                          echo "<th>fabricConditioner</th>";
                          echo "<th>fabricDetergent</th>";
                      echo "</tr>";
                  while($row = mysqli_fetch_array($result)){
                      echo "<tr>";
                          echo "<td>" . $row['bakingSoda'] ." grams". "</td>";
                          echo "<td>" . $row['detergentBar'] . " bars"."</td>";
                          echo "<td>" . $row['fabricConditioner'] ." ml". "</td>";
                          echo "<td>" . $row['fabricDetergent'] ." ml". "</td>";
                      echo "</tr>";
                  }
                  echo "</table>";
                  // Close result set
                  mysqli_free_result($result);
              } else{
                  echo "<center><h1>No records of inventory</h1></center>";
              }
          } else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
          }
           
          // Close connection
          mysqli_close($link);
    ?>

</body>

</html>