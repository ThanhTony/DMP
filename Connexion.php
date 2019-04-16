<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="css/DMP.css">
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
          <a class="nav-item nav-link active" href="Connexion.php">Découvrir le DMP</a>
          <a class="nav-item nav-link active" href="#">Créer son DMP</a>
           <hr size="0,5" color="black">
          <a class="nav-item nav-link active font-weight-bold" href="#folio">Professionnel</a>
          <a class="nav-item nav-link active" href="#">Découvrir le DMP</a>
          <a class="nav-item nav-link active" href="#">Accéder au DMP</a>
        </div>
      </div>
    </nav>
<!--Fin Barre de Navigation-->



<!--Formulaire-->
    <form method="post" action="Connexion.php">
  
    <!--Numéro de SS-->
     <div class="form-group col-md-3">
       <label for="inputState">Numéro de Sécurité Social</label>
       <input type="number" class="form-control" id="inputEmail4" placeholder="Numéro Sécurité Social" name="NSS">
     </div>
     <div class="form-group col-md-3">
       <label for="inputPassword4">MDP</label>
       <input type="password" class="form-control" id="inputPassword4" placeholder="passeword" name="password">
     </div>
   <input type="submit" class="btn btn-primary" name="ok" value="Connexion">
 </form>
<!--Fin Numéro de SS-->
<!--fin formulaire-->

</body>
</html>




<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
<script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php


try
{
$bdd = new PDO("mysql:host=localhost;dbname=DMP2", 'root', '');
}catch(Exception $e)
{
  die('Erreur : '. $e->getMessage());
}
$test = false;

if(isset($_POST['NSS'])){
  $identifiant = $_POST['NSS'];
}
if(isset($_POST['password'])){
  $mdp = $_POST['password'];

  $requete= $bdd->query("SELECT numSS,MDP FROM PATIENT WHERE numSS=$identifiant AND MDP='$mdp' ");

  while($data=$requete->fetch()){
    if($data['numSS']==$identifiant && $data['MDP']==$mdp){
      $_SESSION['ID']=$identifiant;
      header('Location: Patient.php');
    }
    else{
      header('Location: Connexion.html');
    }
  } 
  
  $requete->closeCursor();



}








?>