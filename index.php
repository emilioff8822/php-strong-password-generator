<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>Generatore di password</title>
</head>
<body>

<div class="container text-center">
<form action="index.php" method="GET">

<label for="length"> Scegli la lunghezza della Password da generare:</label> <br>
<input type="number" id="length" name="length" min="1" required> <br>
<input type="submit" value="Genera">

</form>

</div>



</body>
</html>