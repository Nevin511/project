<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  $conn = mysqli_connect("localhost", "root", null, "project");


  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $result = mysqli_query($conn, "SELECT * FROM supers");
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!-- Step 3: (2 points) Include your header here -->
<?php
$title = "Welcome";                   
include "_header.php";                 
?>

<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
<!DOCTYPE html>
  <head>
    <title>Document</title>

    <style>
      table, tr, td {
        border: 1px solid #ccc;
        padding: 0.25em;
      }
    </style>
  </head> 

  <body>
    <h1>Supers</h1>
    <hr>

      <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="new.php">New Person</a></li>
      </ul>
      
    
   
<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->
    <table class="table table-striped table-bordered my-5">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Date of Birth</th>
          <th>Alias</th>
          <th>Active</th>
          <th>Hero</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($rows as $row): ?>
          <tr>
          <td><?= $row['first_name'] ?></td>
          <td><?= $row['last_name'] ?></td>
          <td><?= $row['date_of_birth'] ?></td>
          <td><?= $row['alias'] ?></td>
          <td><?= $row['active'] ?></td>
          <td><?= $row['hero'] ?></td>

      

<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->
<!-- CREATE YOUR TABLE BELOW THIS LINE -->
          <td>
          <a href="./edit.php?id=<?= $row['id'] ?>">edit</a>
          |
          <a href="./delete.php?id=<?= $row['id'] ?>" onClick="return confirm('Are you sure?')">delete</a>
          </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </body>
</html>
<!-- Step 7: (2 points) Include your footer here -->
<?php
include "_footer.php";                 
?>

<!-- TOTAL POINTS POSSIBLE: 34 -->