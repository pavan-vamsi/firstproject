<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Styled Navigation</title>
	<link rel="stylesheet" href="drop_down_navigation_style.css">
  <style type="text/css">
    table {
      position: relative;
      top: 80px;
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
    <h1 style="color: rgb(33,66,99);position: relative; top: 70px;left: 20px;" id="upd_inv" >This is pricing table</h1>
    <?php
          /* Attempt MySQL server connection. Assuming you are running MySQL
          server with default setting (user 'root' with no password) */
          $link = mysqli_connect("localhost", "root", "", "laundry");
           
          // Check connection
          if($link === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
          }
          if(isset($_POST['pnws']))
          {
                $pnws = $_POST['pnws'];
                $pws = $_POST['pws'];
                $pnwp = $_POST['pnwp'];
                $pwp = $_POST['pwp'];
                $pbs = $_POST['pbs'];
                $sql = "UPDATE pricingprofit SET priceOfOneNonWhiteShirt='$pnws',priceOfOneWhiteShirt = '$pws',priceOfOneNonWhitePant = '$pnwp',priceOfOneWhitePant = '$pwp',priceOfOneBedSheet = '$pbs' WHERE reference='ppref' ";

                mysqli_query($link, $sql);
          }
           



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
                      echo "</tr>";
                  while($row = mysqli_fetch_array($result)){
                      echo "<tr>";
                          echo "<td>" . $row['priceOfOneNonWhiteShirt'] . "</td>";
                          echo "<td>" . $row['priceOfOneWhiteShirt']    . "</td>";
                          echo "<td>" . $row['priceOfOneNonWhitePant']  . "</td>";
                          echo "<td>" . $row['priceOfOneWhitePant']     . "</td>";
                          echo "<td>" . $row['priceOfOneBedSheet']      . "</td>";
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
    <div class="formstyle" style="position: relative;top: 100px;">
              <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

                  <label for="pNWS">priceOfOneNonWhiteShirt:</label>
                  <input type="number" name="pnws" id="pNWS">
                  <br>
                  <label for="pWS">priceOfOneWhiteShirt:</label>
                  <input type="number" name="pws" id="pWS">
                  <br>
                  <label for="pNWP">priceOfOneNonWhitePant:</label>
                  <input type="number" name="pnwp" id="pNWP">
                  <br>
                  <label for="pWP">priceOfOneWhitePant:</label>
                  <input type="number" name="pwp" id="pWP">
                  <br>
                  <label for="pBS">priceOfOneBedSheet:</label>
                  <input type="number" name="pbs" id="pBS">
                  <br>
                  <input type="submit" value="Submit">
              </form>
    </div>


</body>

</html>