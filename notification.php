<?php

  // Step 1: (1 point) Start your session
  // CREATE YOUR SESSION START BELOW THIS LINE
  session_start();

  
  // Step 2: (4) Redirect the user if they don't have a notification
  // CREATE YOUR REDIRECT LOGIC BELOW THIS LINE
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Notification</title>
  </head>

  <body>
    <div class="container">
      <header class="rounded-3 my-5 bg-dark p-5">
        <h1 class="text-white">Notification</h1>
      </header>

      <p>
        <a href="index.php">Home</a>
      </p>
<?php

    if (isset($_SESSION["message"])) {
    

  // Step 3: (5) Output the notification and clear it from the session (once it's outputted)
  // CREATE YOUR NOTIFICATION OUTPUT AND CLEAR BELOW THIS LINE
    echo $_SESSION["message"];
      session_unset();
    }

  // TOTAL POINTS POSSIBLE: 10

?>

  </div>
  </body>
</html>

 

