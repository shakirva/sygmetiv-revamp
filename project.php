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
            background-color: #121212;
            color: white;
            font-family: Arial, sans-serif;
            padding: 0;
        }
        .our-works-section {
            padding: 40px;
        }
        .background-section {
            background-image: url('assets/images/service-hero.png'); /* Replace 'your-image.jpg' with the path to your image */
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            color: white;
            padding: 40px;
            position: relative;
        }
        .text-content {
            max-width: 50%;
            margin-left: auto;
            text-align: right;
        }
        .our-works-title {
            font-size: 2rem;
            font-weight: bold;
        }
        .description-text {
            font-size: 1rem;
            line-height: 1.5;
            color: #b3b3b3;
        }
        .card {
            background-color: #333;
            color: white;
            border: none;
            border-radius: 8px;
            position: relative;
            height: 200px;
            display: flex;
            align-items: start;
            justify-content: end;
          
        }
        .card-title {
            font-size: 1.3rem;
            margin-bottom: 0;
            font-weight: bold;
           
        }
        .card-link {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.2rem;
            color: #888;
            font-weight: bold;
        }


        .footer {
  background-color: #000;
  color: #fff;
  padding: 40px 0;
}
.footer a {
  color: #fff;
  text-decoration: none;
}
.footer a:hover {
  text-decoration: underline;
}
.social-icons a {
  font-size: 1.5rem;
  color: #fff;
  margin-right: 15px;
}


</style>

<body class="text-white" style="background-color: black;">
    <div class="container">
        <?php include('fragments/header.php'); ?>

        <!-- Hero Section -->
        <section class=" position-relative text-center d-none d-lg-block " style="background: url('your-background-image.jpg') no-repeat center center; background-size: cover; padding: 120px;">
            <div class="position-absolute top-0 bottom-0 start-0 end-0" style="background: rgba(0, 0, 0, 0.6);"></div>
            <div class="container position-relative z-1">
                <h1 class="display-3 fw-bold mb-3 " >Projects </h1>
                <p class="text-light">Home / Projects</p>
            </div>
        </section>
        
        <section class="position-relative text-center d-block d-lg-none" style="background: url('your-background-image.jpg') no-repeat center center; background-size: cover; padding: 60px; text-align: center;">
            <div class="position-absolute top-0 bottom-0 start-0 end-0" style="background: rgba(0, 0, 0, 0.6);"></div>
            <div class="container position-relative z-1">
                <h1 class="display-3 fw-bold text-center fs-1 " >Project </h1>
                <p class="text-light">Home / Project</p>
            </div>
        </section>

        <div class="container our-works-section  ">
            <div class="mb-4 d-none d-lg-block" style="background-image: url('assets/images/project-hero.png'); background-size: cover; background-position: center; border-radius: 8px; padding: 0px; color: white; height: 400px;">
                <div class="text-content">
                    
                
                </div>
            </div>


            <div class="mb-4 d-blcok d-lg-none" style="background-image: url('assets/images/project-hero.png'); background-size: cover; background-position: center; border-radius: 8px; padding: 0px; color: white; height: 160px;">
                <div class="text-content">
                    <!-- <h2 class="our-works-title">Our Works</h2>
                    <p class="description-text">
                        Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <p class="description-text">
                        Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p> -->
                </div>
            </div>
        
            
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
                <div class="col ">
                    <div class="card p-3">
                        <a href="#" class="card-link">&#8599;</a>
                        <h5 class="card-title  " >Gulf Crafts Odoo ERP Implementation</h5>
                    </div>
                </div>
                <div class="col ">
                    <div class="card p-3">
                        <a href="#" class="card-link">&#8599;</a>
                        <h5 class="card-title f">Ticket Booking Application for Nine1Event</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3">
                        <a href="#" class="card-link">&#8599;</a>
                        <h5 class="card-title ">E-commerce Success for Espanshe </h5>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3">
                        <a href="#" class="card-link">&#8599;</a>
                        <h5 class="card-title ">Donor Management System for CIGI </h5>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3">
                        <a href="#" class="card-link">&#8599;</a>
                        <h5 class="card-title ">Al Khaleej Takaful Insurance Payment Portal</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3">
                        <a href="#" class="card-link">&#8599;</a>
                        <h5 class="card-title ">Jiara Gracio Branding</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3">
                        <a href="#" class="card-link">&#8599;</a>
                        <h5 class="card-title ">Corporate Custom Website for Al Danah Medical </h5>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3">
                        <a href="#" class="card-link">&#8599;</a>
                        <h5 class="card-title ">Retro Technical Services HRM Customization </h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <section class="d-none d-lg-block" style="background-color: #000; text-align: center; padding: 40px 0;">
            <div>
                <p style="color: #fff; font-size: 1.5rem; font-weight: bold; margin-bottom: 20px; line-height: 1.4; ">
                    Take the next step<br>optimize your business with us!
                </p>
                <a href="#" style="background-color: #1b1b1b; color: #fff; padding: 10px 30px; border-radius: 8px; border: 1px solid #333; font-weight: bold;  text-decoration: none; display: inline-block;">
                    Contact us
                </a>
            </div>
        </section>

        <section class="d-blcok d-lg-none" style="background-color: #000; text-align: center; padding: 40px 0;">
            <div>
                <p style="color: #fff; font-size: 1rem; font-weight: bold; margin-bottom: 20px; line-height: 1.4; ">
                    Take the next step<br>optimize your business with us!
                </p>
                <a href="#" style="background-color: #1b1b1b; color: #fff; padding: 10px 30px; border-radius: 8px; border: 1px solid #333; font-weight: bold;  text-decoration: none; display: inline-block;">
                    Contact us
                </a>
            </div>
        </section>
    </div>

    <?php include('fragments/footer.php'); ?>
    <?php include('fragments/js.php'); ?>

</body>

</html>