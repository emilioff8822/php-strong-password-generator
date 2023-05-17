<?php
  session_start();

  if (isset($_SESSION['message'])){
    $message = $_SESSION['message'];
  } else {
    header('Location: ./index.php');
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>La tua password generata è: <?php echo $message; ?></p>
</body>
</html>
