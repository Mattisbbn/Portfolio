<?php require_once('./partials/head.php')?>
<body>
    <?php require_once('./partials/header.php')?>
    <main class="main">

    <div  class="pages" id="accueil"><?php require_once('./pages/accueil/accueil.php')?></div>
    <div  class="pages" id="entreprise"><?php require_once('./pages/entreprise/entreprise.php')?></div>
    <div  class="pages" id="veille"><?php require_once('./pages/veille/veille.php')?></div>
    <div  class="pages" id="travaux"><?php require_once('./pages/travaux/travaux.php')?></div>
    <div  class="pages" id="projets"><?php require_once('./pages/projets/projets.php')?></div>
    <div  class="pages" id="competences"><?php require_once('./pages/competences/competences.php')?></div>

    </main>
<?php require_once('./partials/footer.php')?>

</body>
</html>