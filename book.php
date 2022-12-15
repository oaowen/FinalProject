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
 
   <div class="card">
<div class="card-header">
 

<h5 style="color: #c7d04e">Our Books</h5>

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
   </br> 
   
   <div class="card">
<div class="card-header">
 

<h5 style="color: #c7d04e">Don't see a book you like? Request it!</h5>

     </div>
     <?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["iName"];
  $email = $_POST["iEmail"];

  // Connect to the database
  $servername = "localhost";
  $username = "oaowenou_finalproject";
  $password = "TAnner01!!";
  $dbname = "oaowenou_finalproject";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check if the connection was successful
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert the request into the Request table
  $sql = "INSERT INTO Request (BRName, BREmail) VALUES (?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $name, $email);
  $stmt->execute();

  // Close the database connection
  $conn->close();

  // Print a success message
  echo '<div class="alert alert-success" role="alert">New Request Added.</div>';
}
?>


<div class="card-body">
   <form action="BookRequest.php" method="POST">
  <div class="mb-3">
    <label for="bookName">Book Name Requested</label>
    <textarea class="form-control" id="bookName" name="bookName" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else. We will notify you if we get your book!</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit request</button>
</form>

</div>
  </body>
</html>
