<div class="bg-top navbar-light d-flex flex-column-reverse">
    <div class="top-social-menu py-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="social mb-0">
                        <a href="#"><i class="ion-logo-facebook"></i><span class="sr-only">Facebook</span></a>
                        <a href="#"><i class="ion-logo-twitter"></i><span class="sr-only">Twitter</span></a>
                        <a href="#"><i class="ion-logo-googleplus"></i><span class="sr-only">Googleplus</span></a>
                    </p>
                </div>
                <div class="col text-right">
                    <a href="#" class="btn-link">Request A Quote</a>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">

    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="index.php">RITI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <?php if ($page == 'index.php') { ?><li class="nav-item"><a href="index.php"
                        class="nav-active nav-link"> HOME </a></li>
                <?php } else { ?><li class="nav-item"><a class="nav-link" href="index.php"> HOME </a><?php } ?>

                    <?php if ($page == 'about.php') { ?>
                <li class="nav-item"><a href="about.php" class="nav-active nav-link"> ABOUT </a></li>
                <?php } else { ?><li class="nav-item"><a class="nav-link" href="about.php"> ABOUT </a><?php } ?>

                    <?php if ($page == 'services.php') { ?>
                <li class="nav-item"><a href="services.php" class="nav-active nav-link"> SERVICES </a></li>
                <?php } else { ?><li class="nav-item"><a class="nav-link" href="services.php"> SERVICES </a><?php } ?>

                    <?php if ($page == 'contact.php') { ?>
                <li class="nav-item"><a href="contact.php" class="nav-active nav-link"> CONTACT </a></li>
                <?php } else { ?><li class="nav-item"><a class="nav-link" href="contact.php"> CONTACT </a><?php } ?>

                    <?php if ($page == 'gallery.php') { ?>
                <li class="nav-item"><a href="gallery.php" class="nav-active nav-link"> GALLERY </a></li>
                <?php } else { ?><li class="nav-item"><a class="nav-link" href="gallery.php"> GALLERY </a><?php } ?>




            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->