<html>
    <?php include 'views/header/head.php';?>
    <body>
        <?php include 'views/header/header.php';?>
        <section class="slider-holder">
            <?php include 'views/slider.php';?>
        </section>
        <section class="provideus-holder">
            <div class="container">
                <div class="title-holder text-center">
                    <h2 class="page-title">Awesome <span class="text-primary">Facts</span></h2>
                </div>
                <?php include 'views/provide.php';?>
            </div>
        </section>
        <section class="services-holder">
            <div class="container">
                <div class="title-holder text-center">
                    <h2 class="page-title">What <span class="text-primary">We</span> Do</h2>
                </div>
                <?php include 'views/services.php';?>
            </div>
        </section>
        <section class="counter-holder">
            <div class="container">
                <div class="title-holder text-center">
                    <h2 class="page-title">Awesome <span class="text-primary">Facts</span></h2>
                </div>
                <?php include 'views/counter-block.php';?>
            </div>
        </section>
        <section class="opening-holder">
            <div class="container">
                <div class="title-holder text-center">
                    <h2 class="page-title">Latest <span class="text-primary">Projects</span></h2>
                </div>
                <?php include 'views/openings.php';?>
            </div>
        </section>
        <section class="service-process-holder">
            <div class="container">
                <div class="title-holder text-center">
                    <h2 class="page-title">Our <span class="text-primary">Service</span> Process</h2>
                    <p class="sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <?php include 'views/service-process.php';?>
            </div>
        </section>
        <?php include 'views/footer/footer.php';?>
        <?php include 'views/footer/script.php';?>
    </body>
</html>