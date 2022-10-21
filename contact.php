<?php
    include('hf main/header.php');
?>
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <!-- Contact Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p> Rk univarcity </p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-phone-alt"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>+91 24563 00112</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-envelope"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>gujarattourism@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <form method="post" >                        
                                <?php
                                    include("connection.php");
                                    if(isset($_POST['ok'])) {
                                    $q = "insert into contact(id, name, email, mobileno, message) values(NULL, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['mobileno']."','".$_POST['message']."');";
                                                            
                                        $result = mysqli_query($con, $q);
                                        if($result) {
                                            echo "<script>alert('Your data enterd successfully!!!'); </script>";
                                        } else {
                                            echo "<script>alert('something went wrong'); </script>";
                                        }
                                    }
                                    ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name" name="name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email" name="email" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="num" class="form-control" placeholder="mobileno" name="mobileno" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Message" name="message" required="required" ></textarea>
                                    </div>
                                    <div>
                                        <button class="btn" name="ok" type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
            <!-- Contact End -->

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
