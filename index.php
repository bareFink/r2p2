<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Side titel  -->
  <title>Café Frederiksberg</title>
  <!--Stylesheets  -->
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">
</head>

<body>

  <!--Inddrager navigationsbar fra "includes/navigation.php"-->
  <?php include 'includes/navigation.php'; ?>



  <!--Slider (behøver ikke container, da den skal have 100% bredde) -->
  <div class="content slider">
    <h1> her kommer der til at være en slider </h1>
  </div>
  </div>



  <!-- Wrapper til onlineBestilling -->
  <div class="wrapper onlineBestilling">
    <!--Indhold centreret i wrapper-->
    <div class="container onlineBestilling">
      <h1> Her kommer der til at være en online bestillingsbar </h1>
    </div>
  </div>




  <!-- Wrapper til introHistorie -->
  <div class="wrapper introHistorie">
    <!--Indhold centreret i wrapper-->
    <div class="container introHistorie">
      <h1> Her kommer der til at være en intro historie </h1>
    </div>
  </div>




  <!-- Wrapper til indholdsoversigt -->
  <div class="wrapper indholdsoversigt">
    <!--Indhold centreret i wrapper-->
    <div class="container indholdsoversigt">
      <h1> Her kommer der til at være en indholdsoversigt </h1>
      <!-- opretter række, som elementer let kan placeres i-->
      <div class="row indholdsoversigt">
        <!--Opsætter kolonner der hver fylder 3 ud af 12 bredde (tjek hjemmeside skeletons hjemmeside)  -->
        <div class="three columns">
          <h2>RESTAURANT</h2>
        </div>
        <div class="three columns">
          <h2>BAR</h2>
        </div>
        <div class="three columns">
          <h2>EVENTS</h2>
        </div>
        <div class="three columns">
          <h2>SELSKABER</h2>
        </div>
      </div>
    </div>
  </div>



  <!-- Wrapper til katalog -->
  <div class="wrapper katalog">
    <!--Indhold centreret i wrapper-->
    <div class="container katalog">
      <h1> Her kommer der til at være et katalog </h1>
    </div>
  </div>



  <!-- Wrapper til kommendeEvents -->
  <div class="wrapper kommendeEvents">
    <!--Indhold centreret i wrapper-->
    <div class="container kommendeEvents">
      <h1> Her kommer der til at være en kommende events </h1>
    </div>
  </div>



  <!--Google maps (ikke centreret, da den skal have full width)  -->
  <div class="googleMaps">
    <h1> Her kommer der til at være Google maps </h1>
  </div>




  <!--Inddrager footer fra "includes/footer.php"-->
  <?php include 'includes/footer.php'; ?>


</body>

</html>
