<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        
        <div class="container">
            
            <div class="navbar-header">
                
               <a class="navbar-brand" href="?p=admin.annonces.index">Administration</a>
              <a class="navbar-brand" href="?p=admin.auteurs.index">Auteur</a>
              <a class="navbar-brand" href="?p=admin.categories.index">Catégorie</a>
              <a class="navbar-brand" href="?p=admin.fikrs.index">Fikr</a>
              <a class="navbar-brand" href="?p=admin.datas.index">Data</a>
              <a class="navbar-brand" href="?p=admin.langues.index">Langue</a>
              <a class="navbar-brand" href="?p=admin.regions.index">Region</a>
              <a class="navbar-brand" href="?p=users.deconnexion">Déconnexion</a>
                
            </div>
            
        </div>
        
    </nav>

    <div class="container">

        <div class="starter-template" style="padding-top: 100px;">
            
            <?= $content; ?>
        
        </div>

    </div>
    
  </body>
</html>
