<?php
$title="Annonce";
$accueilClass = "";
$annonceClass = "active";
$fikrClass = "";
$articleClass = "";
$contactClass= "";
?>
<div class="banniere"></div>
<div class="body">
    <main class="main">
        <div class="container">
            <article class="article">
                <a href="article.php" class="article-img"><img src="<?= $annonce->photo ?>" alt=""></a>
                <div class="article-date">Publié le <?= $annonce->date; ?></div>
                <h2 class="article-title"><a href="<?= $annonce->url; ?>" ><?= $annonce->titre; ?></a></h2>
                <h3><?= $annonce->categorie;?></h3>
                <p>
                    <span class="important"><?= $annonce->description; ?> <br>
                <strong>Date: <i style="color: blue;"><?= $annonce->date; ?></i></strong> | <strong>Lieu: <i style="color: blue;"><?= $annonce->lieu; ?></i></strong></p>
            </article>
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
        <h4 class="sidebar-title">Fikr</h4>
        <ul>
            <li><a href="#" data-count="110">Majliss</a></li>
            <li><a href="#" data-count="80">Tafsir</a></li>
            <li><a href="#" data-count="66">Confèrence</a></li>
            <li><a href="#" data-count="21">Ressources</a></li>
            <li><a href="#" data-count="11">Bonnes pratiques</a></li>
        </ul>
    </aside>
</div>