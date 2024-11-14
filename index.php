<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sygmetiv</title>

    <?php include('fragments/css.php'); ?>

    <style>
        .icon {
            font-size: 5vw;
        }

        /* Remove underline from links and maintain default color */
        .connect-card {
            text-decoration: none;
            color: inherit;
            /* Inherit the parent color */

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
            z-index: -99;
        }
    </style>


</head>

<body>
    <!-- <div class="bubbles">
        <img class="bubble1" src="./assets/images/background round circle.png" alt="">
    </div> -->
    <div class="container">
        <?php include('fragments/header.php'); ?>

        <section>
            <div class="row align-items-center">
                <div class="col">
                    <div class="text-sm-start text-center mt-5">
                        <h1 class="mb-4 fs-4rem">From concept to <br> Completion: <br>
                            <span id="changing-word" class="text-theme">Design</span>
                        </h1>
                        <p class="sub-title mb-4 fs-3 fs-sm-6">Experience the power of cutting-edge technology & innovative solutions</p>
                        <button class="hero-btn">
                            <p>Learn more</p>
                            <i class="fa-solid fa-arrow-right" style="color: #86868b;"></i>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="img-wrapper">
                        <img src="assets/images/hero-img.png" alt="Rotating 3D Object" class="rotate ">
                        <div class="btn-rapper">
                            <button class="hero-btn display">
                                <p>Learn more</p> <i class="fa-solid fa-arrow-right" style="color: #86868b;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

           
        </section>

        <!-- about section  -->
        <section id="#about" class="about">
            <div class="about-wrapper">
                <div>
                    <h2 class="about-title">Delivering innovative IT</h2>
                    <h2 class="about-title gradient">Solutions to empower</h2>
                    <h2 class="about-title">Business and drive growth </h2>
                </div>
                <img class="about-img" src="./assets/images/Vector.png" alt="">
            </div>
        </section>

        <!-- services  -->
        <section id="#sevices" class="services">
            <h2 class="remarkable-text">Remarkable solutions</h2>
            <div class="service-wrapper ">
                <div class="service">
                    <img src="./assets/images/mob-erb.png" alt="">
                    <div>
                        <h3 class="service-title">ERP Solution </h3>
                        <h5 class="service-middle-title">The Hero of Business Transformation </h5>
                        <p class="service-sub-title  ">Our ERP solution is the cornerstone of our service offerings,
                            celebrated for its transformative impact on enterprises and MSMEs alike. </p>
                    </div>
                    <div class="arrow-wrapper">
                        <i class="fa-solid fa-arrow-right service-arrow"></i>
                    </div>
                </div>

                <div class="service">
                    <img src="./assets/images/mob-business.jpg" alt="">
                    <div>
                        <h3 class="service-title">Business Application </h3>
                        <h5 class="service-middle-title">Redefining Future of Business </h5>
                        <p class="service-sub-title">Our business applications are designed to address a wide range of
                            challenges with customized solutions. By streamlining processes and adapting to evolving
                            market trends. </p>
                    </div>
                    <div class="arrow-wrapper">
                        <i class="fa-solid fa-arrow-right service-arrow"></i>
                    </div>
                </div>
                <div class="service">
                    <img src="./assets/images/mob-development.jpg" alt="">
                    <div>
                        <h3 class="service-title">Web Development </h3>
                        <h5 class="service-middle-title descriptio">Crafting experiences that Wow..! </h5>
                        <p class="service-sub-title">Enthusiastic web team create visually stunning, user-friendly
                            websites that position your brand. Our skilled developers are dedicated to meeting your
                            unique needs and delivering exceptional results. </p>
                    </div>
                    <div class="arrow-wrapper">
                        <i class="fa-solid fa-arrow-right service-arrow"></i>
                    </div>
                </div>
                <div class="service">
                    <img src="./assets/images/mob-digital.jpg" alt="">
                    <div>
                        <h3 class="service-title">Digital Marketing</h3>
                        <h5 class="service-middle-title">Our enhanced digital marketing strategies are designed to
                            achieve your brand’s marketing objectives with suite of SEO, Social media marketing, Google
                            Ads, content marketing, and email marketing </p>
                    </div>
                    <div class="arrow-wrapper">
                        <i class="fa-solid fa-arrow-right service-arrow"></i>
                    </div>
                </div>
                <div class="service">
                    <img src="./assets/images/mob-uiux.jpg" alt="">
                    <div>
                        <h3 class="service-title">UI/UX Designing</h3>
                        <h5 class="service-middle-title">Designing for Impact </h5>
                        <p class="service-sub-title">Our UI/UX designers create intuitive interfaces that enhance user
                            experience, improve customer satisfaction, and drive business growth. </p>
                    </div>
                    <div class="arrow-wrapper">
                        <i class="fa-solid fa-arrow-right service-arrow"></i>
                    </div>
                </div>
                <div class="service">
                    <img src="./assets/images/mob-branding.jpg" alt="">
                    <div>
                        <h3 class="service-title">Branding</h3>
                        <h5 class="service-middle-title">Building Your Brand Identity </h5>
                        <p class="service-sub-title">We help you develop a strong, memorable brand identity that
                            resonates with your target audience and sets you apart from competitors. </p>
                    </div>
                    <div class="arrow-wrapper">
                        <i class="fa-solid fa-arrow-right service-arrow"></i>
                    </div>
                </div>
                <div class="service">
                    <img src="./assets/images/mob-whatsapp.png" alt="">
                    <div>
                        <h3 class="service-title">WhatsApp API</h3>
                        <h5 class="service-middle-title">Engage Customers on WhatsApp </h5>
                        <p class="service-sub-title">From automated chatbots to personalized campaigns, we provide the
                            tools and expertise to maximize the potential of WhatsApp for your business. </p>
                    </div>
                    <div class="arrow-wrapper">
                        <i class="fa-solid fa-arrow-right service-arrow"></i>
                    </div>
                </div>
                <div class="service">
                    <img src="./assets/images/mob-ecommo.jpg" alt="">
                    <div>
                        <h3 class="service-title">Ecommerce Solution</h3>
                        <h5 class="service-middle-title">Power Your Online Store </h5>
                        <p class="service-sub-title">Our ecommerce solutions provide a robust platform for selling
                            products and services online, offering features like secure payments, inventory management,
                            and marketing tools. </p>
                    </div>
                    <div class="arrow-wrapper">
                        <i class="fa-solid fa-arrow-right service-arrow"></i>
                    </div>
                </div>
            </div>

            <div class="d-service-wrapper">
                <div class="row1">
                    <div class="img-box">
                        <img src="./assets/images/image.png" alt="Service Image" class="box-img">
                    </div>
                    <div class="half-box">
                        <h3 class="half-box-title">Our Service</h3>
                        <p class="box-sub-title">See whatever services we are providing to your organization</p>
                        <p class="description"></p>
                    </div>
                    <button class="service-btn">Learn more ></button>
                </div>

                <div class="row2">
                    <div class="box1">
                        <div class="box">ERP Solution</div>
                        <div class="box">Business Application</div>
                    </div>
                    <div class="box2">
                        <div class="box">Web Development</div>
                        <div class="box">Digital Marketing</div>
                    </div>
                    <div class="box3">
                        <div class="box">UI/UX Designing</div>
                        <div class="box">Branding</div>
                    </div>
                    <div class="box4">
                        <div class="box">WhatsApp API</div>
                        <div class="box">Ecommerce Solution</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- portfolio section  -->
        <section id="portfolio" class="porfolio">
            <h2 class="remarkable-text">Data Driven Portfolio</h2>
            <div class="carousel">
                <div class="main-card">
                    <div class="count">
                        <p class="port-text text-white">Gulf Crafts Odoo ERP Implementation</p>
                        <p class="port-sub-text text-white"></p>
                    </div>
                    <div class="text-section">

                    </div>
                    <img src="./assets/images/syg-01.jpg" alt="">
                </div>

                <div class="card">
                    <div class="count">
                        <p class="port-text text-white">Ticket Booking Application for Nine1Event</p>
                        <p class="port-sub-text text-white"></p>
                    </div>
                    <div class="text-section">

                    </div>
                    <img src="./assets/images/syg-06.jpg" alt="">
                </div>

                <div class="card">
                    <div class="count">
                        <p class="port-text text-white">E-commerce Success for Espanshe </p>
                        <p class="port-sub-text text-white"></p>
                    </div>
                    <div class="text-section">
                    </div>
                    <img src="./assets/images/syg-03.jpg" alt="">
                </div>

                <div class="card">
                    <div class="count">
                        <p class="port-text text-white">Donor Management System for CIGI </p>
                        <p class="port-sub-text text-white"></p>
                    </div>
                    <div class="text-section">
                    </div>
                    <img src="./assets/images/syg-08.jpg" alt="">
                </div>

                <div class="card">
                    <div class="count">
                        <p class="port-text text-white">Al Khaleej Takaful Insurance Payment Portal </p>
                        <p class="port-sub-text text-white"></p>
                    </div>
                    <div class="text-section">
                    </div>
                    <img src="./assets/images/syg-09.jpg" alt="">
                </div>

                <div class="card">
                    <div class="count">
                        <p class="port-text text-white">Jiara Gracio Branding </p>
                        <p class="port-sub-text text-white"></p>
                    </div>
                    <div class="text-section">
                    </div>
                    <img src="./assets/images/syg-10.jpg" alt="">
                </div>

                <div class="card">
                    <div class="count">
                        <p class="port-text text-white">Corporate Custom Website for Al Danah Medical </p>
                        <p class="port-sub-text text-white"></p>
                    </div>
                    <div class="text-section">
                    </div>
                    <img src="./assets/images/syg-12.jpg" alt="">
                </div>

                <div class="card">
                    <div class="count">
                        <p class="port-text text-white">Retro Technical Services HRM Customization </p>
                        <p class="port-sub-text text-white"></p>
                    </div>
                    <div class="text-section">
                    </div>
                    <img src="./assets/images/syg-13.jpg" alt="">
                </div>


            </div>
        </section>

        <!-- contaat us section  -->
        <section id="contact" class="contact-us">
            <div class="connect-top">
                <p style="font-size: 40px;">Connect</p>
                <h1 class="connect-title">Get in touch</h1>
                <p class="connect-text secondary">Feel free to reach out to us with any questions or inquiries you may
                    have</p>
            </div>

            <div class="connect-wrapper"
                style="display: flex; justify-content: space-between; gap: 22px; flex-wrap: nowrap;">
                <!-- Email Card -->
                <a href="mailto:sygmetiv@gmail.com" class="connect-card" style="flex: 1; text-align: center;">
                    <i class="fa-regular fa-envelope icon"></i>
                    <h2 class="connection-title gradient">Email</h2>
                    <p class="connect-text">We’re here to help you every step of the way.</p>
                </a>

                <!-- Live Chat Card -->
                <a href="https://crm.sygmetiv.com/im_livechat/chat" class="connect-card" target="_blank"
                    style="flex: 1; text-align: center;">
                    <i class="fa-regular fa-message icon"></i>
                    <h2 class="connection-title gradient">Live Chat</h2>
                    <p class="connect-text">Chat with our team in real time.</p>
                </a>

                <!-- Phone Card -->
                <a href="tel:+918078480564" class="connect-card" style="flex: 1; text-align: center;">
                    <i class="fa-solid fa-phone icon"></i>
                    <h2 class="connection-title gradient">Phone</h2>
                    <p class="connect-text">Begin a conversation with us today.</p>
                </a>

                <!-- Office Card -->
                <a href="https://www.google.com/maps/dir//Shahas+Apartments,+Police+Quarters+Rd,+Chavakkad,+Kerala+680506/@10.5847369,75.9388825,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba7959e0c9d6031:0x8af278ab1ad435c5!2m2!1d76.0212844!2d10.5847476"
                    class="connect-card" target="_blank" style="flex: 1; text-align: center;">
                    <i class="fa-solid fa-location-dot icon"></i>
                    <h2 class="connection-title gradient">Office</h2>
                    <p class="connect-text">Let’s talk about your project.</p>
                </a>
            </div>
        </section>

    </div>

    <?php include('fragments/footer.php'); ?>

    <?php include('fragments/js.php'); ?>

    <script>const words = ["Design", "Develop", "Dominate"];
    let currentIndex = 0;
    const changingWord = document.getElementById('changing-word');

    function updateWord() {
        currentIndex = (currentIndex + 1) % words.length;
        changingWord.textContent = words[currentIndex];
    }

    // Set the initial word
    changingWord.textContent = words[currentIndex];

    // Use setInterval to call updateWord every 9 seconds to match the CSS animation
    setInterval(updateWord, 9000);
</script>

</body>

</html>