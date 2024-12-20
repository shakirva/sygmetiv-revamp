<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <?php include('fragments/css.php'); ?>
    
</head>

<style>



body {
      background-color: #000;
      color: #fff;
    }

    /* Hero Section */
    .hero-section {
      text-align: center;
      padding: 80px 0;
    }

    .hero-section h1 {
      font-size: 2.5rem;
      color: #fff;
    }

    .hero-section p {
      font-size: 1.2rem;
      color: #bfbfbf;
    }

    .erp-section {
      position: relative;
      text-align: center;
      margin: 50px 0;
    }

    .erp-section img {
      width: 100%;
      max-width: 900px;
      height: auto;
      display: block;
      margin: 0 auto;
      border-radius: 8px;
    }

    .erp-section .overlay-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      text-align: center;
    }

    .erp-section h2 {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .erp-section p {
      font-size: 1.1rem;
      margin-bottom: 0;
    }

    .overlay-background {
      position: relative;
      display: inline-block;
    }

    .overlay-background:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
      z-index: 1;
      border-radius: 8px;
    }

    .overlay-content {
      position: relative;
      z-index: 2;
    }

    .custom-card {
  background-color: #1c1c1c;
  border-radius: 10px;
  overflow: hidden;
  position: relative;
}

.custom-card .card-img-top {
  height: 200px;
  object-fit: cover;
  border-bottom: 1px solid #333;
}

.custom-card .card-body {
  padding: 20px;
  color: #fff;
}

.custom-card .card-title {
  font-size: 16px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 10px;
  color: #d0d0d0;
}

.custom-card .card-text {
  font-size: 14px;
  margin-bottom: 20px;
  color: #b0b0b0;
}

.custom-card .arrow-icon {
  position: absolute;
  bottom: 20px;
  right: 20px;
}

.custom-card .arrow-icon a {
  color: #00aaff;
  font-size: 20px;
}

.custom-card .arrow-icon a:hover {
  color: #0091ea;
  transition: color 0.3s;
}

.shadow-sm {
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.methodology-section {
    background-color: #111;
}

.method-box {
    background-color: #1e1e1e;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%; /* Make all boxes full height */
}

.method-box .icon i {
    color: #fff;
}

.method-box h4 {
    font-weight: 600;
    margin-bottom: 15px;
    color: #fff;
}

.method-box p {
    color: #ccc;
    font-size: 0.95rem;
}

.text-center {
    text-align: center;
}

.bg-dark {
    background-color: #000 !important;
}

.text-light {
    color: #fff !important;
}

.row {
    display: flex;
    flex-wrap: wrap;
}

.col-md-4 {
    display: flex;
    align-items: stretch;
}

/* Adjust the padding for mobile responsiveness */
@media (max-width: 768px) {
    .method-box {
        margin-bottom: 20px;
    }
}



body {
  background-color: #000;
}

</style>

<body class=" text-white" style="background-color: black;">


    <div class="container">
    <?php include('fragments/header.php'); ?>
        

    <!-- Hero Section -->
    <section class="text-center" style="background: url('your-background-image.jpg') no-repeat center center; background-size: cover; padding: 50px;">
        <div class="containerz-1">
            <h1 class="display-3 fw-bold" >Services</h1>
            <p class="text-light">Home / Services</p>
        </div>
    </section>

    

 <!-- Hero Section -->
 <section class="hero-section bg-da r   d-none d-lg-block" style="background-color: #000;">
    <div class="container">
      <h1 style="margin-top: -20px;">Solving Your Business's Most Complex <br> Challenges</h1>
      <p class="lead">Our Cutting-Edge Solutions Are Addressing The Most Complex <br> Challenges In Today's Business Landscape.</p>
    </div>
  </section>


  <section class="hero-section bg-dar  d-blcok d-lg-none" style="background-color: #000; margin-top: -60px;">
    <div class="container ">
      <h1 class="" style="font-size: 20px;" >Solving Your Business's Most Complex Challenges</h1>
      <p  class="lead"  style="font-size: 10px;">Our Cutting-Edge Solutions Are Addressing The Most Complex Challenges In Today's Business Landscape.</p>
    </div>
  </section>

 <!-- ERP Section -->
 <section class="erp-section d-none d-lg-block">
    <div class="overlay-background">
      <img src="assets/images/service-hero.png" alt="ERP Image">
      <div class="overlay-content">
        <h2>ERP AND CRM</h2>
        <p>A Universal ERP and CRM Solution That Streamlines Your Everyday Business Operations And Customer Interactions.</p>
      </div>
    </div>
  </section>




  <section class="erp-section d-blcok d-lg-none" style="margin-top: -50px;">
    <div class="overlay-background">
      <img src="assets/images/service-hero.png" alt="ERP Image">
      <div class="overlay-content">
        <h2 style="font-size: 15px;">ERP AND CRM</h2>
        <p  style="font-size: 10px;">A Universal ERP and CRM Solution That Streamlines Your Everyday Business Operations And Customer Interactions.</p>
      </div>
    </div>
  </section>


  <!-- ERP Section -->
  <section class="container mt-5">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-6 col-md-4">
            <div class="custom-card mb-4 shadow-sm">
                <img src="assets/images/service-1.png" class="card-img-top" alt="Business Application">
                <div class="card-body">
                    <h5 class="card-title">BUSINESS APPLICATION</h5>
                    <p class="card-text">Software designed to streamline operations and enhance business efficiency.</p>
                    <div class="arrow-icon">
                        <a href="#"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-6 col-md-4">
          <div class="custom-card mb-4 shadow-sm">
              <img src="assets/images/service-5.png" class="card-img-top" alt="Web/App Development">
              <div class="card-body">
                  <h5 class="card-title">WEB/APP DEVELOPMENT</h5>
                  <p class="card-text">Building custom web and mobile applications to drive business growth.</p>
                  <div class="arrow-icon">
                      <a href="#"><i class="fa fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
      </div>


      <!-- Card 7 (Single Large Card Centered) -->
      <div class="col-6 col-md-4">
        <div class="custom-card mb-4 shadow-sm">
            <img src="assets/images/service-7.png" class="card-img-top" alt="E-Commerce">
            <div class="card-body">
                <h5 class="card-title">E-COMMERCE</h5>
                <p class="card-text">Customized solutions for online stores to enhance user experience and sales.</p>
                <div class="arrow-icon">
                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
        <!-- Card 2 -->
        <div class="col-6 col-md-4">
            <div class="custom-card mb-4 shadow-sm">
                <img src="assets/images/service-2.png" class="card-img-top" alt="Digital Marketing">
                <div class="card-body">
                    <h5 class="card-title">DIGITAL MARKETING</h5>
                    <p class="card-text">Solutions to expand digital reach and engage more customers.</p>
                    <div class="arrow-icon">
                        <a href="#"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-6 col-md-4">
            <div class="custom-card mb-4 shadow-sm">
                <img src="assets/images/service-3.png" class="card-img-top" alt="Branding">
                <div class="card-body">
                    <h5 class="card-title">BRANDING</h5>
                    <p class="card-text">Services aimed at establishing a consistent and strong brand identity.</p>
                    <div class="arrow-icon">
                        <a href="#"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-6 col-md-4">
            <div class="custom-card mb-4 shadow-sm">
                <img src="assets/images/service-4.png" class="card-img-top" alt="UI/UX Design">
                <div class="card-body">
                    <h5 class="card-title">UI/UX DESIGN</h5>
                    <p class="card-text">Crafting intuitive designs for better user interaction and experience.</p>
                    <div class="arrow-icon">
                        <a href="#"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        

        <!-- Card 6 -->
        <div class="col-6 col-md-4">
            <div class="custom-card mb-4 shadow-sm">
                <img src="assets/images/service-6.png" class="card-img-top" alt="WhatsApp API">
                <div class="card-body">
                    <h5 class="card-title">WHATSAPP API</h5>
                    <p class="card-text">Integration of WhatsApp for seamless communication and automation.</p>
                    <div class="arrow-icon">
                        <a href="#"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</section>

  





<section class="methodology-section bg-dark text-light py-5">
  <div class="container">
      <h2 class="text-center mb-4 d-none d-lg-block">Methodology We Follow</h2>
      <p class="text-center d-none d-lg-block " style="margin-bottom: 120px;">
          Our Methodology is Centered Around A Structured, Iterative Process Designed To Deliver High-Quality Results Efficiently.
          We Follow A Series Of Steps To Ensure Thorough Planning, Effective Execution, And Continuous Improvement.
      </p>
      <h2 class="text-center my-4 d-blcok d-lg-none" style="font-size: 20px;">Methodology We Follow</h2>
      <p class="text-center d-blcok d-lg-none " style="margin-bottom: 120px; font-size: 10px;">
          Our Methodology is Centered Around A Structured, Iterative Process Designed To Deliver High-Quality Results Efficiently.
          We Follow A Series Of Steps To Ensure Thorough Planning, Effective Execution, And Continuous Improvement.
      </p>
      <div class="row d-flex align-items-stretch ">
          <div class="col-md-4 mb-3">
              <div class="method-box p-4 text-center">
                  <div class="icon mb-3">
                      <i class="fas fa-calendar-alt fa-2x"></i>
                  </div>
                  <h4>Planning & Discovery</h4>
                  <p>We begin by understanding the project goals, requirements, and constraints. This phase involves research, stakeholder consultations, and the creation of a detailed project plan.</p>
                 
              </div>
          </div>
          <div class="col-md-4 mb-3">
              <div class="method-box p-4 text-center">
                  <div class="icon mb-3">
                      <i class="fas fa-pencil-ruler fa-2x"></i>
                  </div>
                  <h4>Design & Development</h4>
                  <p>Based on the insights gathered, we design and develop solutions that align with the project's objectives. This phase includes wireframing, prototyping, and coding, with a focus on user experience and functionality.</p>
              </div>
          </div>
          <div class="col-md-4 mb-3">
              <div class="method-box p-4 text-center">
                  <div class="icon mb-3">
                      <i class="fas fa-tasks fa-2x"></i>
                  </div>
                  <h4>Testing & Quality Assurance</h4>
                  <p>To ensure the highest standards, we rigorously test the solution across various scenarios. This includes functionality, usability, and performance testing, with adjustments made based on the results.</p>
              </div>
          </div>
      </div>
  </div>
</section>

</div>


  
  <?php include('fragments/footer.php'); ?>
  <?php include('fragments/js.php'); ?>
</body>

</html>