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

    <div class="btngroup">

      <p style="text-align: center;color: rgb(33,66,99);font-size: 200%">Manage Inventory</p>
      <button onclick="everythingZero()">Make everything zero</button>
      <button onclick="addAdditionalStock()">Add additional stock</button>
      <button onclick="subtractSomeStock()">subtract some stock</button>
      <button onclick="showInventory()">Show inventory</button>
    
    </div>
    <script type="text/javascript">
      function everythingZero()
      {
        // body...
        location.replace("make_everything_zero.php");
      }
      function addAdditionalStock()
      {
        // body...
        location.replace("add_additional_stock.php");
      }
      function subtractSomeStock()
      {
        // body...
        location.replace("subtract_some_stock.php");
      }
      function showInventory()
      {
        // body...
        location.replace("show_inventory.php");
      }
    </script>

</body>

</html>