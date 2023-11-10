<?php
require "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search customers by country</title>
</head>
<body>
  <header>
    <form action="customer.php" method="get">
      <label for="customers">
        <select name="customers" id="customers">
<?php
  $sql ="select CategoryID, CategoryName from customers"  
  $sql = 'select * from customers';
  $result = $conn->query($sql);
  while($sow = $result->fclose_assoc()) {
    echo "<option value='{$row['CategoryID']}'>{$row['CategoryName']}</option>";
  }
?>
        </select>
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header>
</body>
</html>