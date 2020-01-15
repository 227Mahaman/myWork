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
                <a href="article.php" class="article-img"><img src="<?= $auteur->photo ?>" alt="Photo de <?= $auteur->nom .' '. $auteur->prenom; ?>"></a>
                <br>
                <h2 class="article-title"><a href="<?= $auteur->url?>"><?= $auteur->nom .' '. $auteur->prenom; ?></a></h2>
                <div class="article-date">Région de : <?= $auteur->titre;?></div>
                <p>Bibliographie: <?= $auteur->description ?></p>
            </article>
        <?php endforeach; ?>
        </div>
    </main>
    <aside class="sidebar">
        <h4 class="sidebar-title">Région</h4>
        <hr>
        <ul>
            <?php foreach($regions as $region): ?>
                <li><a href="<?= $region->url ?>" data-count="<?= $region->nombre; ?>"><?= $region->titre; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</div> 