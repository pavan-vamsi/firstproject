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
    <?php
          /* Attempt MySQL server connection. Assuming you are running MySQL
          server with default setting (user 'root' with no password) */
          $link = mysqli_connect("localhost", "root", "", "laundry");
           
          // Check connection
          if($link === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
          }
           
          // Attempt create table query execution
          $sql = "CREATE TABLE pricingprofit(".
              $_POST['pnws']." INT NOT NULL,".
              $_POST['pws']." INT NOT NULL,".
              $_POST['pnwp']." INT NOT NULL,".
              $_POST['pwp']." INT NOT NULL,".
              $_POST['pbs']." INT NOT NULL,
              MoneyEarned INT NOT NULL,
              reference VARCHAR(20) NOT NULL
          )";
          if(mysqli_query($link, $sql)){
              echo "<center><h1>Table created successfully.</h1></center>";
          } else{
              echo "<center><h1>ERROR: Could not able to execute $sql.</h1></center> " . mysqli_error($link);
          }
    ?>

</body>

</html>