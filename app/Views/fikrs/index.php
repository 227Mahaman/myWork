<?php
$title="Accueil";
$accueilClass = "";
$fikrClass = "active";
$articleClass = "";
$contactClass= "";
?>
<div class="banniere"></div>
<div class="body">
    <main class="main">
        <div class="container">
        <?php foreach($fikrs as $fikr): ?>
            <article class="article">
                <!-- <a href="article.php" class="article-img"><img src="img/article.jpg" alt=""></a> -->
                <div class="article-date">Publié le <?= $fikr->date;?></div>
                <h2 class="article-title"><a href="<?= $fikr->url?>"><?= $fikr->titre ?></a></h2>
                <p>Lectures: <span>11</span> | Auteur: <span><?= $fikr->nom .' '. $fikr->prenom; ?></span> | Livre: <span><?= $fikr->livre ?></span></p>
            </article>
        <?php endforeach; ?>
        </div>
    </main>
    <aside class="sidebar">
        <h4 class="sidebar-title">Catégories</h4>
        <ul>
            <?php foreach($categories as $categorie): ?>
                <li><a href="?p=categories.single.index<?= $categorie->id;?>" data-count="10"><?= $categorie->titre;?></a></li>
            <?php endforeach; ?>
        </ul>
        <hr>
        <h4 class="sidebar-title">Oulémas</h4>
        <ul>
            <?php foreach($auteurs as $auteur): ?>
            <li><a href="?=auteur.single&id=<?= $auteur->id;?>"><?= $auteur->nom; $auteur->prenom;?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</div> 