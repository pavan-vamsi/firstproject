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
              <form method="post" action="add_customer1.php">

                  <label for="Name">Name:</label>
                  <input type="text" name="name" id="Name">
                  <br>
                  <label for="Phone">Phone Number:</label>
                  <input type="text" name="phone" id="Phone">
                  <br>
                  <label for="Non_whiteShirts">Non_whiteShirts:</label>
                  <input type="number" name="non_whiteShirts" id="Non_whiteShirts">
                  <br>
                  <label for="WhiteShirts">WhiteShirts:</label>
                  <input type="number" name="whiteShirts" id="WhiteShirts">
                  <br>
                  <label for="Non_whitePants">Non_whitePants:</label>
                  <input type="number" name="non_whitePants" id="Non_whitePants">
                  <br>
                  <label for="WhitePants">WhitePants:</label>
                  <input type="number" name="whitePants" id="WhitePants">
                  <br>
                  <label for="BedSheets">BedSheets:</label>
                  <input type="number" name="bedSheets" id="BedSheets">
                  <br>
                  <label for="Status">Status:</label>
                  <input type="text" name="status" id="Status">
                  <br>
                  <input type="submit" value="Submit">
              </form>
        </div>


</body>

</html>