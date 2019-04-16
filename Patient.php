<?php
session_start();  
$identifiant= $_SESSION['ID'];
try
{
  $bdd = new PDO("mysql:host=localhost;dbname=DMP2", 'root', '');
}catch(Exception $e)
{
  die('Erreur : '. $e->getMessage());
}
$requete=$bdd->query("SELECT numSS,nomP,prenomP, numRPPS  FROM PATIENT where numSS='$identifiant' ");
$reponse= $requete->fetchAll();
foreach($reponse as $donnees){
  $_SESSION['nom']=$donnees['nomP'];
  $_SESSION['prenom']= $donnees['prenomP'];
  $_SESSION['num']=$donnees['numSS'];
  $_SESSION['numRPP']=$donnees['numRPPS'];
}
echo $_SESSION['nom'];
echo $_SESSION['prenom'];
echo $_SESSION['num'];
echo $_SESSION['numRPP'];

$requete2=$bdd->query("SELECT numSS,dateSS,diagnostic, numRPPS  FROM consulte where numSS='$identifiant' ");
$reponse2= $requete2->fetchAll();
foreach($reponse2 as $donnees){
  $_SESSION['numSS_Consulte']=$donnees['numSS'];
  $_SESSION['date']= $donnees['dateSS'];
  $_SESSION['diagnostic']=$donnees['diagnostic'];
  $_SESSION['numRPP_Consutle']=$donnees['numRPPS'];
}
echo $_SESSION['date'];


$requete2=$bdd->query("SELECT *  FROM medecin where numRPPS=".$_SESSION['numRPP_Consutle'] );
$reponse2= $requete2->fetchAll();
foreach($reponse2 as $donnees){
  $_SESSION['numSS_Consulte']=$donnees['numSS'];
  $_SESSION['date']= $donnees['dateSS'];
  $_SESSION['diagnostic']=$donnees['diagnostic'];
  $_SESSION['numRPP_Consutle']=$donnees['numRPPS'];
}
echo $_SESSION['date'];

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/patientcss.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


	<!--barre de navigation-->
 <nav class="navbar navbar-light  bg-light">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" style="color:#007bff;" href="#haut"> <h2>DMP</h2>  </a>

      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active font-weight-bold" href="#haut">Patient</a>
          <a class="nav-item nav-link active" href="#">Découvrir le DMP</a>
            <a class="nav-item nav-link active" href="#">Mon DMP</a>
          <a class="nav-item nav-link active" href="#">Créer son DMP</a>
           <hr size="0,5" color="black">
          <a class="nav-item nav-link active font-weight-bold" href="#folio">Professionnel</a>
          <a class="nav-item nav-link active" href="#">Découvrir le DMP</a>
          <a class="nav-item nav-link active" href="#">Accéder au DMP</a>
        </div>
      </div>
    </nav>
<!--Fin Barre de Navigation-->
<div class="ban">
 <img src="img/medecin.jpg"  class="img-fluid" alt="Responsive image">
</div>
<!--Dernier RDV MEDICAUX-->
<br>
<div id="competence" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h2 style="text-align: center; color:#007bff ;">Vos derniers rendez-vous</h2>
    <div class="container">
      <hr size="0,5" style="width:20%" color="#2C77B9">
    </div>

    <i class="col-md-12 col-sm-12 col-xs-12 icon fa fa-info-circle fa-3x" aria-hidden="true"></i>
</div>
<div class="container">
  <table class="table table-hover ">
    <thead>
      <tr>

        <th scope="col">Médecin</th>
        <th scope="col">Spécialité</th>
        <th scope="col">Diagnostic</th>
        <th scope="col">date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td><?php echo $_SESSION['date']?></td>
      </tr>
      <tr>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@fat</td>
      </tr>
      <tr>
        <td>@fat</td>
        <td>Larry the Bird</td>
        <td>@twitter</td>
        <td>Coucou</td>
      </tr>
    </tbody>
  </table>
</div>
<!--Fin Dernier RDV MEDICAUX-->
<br><br>
<div class="container">
  <hr size="0,5"  color="#2C77B9">
</div>
<br><br>
<!--Debut ordonnances-->
<div id="carousel1_indicator" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="" data-slide-to="0" class="active"></li>
<li data-target="" data-slide-to="1"></li>
<li data-target="" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
  <img class="d-block w-100" src="img/folio.png" alt="First slide">
  <div class="">
    <a href="#">PortFolio</a>
  </div>
</div>
<div class="carousel-item">
  <img class="d-block w-100" src="img/folio.png" alt="Second slide">
  <div class="">
    <a href="#">Projet 2</a>
  </div>

</div>
<div class="carousel-item">
  <img class="d-block w-100" src="img/folio.png" alt="Third slide">
  <a href="#">Projet 3</a>
</div>
</div>
<a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>



<!--fin Ordonnances-->
<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
<script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>