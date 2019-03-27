<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Side titel  -->
  <title>Café Frederiksberg</title>
  <!--Standard stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../../css/stylesheet.css">
  <!-- Skeleton stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../../css/skeleton.css">
  <!-- Normalize stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../../css/normalize.css">
  <!-- Includer Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">

</head>

<body>


<!--Indsætter navigationsbar fra filen includes/navigation.php-->
<?php include '../../includes/navigation.php'; ?>

<!-- Indsætter slider  -->
<div class="content slider">
  <h1> her kommer der til at være en slider </h1>
</div>
</div>


<!--Eksempel m. 3-delt container og overskrift  -->
<div class="wrapper indholdsoversigt">
  <!--Indhold centreret i wrapper-->
  <div class="container indholdsoversigt">
    <h1> Forretter </h1>
    <!-- opretter række, som elementer let kan placeres i-->
    <div class="row indholdsoversigt">
      <!--Opsætter 2 kolonner der hver fylder 5 ud af 12 bredde (tjek hjemmeside skeletons hjemmeside)  -->
       <div class="six columns">
        <div class="SMenu-textleft"> 
         <h5> Klar suppe</h5>
         <p> Med Boller of flutes</p>
         <h5>*Flødegeleret aspargessuppe </h5>
         <p> Med kødboller og flutes</p>
         <h5> Karrysuppe </h5>
         <p> Med ris, hønskekød, og flutes</p>
         <h5> Hønsesalat </h5>
         <p>På ananasring og flutes</p>
        </div>
       </div>
       <div class="six columns">
        <div class="SMenu-textleft">
         <h5>- per couv. 52 kr,-</h5><br>
         <h5>- per couv. 52 kr,-</h5><br>
         <h5>- per couv. 52 kr,-</h5><br>
         <h5>- per couv. 52 kr,-</h5><br>
        </div>
        
       </div>
    </div>
  </div>
</div>



<!--Indrag footer fra filen includes/footer.php-->
<?php include '../../includes/footer.php'; ?>



</body>

</html>
