<?php
include('header.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 <body>
 </br>
 </br>
   <div class="card">
<div class="card-header">
 

<span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">Our Books</span>

</div>

<div class="card-body">
<table class="table table-striped">
  <thead>
    <tr>
      <th>Book</th>
      <th>About</th>
      <th>Rating</th>
    </tr>
  </thead>
  <tbody>
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

$sql = "SELECT Name, About, Rating from Book";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["Name"]?></td>
    <td><?=$row["About"]?></td>
    <td><?=$row["Rating"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
    
    
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
     </div>
     </div>
   </div>
  </body>
</html>
