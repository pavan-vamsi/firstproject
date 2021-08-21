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
    <div class="formstyle">
              <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

                  <label for="Phone">Phone Number:</label>
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
        // Attempt select query execution
              $phone = $_POST['phone'];
              $sql = "SELECT * FROM customers WHERE phone='$phone'";
              if($result = mysqli_query($link, $sql)){
                  if(mysqli_num_rows($result) > 0){
                      echo "<table>";
                          echo "<tr>";
                              echo "<th>name</th>";
                              echo "<th>phone</th>";
                              echo "<th>non_whiteShirts</th>";
                              echo "<th>whiteShirts</th>";
                              echo "<th>non_whitePants</th>";
                              echo "<th>whitePants</th>";
                              echo "<th>bedSheets</th>";
                              echo "<th>status</th>";
                              echo "<th>dateCreated</th>";
                          echo "</tr>";
                      while($row = mysqli_fetch_array($result)){
                          echo "<tr>";
                              echo "<td>" . $row['name'] . "</td>";
                              echo "<td>" . $row['phone'] . "</td>";
                              echo "<td>" . $row['non_whiteShirts'] . "</td>";
                              echo "<td>" . $row['whiteShirts'] . "</td>";
                              echo "<td>" . $row['non_whitePants'] . "</td>";
                              echo "<td>" . $row['whitePants'] . "</td>";
                              echo "<td>" . $row['bedSheets'] . "</td>";
                              echo "<td>" . $row['status'] . "</td>";
                              echo "<td>" . $row['dateCreated'] . "</td>";
                          echo "</tr>";
                      }
                      echo "</table>";
                      // Close result set
                      mysqli_free_result($result);
                  } else{
                      echo "<center><h1>No records matching your query were found.</h1></center>";
                  }
              } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }
        }
        // Close connection
        mysqli_close($link);
    ?>


</body>

</html>