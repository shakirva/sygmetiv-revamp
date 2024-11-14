<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
   
    <?php include('fragments/css.php'); ?>
<style> 
:root {
    --primary-font: "Archivo", sans-serif;
    --secondary-font: "Karla", sans-serif;
    --main-gradient: linear-gradient(
      193deg,
      rgba(173, 93, 235, 1) 0%,
      rgba(251, 121, 166, 1) 100%
    );
    --btn-gradient: linear-gradient(
      193deg,
      rgba(59, 46, 87, 1) 0%,
      rgba(42, 32, 61, 1) 100%
    );
    --secondary-text: #8d8d8d;
    --service-arrow: rgba(101, 85, 143, 1);
  }

body,html{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: var(--primary-font);
    background-color: black;
    color: white;
  }

  .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 1.5rem;
    }


    form button {
    background-color: transparent; /* Your preferred color */
    color: #fff;
    border: #8d8d8d 1px solid;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

form button:hover {
    background-color: white; /* Darker shade for hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect on hover */
    color: black;
}


/* nav section  */
 </style>



</head>



<body  style="background-color: blac;">


    <div class="container">
        
        <?php include('fragments/header.php'); ?>
        
        <div class="wrapper">
            <div class="left">
                <div class="title-wrapper">
                    <p class="sub-title">Say hi to the team</p>
                    <h1 class="contact-title
                    ">contact </h1>
                </div>
                <div class="left-wrapper">

                    <p>Feel free to contact us and we will get
                        back to you soon  </p>

                    <form action="">
                        <input type="text" name="" id="" placeholder="Name">
                        <input type="number" name="" id="" placeholder="number">
                        <input type="email" name="" id="" placeholder="Email address">
                        <input type="text" name="" id="" placeholder="Talk us all about it">
                        <button type="submit">Sent</button>
                    </form>

                </div>
            </div>

            <div class="right d-none d-lg-block " style="margin-top: 180px;">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe
                            src="https://maps.google.com/maps?q=sygmetiv%20&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                            frameborder="0" scrolling="no" style="width: 590px; height: 400px;"></iframe>
                    </div>
                </div>
                
            </div>
            <div class="right d-block d-lg-none " style="margin-top: -70px;">
              <div class="mapouter">
                  <div class="gmap_canvas"><iframe
                          src="https://maps.google.com/maps?q=sygmetiv%20&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                          frameborder="0" scrolling="no" style="width: 590px; height: 400px;"></iframe>
                  </div>
              </div>
              
          </div>
        </div>
    </div>
        

    <?php include('fragments/footer.php'); ?>
    <?php include('fragments/js.php'); ?>
      


</body>

</html>