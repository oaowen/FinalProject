<?php
include('header.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      
<?php
$servername = "localhost";
$username = "oaowenou_finalproject";
$password = "TAnner01!!";
$dbname = "oaowenou_finalproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

    
      <h1>Authors</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            
            <th>First Name</th>
            <th>Last Name</th>
            <th>Books</th>
           
          </tr>
        </thead>
        <tbody>
          
<?php
$sql = "SELECT FName, LName, Name from Author A join Book B on A.AID= B.AID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
          
          <tr>
            <td><?=$row["FName"]?></td>
            <td><?=$row["LName"]?></td>
            <td><?=$row["Name"]?></td>
            
            
          
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
          
        </tbody>
      </table>
      </br>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
  </body>
</html>
