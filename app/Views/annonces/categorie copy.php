<?php
use \App\App;
use App\Table\Annonce;
use App\Table\Categorie;
$accueil = "";
$annonce = "active";
$fikr = "";
$article = "";
$contact= "";

$categorie = Categorie::find($_GET[id]);
if($categorie === false){
    App::notFound();
}
$articles = Annonce::lastByCategory($_GET['id']);
$categories = Categorie::all();

$title = $categorie->titre;
?>
<div class="banniere"></div>
<div class="body">
    <main class="main">
        <h2  align="center"><marquee><?= $categorie->titre;?></marquee></h2>
        <div class="container">
            <?php if($articles === false)
            {
                foreach($articles as $post): ?>
                <article class="article">
                    <a href="article.php" class="article-img"><img src="article.jpg" alt=""></a>
                    <div class="article-date">Publié le <?= $post->date; ?></div>
                    <h2 class="article-title"><a href="<?= $post->url ?>" ><?= $post->titre; ?></a></h2>
                    <p>
                        <span class="important"><?= $post->extrait ?> <br>
                    <strong>Date: <i style="color: blue;"><?= $post->date; ?></i></strong> | <strong>Lieu: <i style="color: blue;"><?= $post->lieu; ?></i></strong></p>
                </article>
                <?php endforeach; 
            }  
            else { ?>
                <article class="article">
                    <h2>Pas d'Annonce pour cette catégorie !</h2>
                </article><? 
            }?>
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