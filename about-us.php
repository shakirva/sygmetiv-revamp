<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
   
    <?php include('fragments/css.php'); ?>
</head>

<style>
    section {
        background-color: #1b1b1b;
        border-radius: 15px;
    }
    h3 {
        color: #fff;
    }
    img {
        max-width: 120px;
    }



    .connect-card {
    text-decoration: none;
    color: inherit; /* Inherit the parent color */
  
}
.text-wrapper {
    position: relative;
    text-align: center;
}

.hero-title {
    font-size: 2em;
    margin-bottom: 10px;
}

#changing-word {
    display: inline-block;
    position: relative;
    animation: fade-up 9s ease-in-out infinite;
}

@keyframes fade-up {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    30% {
        opacity: 1;
        transform: translateY(0);
    }
    70% {
        opacity: 1;
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        transform: translateY(-20px);
    }
}

</style>

<style>

    .icon {
        font-size: 5vw;
      }
    
     /* Remove underline from links and maintain default color */
    .connect-card {
        text-decoration: none;
        color: inherit; /* Inherit the parent color */
      
    }
    .text-wrapper {
        position: relative;
        text-align: center;
    }
    
    .hero-title {
        font-size: 2em;
        margin-bottom: 10px;
    }
    
    #changing-word {
        display: inline-block;
        position: relative;
        animation: fade-up 9s ease-in-out infinite;
    }
    
    @keyframes fade-up {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        30% {
            opacity: 1;
            transform: translateY(0);
        }
        70% {
            opacity: 1;
            transform: translateY(0);
        }
        100% {
            opacity: 0;
            transform: translateY(-20px);
        }
    }
    
    
    .card {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      border-radius: 0.5rem;
      background-color: rgba(217, 217, 217, 0.09);
      padding: 1rem 0.5rem;
      /* width: 40%; */
      z-index: -99;
    }
    
    
    
     </style>

<body class=" text-white" style="background-color: black;">
    <div class="container">

    <?php include('fragments/header.php'); ?>

    <!-- Hero Section -->
    <section class="text-center" style="background: url('your-background-image.jpg') no-repeat center center; background-size: cover; padding: 50px;">
        <div class="containerz-1">
            <h1 class="display-3 fw-bold" >About Us</h1>
            <p class="text-light">Home / About Us</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 d-none d-lg-block" style="background-color: black;">
        <div class="container">
            <div class="row align-items-start"> <!-- Changed align-items-center to align-items-start -->
                <div class="col-md-6">
                    <img src="assets/images/about-hero.png" alt="about us image" class="img-fluid rounded-4 " style="height: 450px; width: 570px; object-fit: cover;">
                </div>
                <div class="col-md-6 text-start " style="margin-top: 70px;"> <!-- Changed text alignment to left -->
                    <h4 class="text-uppercase" style="letter-spacing: 2px; margin-bottom: 50px; margin-top: -50px;">about us</h4>
                    <h2 class="display-5 fw-bold " style="margin-bottom: 60px;">Solving Business Pain Points </h2>
                    <p class="mt-3" >Sygmetiv is your trusted partner in overcoming business challenges. We specialize in identifying and addressing your unique pain points through innovative technology solutions and synergistic partnerships. </p>
                    <a href="#" class="btn btn-outline-light rounded-4 px-5" style="margin-top: 40px;">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    

    <section class="m-5 d-block d-lg-none" style="background-color: black;">
        <div class="container">
            <div class="row align-items-start"> <!-- Changed align-items-center to align-items-start -->
               
                <div class="col-md-6 text-start " style="margin-top: 70px;"> <!-- Changed text alignment to left -->
                    <h4 class="text-uppercase" style="letter-spacing: 2px; margin-top: -100px; ">about us</h4>
                    <h2 class="display-5 fw-bold " >We Always Make The Best</h2>
                    <p class="mt-3" style="text-align: justify;">Sygmetiv is your trusted partner in overcoming business challenges. We specialize in identifying and addressing your unique pain points through innovative technology solutions and synergistic partnerships.</p>
                    <a href="#" class="btn btn-outline-light rounded-4 px-5" >Learn More</a>
                </div>
                <div class="col-md-6 mt-5">
                    <img src="assets/images/about-hero.png" alt="about us image" class="img-fluid rounded-4 " style="height: 250px; width: 570px; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- Large Screen Section -->
<section class="py-5 bg-dar text-white my-5 d-none d-lg-block" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-start">
                <p id="content-mission-lg" style="font-size: 18px; text-align: justify; width: 540px;">
                    Revolutionize business operations and drive sustainable growth by leveraging the power of partnerships and delivering technology solutions that effectively empower organizations to achieve maximum potential and positively impact society.
                </p>
                <p id="content-vision-lg" style="font-size: 18px; text-align: justify; width: 540px; display: none;">
                    Empowering businesses through synergy and innovation for a better world.
                </p>
            </div>
            <div class="col-md-6 text-start">
                <h2 id="heading-mission-lg" class="display-4" style="font-weight: 700; margin-left: 5px;">Our Mission</h2>
                <h2 id="heading-vision-lg" class="display-5" style="font-weight: 700; opacity: 0.3; margin-top: 20px; display: none;">
                    Our Vision
                </h2>
            </div>
        </div>
    </div>
</section>

<!-- Small Screen Section -->
<section class="py- g-dark text-white my-5 d-block d-lg-none" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <h2 id="heading-mission" class="display-4" style="font-weight: 700; margin-left: 5px;">Our Mission</h2>
                <h2 id="heading-vision" class="display-5 mb-4" style="font-weight: 700; opacity: 0.3; display: none;">Our Vision</h2>
            </div>
            <div class="col-md-6 text-start p-3">
                <p id="content-mission" class="mission" style="font-size: 18px; text-align: justify;">
                    Revolutionize business operations and drive sustainable growth by leveraging the power of partnerships and delivering technology solutions that effectively empower organizations to achieve maximum potential and positively impact society.
                </p>
                <p id="content-vision" class="vision" style="font-size: 18px; text-align: justify; display: none;">
                    Empowering businesses through synergy and innovation for a better world.
                </p>
            </div>
        </div>
    </div>
</section>
    
    

    <!-- Core Values Section -->
    <section class=" py-5 d-none d-lg-block" style="background-color: #000;">
        <div class="container">
            <div class="row">
                <!-- Left Section: Core Values We Always Live -->
                <div class="col-md-4 d-flex align-items-center justify-content-center text-white rounded-4 p-5 mt-3" style="background-color: #86868B; height: 450px;">
                    <div class="text-center">
                        
                        <h3 class="" style="margin-bottom: 130px; ">Core Values We Always Live </h3>
                        <p style="text-align: justify;">Our core values are the guiding principles that shape the company's culture and decision-making. These values are essential for cultivating a positive work environment, building strong relationships with clients and partners, and achieving long-term success. </p>
                    </div>
                </div>
                
                <!-- Right Section: Values List -->
                <div class="col-md-8">
                    <div class="row text-white">
                        <div class="col-md-6" style="margin-bottom: 5px;">
                            <div class="p-4 text-left rounded d-flex flex-column align-items-start">
                                <!-- Image instead of icon -->
                                <img src="assets/images/first.png" alt="Customer-Centricity" style="width: 50px; height: 50px; margin-bottom: 10px;">
                                <h5>Customer-Centricity</h5>
                                <p style="text-align: justify;">We prioritize understanding and addressing our clients' specific needs and challenges. By putting the customer first.  </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="p-4 text-left rounded d-flex flex-column align-items-start">
                                <!-- Image instead of icon -->
                                <img src="assets/images/second.png" alt="Innovation" style="width: 50px; height: 50px; margin-bottom: 10px;">
                                <h5>Innovation</h5>
                                <p style="text-align: justify;">Our focus on innovation enables us to develop cutting-edge solutions that solve complex business problems. </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="p-4 text-left rounded d-flex flex-column align-items-start">
                                <!-- Image instead of icon -->
                                <img src="assets/images/third.png" alt="Collaboration" style="width: 50px; height: 50px; margin-bottom: 10px;">
                                <h5>Collaboration</h5>
                                <p style="text-align: justify;">By working closely with our clients and partners, we leverage diverse perspectives and expertise to be effective. 

                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="p-4 text-left rounded d-flex flex-column align-items-start">
                                <!-- Image instead of icon -->
                                <img src="assets/images/four.png" alt="Trust" style="width: 50px; height: 50px; margin-bottom: 10px;">
                                <h5>Trust</h5>
                                <p style="text-align: justify;">Building trust is fundamental to our relationships. We are transparent, reliable, and dedicated to delivering on our promises. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" p-3 d-blcok d-lg-none " style="background-color: #000; margin-top: -50px;" >
    <div class="container">
        <div class="row">
            <!-- Left Section: Core Values We Always Live -->
            <div class="col-md-4 d-flex align-items-center justify-content-center text-white rounded-4 p-5 mt-3" style="background-color: #86868B; height: 450px;">
                <div class="text-center">
                    
                    <h3 class="" style="margin-bottom: 130px;">Core Values We Always Live</h3>
                    <p style="text-align: justify;">Our core values are the guiding principles that shape the company's culture and decision-making. These values are essential for cultivating a positive work environment, building strong relationships with clients and partners, and achieving long-term success. </p>
                </div>
            </div>
            
            <!-- Right Section: Values List -->
            <div class="col-md-8">
                <div class="row text-white">
                    <div class="col--6" style="margin-bottom: 5px;">
                        <div class="p-4 text-left rounded d-flex flex-column align-items-start">
                            <!-- Image instead of icon -->
                            <img src="assets/images/first.png" alt="Customer-Centricity" style="width: 50px; height: 50px; margin-bottom: 10px; margin-top: 50px;">
                            <h5 >Customer-Centricity</h5>
                            <p style="text-align: justify;">We prioritize understanding and addressing our clients' specific needs and challenges. By putting the customer first.  </p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="p-4 text-left rounded d-flex flex-column align-items-start">
                            <!-- Image instead of icon -->
                            <img src="assets/images/second.png" alt="Innovation" style="width: 50px; height: 50px; margin-bottom: 10px;">
                            <h5>Innovation</h5>
                            <p style="text-align: justify;">Our focus on innovation enables us to develop cutting-edge solutions that solve complex business problems. </p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="p-4 text-left rounded d-flex flex-column align-items-start">
                            <!-- Image instead of icon -->
                            <img src="assets/images/third.png" alt="Collaboration" style="width: 50px; height: 50px; margin-bottom: 10px;">
                            <h5>Collaboration</h5>
                            <p style="text-align: justify;">By working closely with our clients and partners, we leverage diverse perspectives and expertise to be effective. </p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="p-4 text-left rounded d-flex flex-column align-items-start">
                            <!-- Image instead of icon -->
                            <img src="assets/images/four.png" alt="Trust" style="width: 50px; height: 50px; margin-bottom: 10px;">
                            <h5>Trust</h5>
                            <p style="text-align: justify;">Building trust is fundamental to our relationships. We are transparent, reliable, and dedicated to delivering on our promises. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>



    <!-- Partners Section -->
    <section class="p-4 text-center m-5 rounded-3 d-none d-lg-block">
        <div class="container">
          
            <div class="d-flex justify-content-around align-items-center mt-4">
                <img src="assets/images/IBM.png" alt="IBM" class="m-2">
                <img src="assets/images/SHOPIFY.png" alt="Shopify" class="m-2">
                <img src="assets/images/ODOO.png" alt="Odoo" class="m-2">
                <img src="assets/images/MICROSOFT.png" alt="Microsoft" class="m-2">
            </div>
        </div>
    </section>


    <section class="py-5 text-center m-3 rounded-3 d-blcok d-lg-none">
        <div class="container">
          
            <div class="">
                <img src="assets/images/IBM.png" alt="IBM" class="">
                <img src="assets/images/SHOPIFY.png" alt="Shopify" class="">
                <img src="assets/images/ODOO.png" alt="Odoo" class="">
                <img src="assets/images/MICROSOFT.png" alt="Microsoft" class="">
            </div>
        </div>
    </section>

    <!-- Footer -->
</div>

    <?php include('fragments/footer.php'); ?>

    <?php include('fragments/js.php'); ?>

    <script>
    // Interval time in milliseconds
    const intervalTime = 3000;

    // Toggle for Large Screen
    function toggleMissionVisionLg() {
        const headingMissionLg = document.getElementById('heading-mission-lg');
        const headingVisionLg = document.getElementById('heading-vision-lg');
        const contentMissionLg = document.getElementById('content-mission-lg');
        const contentVisionLg = document.getElementById('content-vision-lg');

        if (headingMissionLg.style.display === 'none') {
            // Show Mission, Hide Vision
            headingMissionLg.style.display = 'block';
            contentMissionLg.style.display = 'block';
            headingVisionLg.style.display = 'none';
            contentVisionLg.style.display = 'none';
        } else {
            // Show Vision, Hide Mission
            headingMissionLg.style.display = 'none';
            contentMissionLg.style.display = 'none';
            headingVisionLg.style.display = 'block';
            contentVisionLg.style.display = 'block';
        }
    }
    setInterval(toggleMissionVisionLg, intervalTime);

    // Toggle for Small Screen
    function toggleMissionVisionSm() {
        const headingMission = document.getElementById('heading-mission');
        const headingVision = document.getElementById('heading-vision');
        const contentMission = document.getElementById('content-mission');
        const contentVision = document.getElementById('content-vision');

        if (headingMission.style.display === 'none') {
            // Show Mission, Hide Vision
            headingMission.style.display = 'block';
            contentMission.style.display = 'block';
            headingVision.style.display = 'none';
            contentVision.style.display = 'none';
        } else {
            // Show Vision, Hide Mission
            headingMission.style.display = 'none';
            contentMission.style.display = 'none';
            headingVision.style.display = 'block';
            contentVision.style.display = 'block';
        }
    }
    setInterval(toggleMissionVisionSm, intervalTime);
</script>

</body>

</html>
