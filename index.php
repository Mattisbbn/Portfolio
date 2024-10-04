<?php require_once('./partials/head.php') ?>

<body>
    <main class="main">
        <?php require_once('./partials/header.php');

        if(!empty($_GET)){
            foreach ($_GET as $key => $value) {
                if (file_exists('pages/travaux/'.$key.'.php')) {
                    require_once('pages/travaux/'.$key.'.php');
                } elseif (file_exists('./pages/'.$key.'/'.$key.'.php')) {
                    require_once('./pages/'.$key.'/'.$key.'.php');
                } else {
                    require_once('./pages/accueil/accueil.php');
                }
            }
        }else{
            require_once('./pages/accueil/accueil.php');
        }
        require_once('./partials/footer.php');

        ?>
    </main>

</body>

</html>