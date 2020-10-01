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
                <h2 class="article-title"><a href="<?= $fikr->chemin; ?>" download="<?= $fikr->lecture ?>"><?= $fikr->lecture ?></a></h2>
                <figure>
                <audio title="<?= $fikr->titre; ?>" preload="auto" controls loop>
                    <source src="<?= $fikr->lecture; ?>" type="audio/mp3">
                </audio>
                </figure>
            </article>
        <?php endforeach; ?>
        
        </div>
    </main>
</div> s