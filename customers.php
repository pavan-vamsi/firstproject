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
    <h2> Enter Customer table column names</h2>
    <div class="formstyle">
          <form method="post" action="customers1.php">

              <label for="Name">col1:</label>
              <input type="text" name="name" id="Name">
              <br>
              <label for="Phone">col2:</label>
              <input type="text" name="phone" id="Phone">
              <br>
              <label for="Non_whiteShirts">col3:</label>
              <input type="text" name="non_whiteShirts" id="Non_whiteShirts">
              <br>
              <label for="WhiteShirts">col4:</label>
              <input type="text" name="whiteShirts" id="WhiteShirts">
              <br>
              <label for="Non_whitePants">col5:</label>
              <input type="text" name="non_whitePants" id="Non_whitePants">
              <br>
              <label for="WhitePants">col6:</label>
              <input type="text" name="whitePants" id="WhitePants">
              <br>
              <label for="BedSheets">col7:</label>
              <input type="text" name="bedSheets" id="BedSheets">
              <br>
              <label for="Status">col8:</label>
              <input type="text" name="status" id="Status">
              <br>
              <input type="submit" value="Submit">
          </form>
    </div>

</body>

</html>