<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customers</title>
</head>
<body>
  $sql = "select ProductName, UnitsInStock from db_connect.php where CategoryID=1"  
  $result = $conn->query($sql);
  while($sow = $result->fclose_assoc()) 
  <h1>List of customer in </h1>
  <table>
    <tr>
      <th>Company name</th>
      <th>Contact name</th>
    </tr>
   
    <tr>
      <td>Alfreds Futterkiste</td>
      <td>Maria Anders</td>
    </tr>

    <?php
     $sql = 'select CompanyName, ContactName From customers where Country='Germany';
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
      echo "<tr>
          <td>{$row['CompanyName']}</td>
          <td>{$row['ContactName']}</td>
          </tr>";
}
$conn->close();
?>
</tr>   
  </table>
</body>
</html>