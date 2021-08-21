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
    <?php
          /* Attempt MySQL server connection. Assuming you are running MySQL
          server with default setting (user 'root' with no password) */
          $link = mysqli_connect("localhost", "root", "", "laundry");
           
          // Check connection
          if($link === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
          }
          $bs = 0;
          $db = 0;
          $fc = 0;
          $fd = 0;
          // Attempt select query execution
          $sql = "SELECT * FROM inventory";
          if($result = mysqli_query($link, $sql)){
              if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){
                      
                          $bs = $row['bakingSoda'];
                          $db = $row['detergentBar'];
                          $fc = $row['fabricConditioner'];
                          $fd = $row['fabricDetergent'];
                      
                  }
              } else{
                  echo "<center><h1>No records of inventory</h1></center>";
              }
          } else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
          }
          
          $bs = $bs + $_POST['bakingSoda'];
          $db = $db + $_POST['detergentBar'];
          $fc = $fc + $_POST['fabricConditioner'];
          $fd = $fd + $_POST['fabricDetergent'];
          $sql = "UPDATE inventory SET bakingSoda='$bs',detergentBar='$db',fabricConditioner='$fc',fabricDetergent='$fd' WHERE reference='inventoryref'";
          if(mysqli_query($link, $sql)){
              echo "<center><h1>Inventory is updated</h1></center>";
          } else {
              echo "<center><h1>ERROR: Could not able to execute $sql.</h1></center>" . mysqli_error($link);
          }
          // Close connection
          mysqli_close($link);
    ?>
</body>

</html>