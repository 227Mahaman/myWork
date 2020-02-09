<?php
$title="Recherche sur les fikrs";
$accueilClass = "";
$fikrClass = "active";
$articleClass = "";
$contactClass= "";
?>
<div class="banniere"></div>
<div class="body">
    <main class="main">
        <div class="container">
        <?php if($errors): ?>
            <div class="alert alert-danger">
                Recherhe introuvable
            </div>
        <?php endif;?>
        <?php if($result)
            {
                foreach($result as $fikr): ?>
                <article class="article">
                    <!-- <a href="article.php" class="article-img"><img src="img/article.jpg" alt=""></a> -->
                    <div class="article-date">Publié le <?= $fikr->date;?></div>
                    <h2 class="article-title"><a href="<?= $fikr->url?>"><?= $fikr->titre ?></a></h2>
                    <div class="article-date">Langue : <?= $fikr->langue ?></div>
                    <p>Lectures: <span><?= $fikr->nombre ?></span> | Auteur: <span><?= $fikr->nom .' '. $fikr->prenom; ?></span> | Livre: <span><?= $fikr->livre ?></span></p>
                </article><?php endforeach; 
            }
        ?>
        </div>
    </main>
    <aside class="sidebar">
        <form method="post">
            <?= $form->input('search', 'Recheche'); ?><button class="btn btn-primary">Recheche</button>
        </form>
        <h4 class="sidebar-title">Langues</h4>
        <ul>
            <?php foreach($langues as $langue): ?>
                <li><a href="?p=fikrs.langue&id=<?= $langue->id;?>" data-count="<?= $langue->nombre;?>"><?= $langue->titre;?></a></li>
            <?php endforeach; ?>
        </ul>
        <hr>
        <h4 class="sidebar-title">Oulémas</h4>
        <ul>
            <?php foreach($auteurs as $auteur): ?>
            <li><a href="?p=fikrs.auteur&id=<?= $auteur->id;?>" data-count="<?= $auteur->nombre;?>"><?= $auteur->nom; $auteur->prenom;?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</div>