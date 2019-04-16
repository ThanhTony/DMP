<!DOCTYPE html>
<html>
<head>
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
          <a class="nav-item nav-link active" href="#">Découvrir le DMP</a>
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
    <form>
      <!--nom prénom-->
     <div class="form-group col-md-3">
       <label for="inputEmail4">Nom</label>
       <input type="text" class="form-control" id="inputEmail4" placeholder="Nom">
     </div>
     <div class="form-group col-md-3">
       <label for="inputPassword4">Prénom</label>
       <input type="text" class="form-control" id="inputPassword4" placeholder="Prénom">
     </div>

     <!--Fin nom prénom-->
       <!--Sexe-->
   <div class="form-group">
     <label for="inputAddress">Sexe  </label>
     <div class="custom-control custom-radio custom-control-inline">
       <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
       <label class="custom-control-label" for="customRadioInline1">Homme</label>
     </div>
     <div class="custom-control custom-radio custom-control-inline">
       <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
       <label class="custom-control-label" for="customRadioInline2">Femme</label>
     </div>
   </div>
 <!--Fin Sexe-->
<!--Date de naissance-->
     <div class="form-group col-md-2">
        <form class="form-horizontal col-sm-7 col-sm-offset-2" action="" method="post">
            <div class="form-group registration-date">
                <label class="control-label col-sm-8" for="registration-date">Date de naissance :</label>
            	<div class="input-group registration-date-time">
            		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            		<input class="form-control" name="registration_date" id="registration-date" type="date">
            	</div>
            </div>
        </form>
      </div>
    <!--Fin Date de naissance-->
    <!--Numéro de SS-->
     <div class="form-group col-md-3">
       <label for="inputState">Numéro de Sécurité Social</label>
       <input type="email" class="form-control" id="inputEmail4" placeholder="Numéro Sécurité Social">
     </div>
     <div class="form-group col-md-3">
       <label for="inputPassword4">MDP</label>
       <input type="password" class="form-control" id="inputPassword4" placeholder="Prénom">
     </div>
   <button type="submit" class="btn btn-primary">Sign in</button>
 </form>
<!--Fin Numéro de SS-->
<!--fin formulaire-->








<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
<script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
