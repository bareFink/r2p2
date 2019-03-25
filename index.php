<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Side titel  -->
  <title>Café Frederiksberg</title>
  <!--Standard stylesheet  -->
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <!-- Skeleton stylesheet  -->
  <link rel="stylesheet" type="text/css" href="css/skeleton.css">
  <!-- Normalize stylesheet  -->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">

</head>

<body>

<!-- Indsætter siden i en centreret container -->
<div class="container">

<!--Indrag header fra filen includes/header.php-->
<?php include 'includes/header.php'; ?>

<!--Indhold på siden (tilføj forskelligt sub-div afhængigaf side (så content forside eks))-->
<div class="content template">
<h1> Hello world </h1>
<p> Welcome to this very exciting webpage </p>
</div>

<!--Indrag footer fra filen includes/footer.php-->
<?php include 'includes/footer.php'; ?>
</div>


</body>

</html>
