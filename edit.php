<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  $conn = mysqli_connect("localhost", "root", null, "project");
  
 
  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "SELECT * FROM countries WHERE id = {$_GET["id"]}";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);
?>

<!-- Step 3: (2 points) Include your header here -->
<?php
$title = "Welcome";                   
include "_header.php";                 
?>

<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<!DOCTYPE html>
<html>
  <head>
    <title>Edit Country</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  
  <body>
    <div class="container">
      
      <header class="rounded-3 my-5 bg-dark p-5">
        <h1 class="text-white">Edit Person</h1>
      </header>
        
      <p>
        <a href="index.php">Home</a>
      </p>
<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
    
<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
    
    <form action="./update.php" method="post">
        
    <input type="hidden" name="id" value="<?= $row["id"] ?>">

    <div class="form-group">
        <label>First Name:</label>
          <input class="form-control" type="text" name="first_name" value="<?= $row["first_name"] ?>">
        </div>

        <div class="form-group">
          <label>Last Name:</label>
          <input class="form-control" type="text" name="last_name" value="<?= $row["last_name"] ?>">
        </div>

        <div class="form-group">
          <label>Date of Birth:</label>
          <input class="form-control" type="number" name="date_of_birth" value="<?= $row["date_of_birth"] ?>">
        </div>
          
        <div class="form-group">
          <label>Alias:</label>
          <input class="form-control" type="text" name="alias" value="<?= $row["alias"] ?>">
        </div>
          
        <div class="form-group">
          <label>Active:</label>
          <input class="form-control" type="text" name="active" value="<?= $row["active"] ?>">
        </div>
          
        <button class="btn btn-primary" type="submit">Update</button>
      </form>
    </div>

<!-- Step 8: (2 points) Include your footer here -->
   <?php
     include "_footer.php";                 
   ?>
  </body>
</html>


<!-- TOTAL POINTS POSSIBLE: 44 -->