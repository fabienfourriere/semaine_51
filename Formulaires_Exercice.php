<?php

$formError = array();

$textPattern = '/^[a-zA-Z\-\déèàçùëüïôäâêûîô#&]+$';
$postalPattern = '/^((0[1-9])|([1-8][0-9])|(9[0-8])|(2A)|(2B))[0-9]{3}$';
$mailPattern = '/^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}';
$bdayPattern = '^[0-9]{2}\/[0-9]{2}\/[0-9]{4}';

if (isset($_POST['submit'])) {

    if (!empty($_POST['nom'])) {

        if (preg_match($textPattern, $_POST['nom'])) {

            $nom = $_POST['nom'];
        } else {

            $formError['nom'] = 'Saisie incorrect!!';
        }
    } else {

        $formError['nom'] = 'Veuillez renseigner le champ "Nom"';
    }

    if (!empty($_POST['prenom'])) {
        if (preg_match($textPattern, $_POST['prenom'])) {
            $contact = $_POST['prenom'];
        } else {
            $formError['prenom'] = 'Saisie incorrect!!';
        }
    } else {
        $formError['prenom'] = 'Veuillez renseigner le champ "Prénom"';
    }

    if (!empty($_POST['bday'])) {
      if (preg_match($bdayPattern, $_POST['bday'])) {
          $contact = $_POST['bday'];
      } else {
          $formError['bday'] = 'Saisie incorrect!!';
      }
  } else {
      $formError['bday'] = 'Veuillez renseigner le champ "Date de naissance"';
  }
    if (!empty($_POST['codep'])) {
        if (preg_match($postalPattern, $_POST['codep'])) {
            $postalCode = $_POST['codep'];
        } else {
            $formError['codep'] = 'Saisie incorrect!!';
        }
    } else {
        $formError['postalCode'] = 'Veuillez renseigner le champ "Code postal"';
    }

    if (!empty($_POST['email'])) {
        if (preg_match($mailPattern, $_POST['email'])) {
            $mail = $_POST['email'];
        } else {
            $formError['email'] = 'Saisie incorrect!!';
        }
    } else {
        $formError['email'] = 'Veuillez renseigner le champ "Email"';
    }
    if (!empty($_POST['question'])) {
      if (preg_match($textPattern, $_POST['question'])) {
          $contact = $_POST['question'];
      } else {
          $formError['question'] = 'Saisie incorrect!!';
      }
  } else {
      $formError['question'] = 'Veuillez renseigner le champ "Question"';
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Page contact</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
 <header>
  <div class="container">
    <div class="row d-none d-lg-flex align-items-center">
      <div class="col-sm-12 col-lg-3">
  <p class="image"><img src="../images/jarditou_logo.jpg" WIDTH=250 HEIGHT=75></div>
    <div class="d-sm-none d-lg-block col-lg-4"></div>
    <div class="col-sm-12 col-lg-5">
      <h2>
      <p class="text" style="line-height:100px;">Tout le jardin</p>
    </h2>
    </div></div>
  <div class="p-3 mb-2 bg-light text-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
      <a class="navbar-brand" href="#">Jarditou.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
      <a id="link" href="../Evaluation/bootstrap_index.html" class="text-dark" title="Accueil">Accueil</a>
    </li>
    <li class="nav-item">
      <a href="../Evaluation/bootstrap_tableau.html" class="text-dark" title="Tableau">Tableau</a>
    </li>
    <li class="nav-item">
      <a href="../Evaluation/bootstrap_contact.html" class="text-dark" title="Contact">Contact</a>
    </li>
  </ul>
      <div class="container">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
      </div>
    </div>
  </div><br>
</nav>
</header>
<img src="../images/promotion.jpg">
<div class="parent">
  <form name="formulaire" id="formulaire" action="http://bienvu.net/script.php" method="POST" > 
    <fieldset>
        <section>* Ces zones sont obligatoires</section>
        <legend>Vos coordonnées</legend>
        <div class="form-group">
          <label for="nom">Nom*</label>
          <input type="text" class="form-control" id="nom" placeholder="Veuillez saisir votre nom" >
        </div>
        <div class="form-group">
          <label for="prenom">Prénom*</label>
          <input type="text" class="form-control" id="prenom" placeholder="Veuillez saisir votre prénom">
        </div>
        <form>
          <label for="sexe">Sexe*</label><br>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="radio" id="radio1" >
              <label class="form-check-label" for="radio1">Féminin</label>
          </div>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="radio" id="radio2" value="option2" <?php if ($radio2Ok) echo "checked"; ?>>
              <label class="form-check-label" for="radio2" >Masculin</label>
          </div>
       </form>
       <form>
        <div>
          <label for="bday">Date de naissance*</label>
          <input type="text" class="form-control" id="bday" name="bday" placeholder="jj/mm/aaaa">
        </div>
      </form>
        <div class="form-group">
          <label for="codep">Code postal*</label>
          <input type="text" class="form-control" id="codep">
        </div>
        <div class="form-group">
          <label for="adresse">Adresse</label>
          <input type="text" class="form-control" id="adresse">
        </div>
        <div class="form-group">
          <label for="ville">Ville</label>
          <input type="text" class="form-control" id="ville">
        </div>
        <div class="form-group">
          <label for="email">Email*</label>
          <input type="text" class="form-control" id="email" placeholder="dave.loper@afpa.fr">
        </div>
        <legend>Votre demande</legend>
        <div class="form-group">
          <label for="selection">Sujet</label>
          <select id="select" class="form-control">
            <option value="">Veuillez sélectionner un sujet</option>
            <option value="commandes">Mes commandes</option>
            <option value="question">Question sur un produit</option>
            <option value="reclamation">Réclamation</option>
            <option value="autres">Autres</option>
        </select></div>
        <label for="bio">Votre question* :</label>
        <textarea class="form-control" id="question" rows="3"></textarea>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="cgu" >
      <label class="form-check-label" for="cgu">J'accepte le traitement informatique de ce formulaire</label><br>
        <form class="form1">
          <button type="submit" class="btn btn-dark mb-2" >Envoyer</button>
          <button type="reset" class="btn btn-dark mb-2" >Annuler</button>
        </form>
       </fieldset>
</form>
</div>
  <footer>
    <div class="p-3 mb-2 bg-dark text-white">
    <div><a id="link" class ="text-secondary" href="mentions.html" title="Mentions">Mentions légales</a>
      <a href="horaires.html" class ="text-secondary" title="Horaires">Horaires</a>
      <a href="plan.html" class ="text-secondary" title="Plan">Plan du site</a></p></div></div>
 </footer>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<?php

echo
<script>
     document.querySelector("#efface").onclick= function(){
           if(confirm("êtes-vous sur(e) de vouloir effacer?")){
                     document.getElementById("formulaire").reset();
              }
     }emp
</script>
}
else {  
    ?>
    <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Page contact</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
 <header>
  <div class="container">
    <div class="row d-none d-lg-flex align-items-center">
      <div class="col-sm-12 col-lg-3">
  <p class="image"><img src="images\jarditou_logo.jpg" WIDTH=250 HEIGHT=75></div>
    <div class="d-sm-none d-lg-block col-lg-4"></div>
    <div class="col-sm-12 col-lg-5">
      <h2>
      <p class="text" style="line-height:100px;">Tout le jardin</p>
    </h2>
    </div></div>
  <div class="p-3 mb-2 bg-light text-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
      <a class="navbar-brand" href="#">Jarditou.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
      <a id="link" href="U:\80010-92-01\Fabien\Front\Statique\Bootstrap\bootstrap index.html" class="text-dark" title="Accueil">Accueil</a>
    </li>
    <li class="nav-item">
      <a href="U:\80010-92-01\Fabien\Front\Statique\Bootstrap\bootstrap tableau.html" class="text-dark" title="Tableau">Tableau</a>
    </li>
    <li class="nav-item">
      <a href="U:\80010-92-01\Fabien\Front\Statique\Bootstrap\bootstrap contact.html" class="text-dark" title="Contact">Contact</a>
    </li>
  </ul>
      <div class="container">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
      </div>
    </div>
  </div><br>
</nav>
</header>
<img src="images\promotion.jpg">
<div class="parent">
  <form name="formulaire" id="formulaire" action="http://bienvu.net/script.php" method="POST" > 
    <fieldset>
        <section>* Ces zones sont obligatoires</section>
        <legend>Vos coordonnées</legend>
        <div class="form-group">
          <label for="nom">Nom*</label>
          <input type="text" class="form-control" id="nom" placeholder="Veuillez saisir votre nom" >
          <span id="alerte-nom"></span>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom*</label>
          <input type="text" class="form-control" id="prenom" placeholder="Veuillez saisir votre prénom">
          <span id="alerte-prenom"></span> 
        </div>
        <form>
          <label for="sexe">Sexe*</label><br>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="radio" id="radio1" value="option1" >
              <label class="form-check-label" for="radio1">Féminin</label>
          </div>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="radio" id="radio2" value="option2">
              <label class="form-check-label" for="radio2" >Masculin</label>
              <span id="alerte-sexe"></span>
          </div>
       </form>
       <form>
        <div>
          <label for="bday">Date de naissance*</label>
          <input type="text" class="form-control" id="bday" name="bday" placeholder="jj/mm/aaaa" >
          <span id="alerte-bday"></span> 
        </div>
      </form>
        <div class="form-group">
          <label for="codep">Code postal*</label>
          <input type="text" class="form-control" id="codep">
          <span id="alerte-codep"></span> 
        </div>
        <div class="form-group">
          <label for="adresse">Adresse</label>
          <input type="text" class="form-control" id="adresse">
        </div>
        <div class="form-group">
          <label for="ville">Ville</label>
          <input type="text" class="form-control" id="ville">
        </div>
        <div class="form-group">
          <label for="email">Email*</label>
          <input type="text" class="form-control" id="email" placeholder="dave.loper@afpa.fr">
          <span id="alerte-email"></span> 
        </div>
        <legend>Votre demande</legend>
        <div class="form-group">
          <label for="selection">Sujet</label>
          <select id="select" class="form-control">
            <option value="">Veuillez sélectionner un sujet</option>
            <option value="commandes">Mes commandes</option>
            <option value="question">Question sur un produit</option>
            <option value="reclamation">Réclamation</option>
            <option value="autres">Autres</option>
        </select></div>
        <label for="bio">Votre question* :</label>
        <textarea class="form-control" id="question" rows="3"></textarea>
        <span id="alerte-question"></span> 
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="cgu" >
      <label class="form-check-label" for="cgu"> J accepte le traitement informatique de ce formulaire</label><br>
        <form class="form1">
          <button type="submit" class="btn btn-dark mb-2" >Envoyer</button>
          <button type="reset" class="btn btn-dark mb-2" >Annuler</button>
        </form>
       </fieldset>
</form>
</div>
  <footer>
    <div class="p-3 mb-2 bg-dark text-white">
    <div><a id="link" class ="text-secondary" href="mentions.html" title="Mentions">Mentions légales</a>
      <a href="horaires.html" class ="text-secondary" title="Horaires">Horaires</a>
      <a href="plan.html" class ="text-secondary" title="Plan">Plan du site</a></p></div></div>
 </footer>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<?php


     
if (isset($_POST[nom]))
       {echo  <script> window.alert("Demande enregistré"); </script>;}


 echo
       <script>
            document.querySelector("#efface").onclick= function(){
                  if(confirm("êtes-vous sur(e) de vouloir effacer?")){
                            document.getElementById("formulaire").reset();
                     }
            }
       </script>;

}
?>