<?php
$title="Fikrs";
$accueilClass = "";
$fikrClass = "active";
$articleClass = "";
$contactClass= "";
?>
<div class="banniere"></div>
<div class="body">
    <main class="main">
        <div class="container">
            <?php foreach($datas as $data): ?>
                <article class="article">
                    <!-- <a href="article.php" class="article-img"><img src="img/article.jpg" alt=""></a> -->
                    <div class="article-date">Publié le <?= $data->date;?></div>
                    <h2 class="article-title"><a href="<?= $data->chemin; ?>" download="<?= $data->lecture ?>"><?= $data->lecture ?></a></h2>
                    <p>
                        <span class="important"><a href="<?= $data->chemin; ?>"><strong><i style="color: blue;">Lire</i></strong></a> |
                        <span class="important"><a href="<?= $data->chemin; ?>" download="<?= $data->lecture ?>"><strong><i style="color: blue;">Télécharger</i></strong></a>
                    </p>
                </article>
            <?php endforeach; ?>
        </div>
    </main>
    <aside class="sidebar">
        <h4 class="sidebar-title">Auteur</h4>
        <ul>
            <?php foreach($auteur as $aut): ?>
            <li><a href="#"><?= $aut->nom . ' '. $aut->prenom; ?></a></li>
            <?php endforeach; ?>
        </ul>
        <hr>
        <h4 class="sidebar-title">Fikrs</h4>
        <ul>
            <?php foreach($auteur as $fikr): ?>
                <li><a href="<?= $fikr->url ?>" data-count="1"><?= $fikr->titre; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</div>