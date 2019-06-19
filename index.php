<html>
    <?php include 'views/header/head.php';?>
    <body>
        <?php include 'views/header/header.php';?>
        <section class="slider-holder">
            <div class="container-fluid">
                <?php include 'views/slider.php';?>
            </div>
        </section>
        <section class="provideus-holder">
            <div class="container">
                <h2 class="page-title">Awesome Facts</h2>
                <?php include 'views/provide.php';?>
            </div>
        </section>
        <section class="services-holder">
            <div class="container">
                <h2 class="page-title">What We Do</h2>
                <?php include 'views/services.php';?>
            </div>
        </section>
        <section class="counter-holder">
            <div class="container">
                <?php include 'views/counter-block.php';?>
            </div>
        </section>
        <section class="opening-holder">
            <div class="container">
            <h2 class="page-title">Latest Projects</h2>
                <?php include 'views/openings.php';?>
            </div>
        </section>
        <section class="service-process-holder">
            <div class="container">
                <h2 class="page-title">Our Service Process</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <?php include 'views/service-process.php';?>
            </div>
        </section>
        <?php include 'views/footer/footer.php';?>
    </body>
</html>