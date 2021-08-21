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

                $phone = $_POST['phone'];
                 
                // Attempt insert query execution
                $sql = "DELETE FROM customers WHERE phone='$phone'";
                if(mysqli_query($link, $sql)){
                    echo "<center><h1>Record deleted successfully.</h1></center>";
                } else{
                    echo "<center><h1>ERROR: Could not able to execute $sql.</h1></center>" . mysqli_error($link);
                }
                 
                
          ?>
          <button onclick="deleteCustomer()" style="display: block;background-color: rgb(33,66,99);cursor: pointer;color: white;">delete another Customer</button>
    </center>
    <script type="text/javascript">
      function deleteCustomer()
      {
        // body...
        location.replace("delete_customer.php");
      }
    </script> 

</body>

</html>