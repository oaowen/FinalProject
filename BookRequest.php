<?php
include('header.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
    case 'Add':
      $sqlAdd = "insert into Request (BRName, BREmail) value (?, ?)";
      $stmtAdd = $conn->prepare($sqlAdd);
      $stmtAdd->bind_param("ss", $_POST['iName'], $_POST['iEmail']);
      $stmtAdd->execute();
      echo '<div class="alert alert-success" role="alert">New Request Added.</div>';
      break;
    case 'Edit':
      $sqlEdit = "update Request set BRName=?, BREmail=? where BRID=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("ssi", $_POST['iName'], $_POST['iEmail'], $_POST['iid']);
      $stmtEdit->execute();
      echo '<div class="alert alert-success" role="alert">Request edited.</div>';
      break;
    case 'Delete':
      $sqlDelete = "delete from Request where BRID=?";
      $stmtDelete = $conn->prepare($sqlDelete);
      $stmtDelete->bind_param("i", $_POST['iid']);
      $stmtDelete->execute();
      echo '<div class="alert alert-success" role="alert">Request deleted.</div>';
      break;
  }
}
?>
    
      <h1>Dogs</h1>
      <table class="table table-success table-striped-columns">
        <thead>
          <tr>
            <th>BRID</th>
            <th>BRName</th>
            <th>BREmail</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          
<?php
$sql = "SELECT BRID, BRName, BREmail from Request";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
          
          <tr>
            <td><?=$row["BRID"]?></td>
            <td><a href="BRSection.php?id=<?=$row["BRID"]?>"><?=$row["BRName"]?><?=$row["BREmail"]?></a></td>
            <td>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editRequest<?=$row["DID"]?>">
                Edit
              </button>
              <div class="modal fade" id="editRequest<?=$row["BRID"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editRequest<?=$row["BRID"]?>Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="editRequest<?=$row["BRID"]?>Label">Edit Request</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="">
                        <div class="mb-3">
                          <label for="editRequest<?=$row["BRID"]?>Name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="editRequest<?=$row["BRID"]?>Name" aria-describedby="editRequest<?=$row["BRID"]?>Help" name="iName" value="<?=$row["BRName"]?>">
                          <div id="editRequest<?=$row["BRID"]?>Help" class="form-text">Enter the Book's name.</div>
                        </div>
                        <div class="mb-3">
  <label for="editRequest<?=$row["BRID"]?>Email" class="form-label">Email</label>
  <input type="text" class="form-control" id="editRequest<?=$row["BRID"]?>Email" aria-describedby="editRequest<?=$row["BRID"]?>Help" name="iEmail" value="<?=$row["BREmail"]?>">
  <div id="editRequest<?=$row["BRID"]?>Help" class="form-text">Enter the request's email address.</div>
</div>

                        <input type="hidden" name="iid" value="<?=$row["BRID"]?>">
                        <input type="hidden" name="saveType" value="Edit">
                        <input type="submit" class="btn btn-primary" value="Submit">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <form method="post" action="">
                <input type="hidden" name="iid" value="<?=$row["BRID"]?>" />
                <input type="hidden" name="saveType" value="Delete">
                <input type="submit" class="btn" onclick="return confirm('Are you sure?')" value="Delete">
              </form>
            </td>
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
      <br />
      

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
