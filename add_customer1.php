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
    <center>
          <?php
                /* Attempt MySQL server connection. Assuming you are running MySQL
                server with default setting (user 'root' with no password) */
                $link = mysqli_connect("localhost", "root", "", "laundry");
                 
                
                // Check connection
                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $non_whiteShirts = $_POST['non_whiteShirts'];
                $whiteShirts = $_POST['whiteShirts'];
                $non_whitePants = $_POST['non_whitePants'];
                $whitePants = $_POST['whitePants'];
                $bedSheets = $_POST['bedSheets'];
                $status = $_POST['status'];
                $dateCreated = date("Y-m-d");
                // Attempt insert query execution
                $sql = "INSERT INTO customers VALUES ('$name','$phone','$non_whiteShirts','$whiteShirts','$non_whitePants','$whitePants','$bedSheets','$status','$dateCreated')";
                if(mysqli_query($link, $sql)){
                    echo "<center><h1>Record inserted successfully.</h1></center>";
                } else{
                    echo "<center><h1>ERROR: Could not able to execute $sql.</h1></center>". mysqli_error($link);
                }
                 
                
          ?>
          <button onclick="addCustomer()" style="display: block;background-color: rgb(33,66,99);cursor: pointer;color: white;">Add another Customer</button>
    </center>
    <script type="text/javascript">
      function addCustomer()
      {
        // body...
        location.replace("add_customer.php");
      }
    </script> 

</body>

</html>