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
            <?php foreach($auteur as $fk): ?>
                <article class="article">
                    <!-- <a href="article.php" class="article-img"><img src="img/article.jpg" alt=""></a> -->
                    <div class="article-date">Publié le <?= $fk->date;?></div>
                    <h2 class="article-title"><a href="" target="_blank"><?= $fk->titre ?></a></h2>
                    <p>
                        <span class="important">Livre: <?= $fk->livre;?>
                    </p>
                </article>
            <?php endforeach; ?>
        </div>
    </main>

</div>