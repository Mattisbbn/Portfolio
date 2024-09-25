<?php require_once('./partials/head.php')?>
<body>
<main class="main">
    <?php require_once('./partials/header.php');
    
    
    if(isset($_GET["accueil"])){
        require_once('./pages/accueil/accueil.php');
    }elseif(isset($_GET['entreprise'])){
        require_once('./pages/entreprise/entreprise.php');
    }elseif(isset($_GET['veille'])){
        require_once('./pages/veille/veille.php');
    }elseif(isset($_GET['travaux'])){
        require_once('./pages/travaux/travaux.php');
    }elseif(isset($_GET['projets'])){
        require_once('./pages/projets/projets.php');
    }elseif(isset($_GET['competences'])){
        require_once('./pages/competences/competences.php');
    }elseif(isset($_GET['fiche-de-synthese'])){
        require_once('./pages/fiche-de-synthese/fiche-de-synthese.php');
    }elseif(isset($_GET['integration-statique-apple'])){
        require_once('pages/travaux/integration-apple.php');
    }elseif(isset($_GET['calculatrice-js'])){
        require_once('pages/travaux/calculatrice-js.php');
    }
    else{
       require_once('./pages/accueil/accueil.php');
    }

    require_once('./partials/footer.php');
    ?>
    </main>

</body>
</html>