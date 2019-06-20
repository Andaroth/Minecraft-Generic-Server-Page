<!doctype HTML>
<?php require('./config/config.php'); ?>
<html lang="fr">
    <head>
        <?php include('./parts/headbals.php'); ?>
        <title>Server Minecraft <?php echo($server_name); ?></title>
    </head>

    <body>
        <main>
            <section id="accueil">
                <div class="row">
                    <div class="col s12 m4">
                        <?php include('./parts/about.php'); ?>
                    </div>
                    <div class="col s12 m5">
                        <?php include('./parts/techs.php'); ?>
                        <?php /* include('./parts/carousel.php'); */ ?>
                    </div>
                    <div class="col s12 m3">
                        <?php include('./parts/ourplugins.php'); ?>
                    </div>
                </div>
            </section>
        </main>

        <section id="rejoindre" class="grey darken-4 white-text scrollspy">
            <div class="container">
                <?php include('./parts/joinus.php'); ?>
            </div>
        </section>

        <?php 
            include('./parts/footer.php'); 
            include('./parts/jscripts.php'); 
        ?>
    </body>
</html>
