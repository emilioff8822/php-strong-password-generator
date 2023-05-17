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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>atterraggio</title>
</head>
<body>
<div class="container text-center">

<h1>La tua password generata è:</h1> 
<h2> <?php echo $message; ?></h2>


</div>
</body>

<style>
    body {
      background: #c31432;  /
      background: -webkit-linear-gradient(to right, #240b36, #c31432);  
      background: linear-gradient(to right, #240b36, #c31432); 
      color: #FFF;
    }
    .container {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      
    }

    h1 {
      margin-bottom: 1rem;
    }
    h2 {
      color: #00FF00; 
    }
  </style>

</html>
