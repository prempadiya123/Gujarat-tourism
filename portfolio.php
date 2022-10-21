<?php
    include('hf main/header.php');
?>
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>See Gujrat - As Per Your Interest</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <a href="portfolio.php">Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Portfolio Start -->
            <div class="portfolio">
                <div class="container">
                    <div class="section-header">
                        <h2>Our portfolio</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".first">Caves</li>
                                <li data-filter=".second">Palace</li>
                                <li data-filter=".third">religion</li>
                                <li data-filter=".fourth">heritage site</li>
                                <li data-filter=".fifth">fair & festival</li>
                                <li data-filter=".sixth">gujrat mahotsv</li>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio/caves2.jpeg" alt="Portfolio Image">
                                <figure>
                                    <a href="p-caves.php">Caves</a>      
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                            <div class="portfolio-wrap">
                                <img style="height: 260px;" src="img/portfolio/palace2.jpeg" alt="Portfolio Image">
                                <figure>
                                    <a href="p-palace.php">Palace</a>                
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                            <div class="portfolio-wrap">
                                <img style="height: 260px;" src="img/portfolio/rel-1.png" alt="Portfolio Image">
                                <figure>
                                    <a href="p-religion.php">Religion</a>                       
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item fourth">
                            <div class="portfolio-wrap">
                                <img style="height: 260px;" src="img/portfolio/heritage-1.jpeg" alt="Portfolio Image">
                                <figure>
                                    <a href="p-heritage.php">Heritage site</a>                 
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item fifth">
                            <div class="portfolio-wrap">
                                <img src="img/portfolio/fair-1.jpeg" alt="Portfolio Image">
                                <figure>
                                    <a href="p-fair&festival.php">Fair & Fastival</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item sixth">
                            <div class="portfolio-wrap">
                                <img style="height: 260px;" src="img/portfolio/kkm1.jpeg" alt="Portfolio Image">
                                <figure>
                                    <a href="p-gujrat mhotsav.php">Gujrat Mahotsv</a>
                                </figure> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 load-more">
                            <a class="btn" href="">Load More</a>
                        </div>
                    </div>
                </div>
            </div>  
            <!-- Portfolio Start -->
             

            <?php
                include('hf main/footer.php');
            ?>            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
