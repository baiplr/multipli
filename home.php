<?php require "login/loginheader.php"; ?>

<?php

if(isset($_SESSION['username'])) { 
  $cookie_name = "username"; 
  $cookie_value = $_SESSION['username']; 
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dashboard | Multipli</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="css/main.css" rel="stylesheet" media="screen">
</head>
<body>
  <div class="container">
    <div class="form-signin">
      <div class="alert alert-success">Welcome, <strong><?php echo($_COOKIE['username']); ?></strong>.</div>
      <a href="game/index.php" class="btn btn-success btn-lg btn-block">Practice Now</a>
      <a href="login/logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
    </div>
  </div> <!-- /container -->
</body>
</html>
