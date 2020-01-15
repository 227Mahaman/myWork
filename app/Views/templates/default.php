<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <link href="https://fonts.googleapis.com/css?family=Cardo:700|Montserrat:400,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="public/css/style.css">
    <link href="public/css/bootstrap.min.css" rel="stylesheet"><!-- ajout boostrap local -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="topbar">
        <nav>
            <a href="index.php?p=annonces.index" class="menu-item <?= $accueilClass;?>"><i class="fa fa-home"></i>Accueil</a>
            <!-- <a href="index.php?p=annonces.index" class="menu-item <?//= $annonceClass;?>">Annonces</a>-->
            <a href="index.php?p=fikrs.index" class="menu-item <?= $fikrClass;?>">Fikr</a>
            <a href="index.php?p=auteurs.index" class="menu-item <?= $auteurClass;?>">Oulémas</a>
            <a href="index.php?p=contacter.nous" class="menu-item <?= $contactClass;?>">Contact</a>
        </nav>
        <div class="social">
            <a href="#" title="Facebook"><i class="fa fa-facebook-square"></i></a>
            
            <a href="#" title="Twitter"><i class="fa fa-twitter-square"></i></a>
        </div>
    </header>

    <?= $content;?>

    <footer class="footer fixed-top"><!-- fixation du footer -->
        <p>Crée par des Jeunes Musulmans Informaticien du NIGER | &copy; Tous droits réservés à IslamNiger 2020</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>