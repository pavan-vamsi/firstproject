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
          <form method="post" action="inventory1.php">

              <label for="BakingSoda">col1:</label>
              <input type="text" name="bakingSoda" id="BakingSoda">
              <br>
              <label for="DetergentBar">col2:</label>
              <input type="text" name="detergentBar" id="DetergentBar">
              <br>
              <label for="FabricConditioner">col3:</label>
              <input type="text" name="fabricConditioner" id="FabricConditioner">
              <br>
              <label for="FabricDetergent">col4:</label>
              <input type="text" name="fabricDetergent" id="FabricDetergent">
              <br>
              <input type="submit" value="Submit">
          </form>
    </div>

</body>

</html>