<?php
$title="Accueil";
$accueilClass = "";
$fikrClass = "";
$articleClass = "";
$contactClass= "";
$auteurClass = "active";
?>
<div class="banniere"></div>
<div class="body">
    <main class="main">
        <div class="container">
        <?php foreach($auteurs as $auteur): ?>
            <article class="article">
                <a href="article.php" class="article-img"><img src="img/article.jpg" alt="Photo de <?= $auteur->nom .' '. $auteur->prenom; ?>"></a>
                <div class="article-date">Région de : <?= $auteur->titre;?></div>
                <h2 class="article-title"><a href="<?= $auteur->url?>"><?= $auteur->nom .' '. $auteur->prenom; ?></a></h2>
            </article>
        <?php endforeach; ?>
        </div>
    </main>
    <aside class="sidebar">
        <h4 class="sidebar-title">Région</h4>
        <ul>
            <?php foreach($auteurs as $auteur): ?>
                
            <?php endforeach; ?>
        </ul>
        <hr>
        <h4 class="sidebar-title">Oulémas</h4>
        <ul>
            
        </ul>
    </aside>
</div> 