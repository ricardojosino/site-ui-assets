<?php
    include 'road-runner/SpeedyGonzales.php';
?>
<!doctype html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="src/_libs/utilities/utility.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="src/_libs/animate/animate.css">
        <title><?php echo SpeedyGonzales::getSiteTitle() ?></title>

        <!-- CARREGA OS ESTILOS EM CSS -->
        <style>
            <?php SpeedyGonzales::getStyleTheme(SpeedyGonzales::getMarvin()->install->theme);?>
            <?php SpeedyGonzales::getStyleComponents();?>
            <?php SpeedyGonzales::getStylePage('home');?>
        </style>

    </head>
    <body class="<?= SpeedyGonzales::getBodyClass() ?>">

    <?php SpeedyGonzales::loadTemplate() ?>

    <!-- CARREGA OS SCRIPS EM JS -->
    <script src="src/_libs/jquery/jquery-3.6.4.min.js"></script>
    <script src="src/_libs/slick-1.8.1/slick/slick.min.js"></script>
    <script><?php SpeedyGonzales::getScriptComponents(); ?></script>

    <script>

    </script>
    </body>
</html>
