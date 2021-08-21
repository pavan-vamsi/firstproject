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
    <h2> Enter Inventory table column names</h2>
    <div class="formstyle">
          <form method="post" action="pricing_profit1.php">

              <label for="pNWS">col1:</label>
              <input type="text" name="pnws" id="pNWS">
              <br>
              <label for="pWS">col2:</label>
              <input type="text" name="pws" id="pWS">
              <br>
              <label for="pNWP">col3:</label>
              <input type="text" name="pnwp" id="pNWP">
              <br>
              <label for="pWP">col4:</label>
              <input type="text" name="pwp" id="pWP">
              <br>
              <label for="pBS">col5:</label>
              <input type="text" name="pbs" id="pBS">
              <br>
              <input type="submit" value="Submit">
          </form>
    </div>

</body>

</html>