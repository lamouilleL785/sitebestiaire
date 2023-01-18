<?php
include "header.php";
include "navbar.php"; ?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta>
    <link rel="icon" type="image/x-icon" href="assets/logo/felyne_small_monster_monster_hunter_rise_200_200px.png">
    <link rel="stylesheet" href="/html-css/navbar.css">
    <link rel="stylesheet" href="/js/script.js">
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    <link rel="stylesheet" href="/html-css/style.css">
    <link rel="stylesheet" href="carroussel1.css">



<body style="background-color:bisque">
    <div class="container">
        <div class="slider">
            <?php

            include 'lienbase.php';
            
            //préparation de  la requête
            $requete = $connexion->prepare('SELECT * FROM sitebestiaire');
            //execution de la requête
            $requete->execute();
            //affectation du résulat dans la vaiable $listeArticle
            $listeimages = $requete->fetchAll();

            //on trouve la colonne description à afficher selon la langue selectionnée
            //("description" ou "description_en" , voir + si on ajoute des langues

            foreach ($listeimages as $index => $ligne) { ?>

                <img <?php if ($index == 0) {
                            echo 'class="active" ';
                        } ?> src="<?= $ligne["render"] ?>">

                <input id="nomimage-<?= $index ?>" type="hidden" value="<?= $ligne["nom"] ?>">

            <?php } ?>
        </div>

    </div>
    <div class="cont-btn">
        <div class="btn-nav left">←</div>
        <div>
            <p id="nom-mob">
            </p>
        </div>
        <div class="btn-nav right">→</div>


    </div>

    <!-- Left and right controls -->

    












    </main>
    <script src="carroussel1.js"></script>
</body>
</head>

</html>