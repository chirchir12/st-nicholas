<?php
require_once('./private/initialize.php');
$page = basename(__FILE__);
// var declaration
$name = '';
$email = '';
$subject='';
$message = '';

if(is_post_request()) {
    $name = clean_text($_POST['name']);
    $email = clean_text($_POST['email']);
    $subject=clean_text($_POST['subject']);
    $message = clean_text($_POST['message']);

    $query = "INSERT INTO contact ";
    $query .= "(name, email, subject, message) ";
    $query .= "VALUES('$name', '$email', '$subject', '$message')";

    $results = mysqli_query($db, $query);
    set_message( $results);
    if ($results) {
        echo 'successfully sent';

    }else {
        echo 'failed to saved';
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <?php require './base/head.html'; ?>
</head>

<body>
    <?php require './base/navbar.php'; ?>
    <!-- END nav -->


    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/contact-rehab.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Contact</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info justify-content-center">
                <div class="col-md-10">
                    <div class="row mb-5">
                        <div class="col-md-4 text-center d-flex">
                            <div class="border w-100 p-4 shadow-lg">
                                <div class="icon">
                                    <span class="icon-map-o"></span>
                                </div>
                                <p><span>Address:</span> Meru, Along Meru Maua Road Kiajahi, Kalerene Stage</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center d-flex">
                            <div class="border w-100 p-4 shadow-lg">
                                <div class="icon">
                                    <span class="icon-tablet"></span>
                                </div>
                                <div>
                                    <div><span>Phone:</span> <a href="tel://+254715773374">Call us: +254 715773374</a>
                                    </div>
                                    <div><span>Phone:</span> <a href="tel://+254715773440">Call us: +254
                                            715773440</a></div>
                                    <div><span>Phone:</span> <a href="tel://+254715773440">Call us: +254
                                            704393969</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center d-flex">
                            <div class="border w-100 p-4 shadow-lg">
                                <div class="icon">
                                    <span class="icon-envelope-o"></span>
                                </div>
                                <p><span>Email:</span> <a
                                        href="mailto:director.stnicholasriti@gmail.com">director.stnicholasriti@gmail.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-5 text-center ">
                            <div class="border w-100 p-4 shadow-lg">
                                <div class="icon">
                                    <span class="icon-map-o"></span>
                                </div>
                                <div class="right-content d-flex flex-column">
                                    <a class="social-icon" href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
                                    <a class="social-icon" href="#"><i class="fab fa-twitter"></i> Twitter</a>
                                    <a class="social-icon" href="#"><i class="fab fa-instagram"></i> Instagram</a>
                                    <a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i> Linkedin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row block-9 justify-content-center mb-5">
                <div class="col-12 col-md-10 mb-md-5">
                    <h2 class="text-center">If you got any questions <br>please do not hesitate to send us a
                        message
                    </h2>
                    <form method="post" id="contactform" action="<?php echo $_SERVER['PHP_SELF']?>"
                        class="border p-5 contact-form shadow-lg">
                        <div class="form-group">
                            <input name="name" id="cname" type="text" class="form-control" placeholder="Your Name"
                                required>
                        </div>
                        <div class="form-group">
                            <input name="email" id="cemail" type="text" class="form-control" placeholder="Your Email"
                                required>
                        </div>
                        <div class="form-group">
                            <input name="subject" id="csubject" type="text" class="form-control" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="cmessage" cols="30" rows="7" class="form-control"
                                placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="contactSub" class="btn btn-primary py-3 px-5">Send
                                Message</button>
                        </div>
                        <div class="form-group">
                            <span id="contact-results"></span>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container-fluid px-0">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1ke0pAc_Rk8rBvTBAOMt2wvY_A_4dXU1H" width="100%"
                        height="480"></iframe>
                </div>
            </div>
        </div>
    </section>

    <?php require './base/footer.html' ?>