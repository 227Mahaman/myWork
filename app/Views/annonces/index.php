<?php 
$title="Accueil";
$accueilClass = "active";
$fikrClass = "";
$articleClass = "";
$contactClass= "";
$auteurClass = "";
?>
<div class="banniere"></div>
<div class="body">
    <main class="main">
        <div class="container">
        <?php foreach($annonces as $post): ?>
            <article class="article">
                <a href="article.php" class="article-img"><img src="article.jpg" alt=""></a>
                <div class="article-date">Publié le <?= $post->date; ?></div>
                <h2 class="article-title"><a href="<?= $post->url ?>" ><?= $post->titre; ?></a></h2>
                <p>
                    <span class="important"><?= $post->extrait ?> <br>
                <strong>Date: <i style="color: blue;"><?= $post->date; ?></i></strong> | <strong>Lieu: <i style="color: blue;"><?= $post->lieu; ?></i></strong></p>
            </article>
        <?php endforeach; ?>
        </div>
    </main>
    <aside class="sidebar">
        <h4 class="sidebar-title">Annonces</h4>
        <ul>
            <?php foreach($categories as $categorie): ?>
                <li><a href="<?= $categorie->url ?>" data-count="1"><?= $categorie->titre; ?></a></li>
            <?php endforeach; ?>
        </ul>
        <hr>
        <h4 class="sidebar-title">Fikrs</h4>
        <ul>
            <?php foreach($fikrs as $fikr): ?>
                <li><a href="<?= $fikr->url ?>" data-count=""><?= $fikr->titre; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</div>