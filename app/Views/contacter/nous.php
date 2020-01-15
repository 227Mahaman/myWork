<?php 
$title="Nous contacter!";
$accueilClass = "";
$fikrClass = "";
$articleClass = "";
$contactClass= "active";
$auteurClass = "";
?>
<div class="banniere"></div>
<div class="body">
    <main class="main">
        <div class="container">
            <h1>Nos Objectifs</h1>
            <p>Toutes les louanges appartiennent à ALLAH, le seigneur de l'Univers...</p>
            <hr>
            <h1>Nous contacter</h1>
            <form method="post">
                <?= $form->input('nom', 'Votre Nom'); ?>
                <?= $form->input('email', 'Votre mail', ['type' => 'mail']); ?>
                <?= $form->input('objet', 'Objet'); ?>
                <?= $form->input('description', 'Description', ['type' => 'textarea']); ?>
                <button class="btn btn-primary">Envoyez</button>
            </form>
        </div>
    </main>
    <aside class="sidebar">
        <h4 class="sidebar-title">Annonces</h4>
        <ul>
            
        </ul>
        <hr>
        <h4 class="sidebar-title">Fikrs</h4>
        <ul>
            
        </ul>
    </aside>
</div>