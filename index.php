<?php
require_once('private/initialize.php');
$page = basename(__FILE__);

// option values
$services = [
    ['value'=>'', 'name' => 'select service'],
    ['value'=>'drug test services', 'name' => 'Drug Test Service'],
    ['value'=>'rehabilitation services', 'name' => 'Rehabilitation Services'],
    ['value'=>'nursing services', 'name' => 'Nursing Services'],
    ['value'=>'counselling services', 'name' => 'Counselling Services'],
    ['value'=>'psychiatric service', 'name' => 'Psychiatric Service'],
    ['value'=>'secondary education', 'name' => 'Secondary Education'],

];
// default values
$date ='';
$fname ='';
$lname ='';
$message = '';
$service='';
$phone ='';
$time = '';

// check if data has been submitted
if(is_post_request()) {
    //send data to deb

    $date =clean_text($_POST['date']);
    $fname =clean_text($_POST['firstname']);
    $lname =clean_text($_POST['lastname']);
    $message = clean_text($_POST['message']);
    $service=clean_text($_POST['service']);
    $phone =clean_text($_POST['phone']);
    $time =clean_text($_POST['time']);

    
    $query = "INSERT INTO appointments ";
    $query .= "(fname, lname, date, time, phone, service, message) ";
    $query .= "VALUES('$fname', '$lname', '$date', '$time', '$phone', '$service', '$message')";

    $results = mysqli_query($db, $query);

    echo $results;

    set_message( $results);
    if($results) {
        $date ='';
        $fname ='';
        $lname ='';
        $message = '';
        $service='';
        $phone ='';
    }else {
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>St Nicholas Rehabilitation Center</title>
    <?php require './base/head.html'; ?>
</head>

<body>
    <!-- get navbar -->
    <?php require './base/navbar.php'; ?>

    <!-- get slider -->
    <?php require './base/slider.php'; ?>


    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-consult">
        <div class="container">
            <div class="row d-flex no-gutters align-items-stretch	consult-wrap">
                <div class="col-md-5 wrap-about align-items-stretch d-flex">
                    <div class="ftco-animate bg-primary align-self-stretch px-4 py-5 w-100">
                        <h2 class="heading-white mb-4">Book Consultation</h2>
                        <form id="appointmentform" action="<?php $_SERVER['PHP_SELF']?>"
                            class="appointment-form ftco-animate" method="post">
                            <div class="form-group">
                                <input id="date" name="date" type="date" class="form-control"
                                    value="<?php echo $date ?>" placeholder="Appointment Date" required>
                            </div>
                            <div class="form-group">
                                <input id="time" name="time" type="time" class="form-control"
                                    value="<?php echo $time ?>" placeholder="Appointment Time" required>
                            </div>
                            <div class="form-group">
                                <input id="firstname" name="firstname" type="text" value="<?php echo $fname ?>"
                                    class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="form-group">
                                <input id="lastname" name='lastname' type="text" value="<?php echo $lname ?>"
                                    class="form-control" placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="service" id="service" class="form-control" required>

                                            <?php  foreach($services as $service):?>
                                            <option value=<?php echo $service['value']?>><?php echo $service['name']?>
                                            </option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input id="phone" name="phone" value="<?php echo $phone ?>" type="text"
                                    class="form-control" placeholder="Phone" required>
                            </div>
                            <div class="form-group">
                                <textarea id="message" name="message" id="" value="<?php echo $message ?>" cols="30"
                                    rows="2" class="form-control" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-group">
                                <button id="appointmentSub" type="submit" name="submit"
                                    class="btn btn-secondary py-3 px-4"> Book Now</button>
                            </div>
                            <div class="form-group">
                                <?php if (isset($_SESSION['message'])) : ?>
                                <?php require './base/message.php'; ?>
                                <?php endif ?>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- about section  -->
                <?php require './base/about_sec.php'; ?>
            </div>
        </div>
    </section>

    <section class="ftco-intro ftco-no-pb img" style="background-image: url(images/contact-rehab.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-0">You Always Get the Best Guidance</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about ftco-no-pt ftco-no-pb ftco-counter" id="section-counter">
        <div class="container consult-wrap">
            <div class="row d-flex align-items-stretch">
                <div class="col-md-6 wrap-about align-items-stretch d-flex">
                    <div class="img" style="background-image: url(images/rehab2.jpeg);"></div>
                </div>
                <div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
                    <div class="heading-section mb-4">
                        <span class="subheading">Welcome to St Nicholas Rehabilitation Center and Nursing Home</span>

                    </div>
                    <p>At St Nicholas Rehabilitation Center and Nursing Home, we have recognized the need to help the
                        community counter drug addiction through quality rehabilitation services.</p>
                    <div class="tabulation-2 mt-4">
                        <ul class="nav nav-pills nav-fill d-md-flex d-block">
                            <li class="nav-item">
                                <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span
                                        class="ion-ios-home mr-2"></span> Our Mission</a>
                            </li>
                            <li class="nav-item px-lg-2">
                                <a class="nav-link py-2" data-toggle="tab" href="#home2"><span
                                        class="ion-ios-person mr-2"></span> Our Vision</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2" data-toggle="tab" href="#home3"><span
                                        class="ion-ios-mail mr-2"></span> Our Value</a>
                            </li>
                        </ul>
                        <div class="tab-content bg-light rounded mt-2">
                            <div class="tab-pane container p-0 active" id="home1">
                                <p> To lead in the fight against alcohol and drug abuse through prevention treatment,
                                    rehabilitation and offering training on employability skills as a follow up to the
                                    affected adults and youths.</p>
                            </div>
                            <div class="tab-pane container p-0 fade" id="home2">
                                <p> A society free from alcohol and drug abuse trained in employability skills.</p>
                            </div>
                            <div class="tab-pane container p-0 fade" id="home3">
                                <ul>
                                    <li>Self-discipline</li>
                                    <li>Consistency</li>
                                    <li>Positivity</li>
                                    <li>Passion</li>
                                    <li>Education</li>
                                    <li>Patriotism</li>
                                    <li>Respect</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-color pt-3">
        <div class="container mb-2">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Why Choose Us?</h2>
                    <p>There are many rehabilitations centers out there with different services. St Nicholas
                        Rehabilitation Center and Nursing Home is unique as compared to other rehabilitation centers due
                        to various reasons which includes;</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <ul>
                            <li><b>Maximum Security</b>- we have a spacious compound with high perimeter fence</li>
                            <li><b>continuity of education </b>- we offer secondary education and vocation training
                                after rehab process</li>
                            <li>Wide range of services all offered under one roof</li>
                            <li>Medical treatments of the rehabilitated clients can be taken care of by the nurses
                                available</li>
                            <li>The training offered to the clients is advantageous to them since they can gain
                                employment after the rehabilitation period</li>
                            <li>Employment is offered directly or indirectly after full recovery to avoid relapse</li>
                            <li>Clients are engaged in different activities during the rehabilitation process. They are
                                not confined in their beds, thus no boredom. Such activities includes games, body
                                fitness services through our well-equipped gymnasium, library, watching educative and
                                positively encouraging movies and many more</li>
                            <li>After care services is given in a unique way through employing our clients after
                                rehabilitation hence increasing their productivity to the society.</li>
                            <li>Follow ups are ensured since the recovered clients are visited after being rehabilitated
                                at their various destinations. Examples are at place of work, homes or their readmitted
                                schools and universities</li>
                            <li>Our rehabilitation center partners with RITI Association of the Unemployed Professionals
                                which assures the recovered clients of employment, financing their talents and dreams
                                and helping them initiate business enterprises.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="./images/50.jpeg" alt="st nichola" class="img-fluid">
                        <img src="./images/gallery/5.JPG" alt="st nichola" class="img-fluid d-none d-md-block">
                    </div>
                </div>
            </div>
    </section>


    <!-- footer -->
    <?php require './base/footer.html'; ?>

    <script>

    </script>