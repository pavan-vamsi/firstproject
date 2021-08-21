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
      <p style="text-align: center;color: rgb(33,66,99);font-size: 200%">Manage Customers</p>
      <button onclick="addCustomer()">Add a Customer</button>
      <button onclick="deleteCustomer()">Delete a Customer</button>
      <button onclick="searchCustomer()">Search a Customer</button>
      <button onclick="showUnpaid()">Show Unpaid Customers</button>
      <button onclick="showCustomers()">Show Customers</button>
      <button onclick="deleteAllCustomers()">Delete all customers</button>
      <button onclick="deletePaidCustomers()">Delete paid customers</button>
    
    </div>
    <script type="text/javascript">
      function addCustomer()
      {
        // body...
        location.replace("add_customer.php");
      }
      function deleteCustomer()
      {
        // body...
        location.replace("delete_customer.php");
      }
      function showUnpaid()
      {
        // body...
        location.replace("showunpaid_customer.php");
      }
      function showCustomers()
      {
        // body...
        location.replace("show_customers.php");
      }
      function searchCustomer()
      {
        // body...
        location.replace("search_customer.php");
      }
      function deleteAllCustomers()
      {
        // body...
        location.replace("delete_all_customers.php");
      }
      function deletePaidCustomers()
      {
        // body...
        location.replace("delete_paid_customers.php");
      }
    </script>

</body>

</html>