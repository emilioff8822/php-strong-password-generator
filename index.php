<?php
require_once __DIR__ . '/partials/functions.php';

session_start();



if(isset($_GET['length']) && !empty($_GET['length'])){
  $length = $_GET['length'];
  $password = generatePassword($length);  
  $_SESSION ['message'] = "$password";


header('Location: ./atterraggio.php');
exit;
}


?>

<?php require_once __DIR__ . '/partials/head.php' ?>

<body>

<div class="container text-center">
<form action="index.php" method="GET">

<label for="length"> Scegli la lunghezza della Password da generare:</label> <br>
<input type="number" id="length" name="length" min="1" required> <br>
<input type="submit" value="Genera">

</form>



</div>

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
    form {
    background: rgba(255,255,255,0.1);
    padding: 60px;
    border-radius: 15px;
    box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
  }
  input[type="number"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    margin-bottom: 10px;
  }
  input[type="submit"] {
    background: #FFF;
    color: #240b36;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
  }
  input[type="submit"]:hover {
    background: #240b36;
    color: #FFF;
  </style>

</body>
</html>