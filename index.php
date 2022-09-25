

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RR Iron Fitness</title>

  <!-- 
    - favicon
  -->
  <link rel="https://raw.githubusercontent.com/francisjjba/rr-iron-fitness/main/assets/images/WhatsApp_Image_2022-09-08_at_3.48.49_PM-removebg-preview.png" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
 <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-one.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-two.png">
  <link rel="preload" as="image" href="./assets/images/heart-rate.svg">
  <link rel="preload" as="image" href="./assets/images/calories.svg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <!--          <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>  -->
        <img
          src="https://raw.githubusercontent.com/francisjjba/rr-iron-fitness/main/assets/images/WhatsApp_Image_2022-09-08_at_3.48.49_PM-removebg-preview.png"
          width="100" height="100">
        <span class="span" style="font-size:25px;">RR Iron Fitness</span>
      </a>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
        </button>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link active" data-nav-link>Home</a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>About Us</a>
          </li>

          <li>
            <a href="#class" class="navbar-link" data-nav-link>Training</a>
          </li>
          

          <li>
            <a href="#blog" class="navbar-link" data-nav-link>Testimonials</a>
          </li>

          <li>
            <a href="#footer" class="navbar-link" data-nav-link>Contact Us</a>
          </li>

        </ul>

      </nav>
       <a href="price.php" class="btn btn-secondary">price</a>

     

<!-- echo "<a href='whatever.php#targetanchor>Jump to target on whatever</a>"; -->

      <a href="<?php echo("register.php"); ?>" class="btn btn-secondary" >Sign Up</a>


      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>
      

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section
        style="background-image: url('./assets/images/background 1.jpeg')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">
              <strong class="strong">The Best</strong>Fitness Club
            </p>

            <h1 class="h1 hero-title" style="color:#FF0000;">Work Hard To Get Better Life</h1>

            <p class="section-text">
            <h3 style="color: #000000;">Welcome to RR Iron Fitness <br> YOUR KEY TO A HEALTHY LIFESTYLE!</h3>
            </p>

            <a href="price.php" class="btn btn-primary">Get Started</a>

          </div>

          <div class="hero-banner">

            <img src="./assets/images/heroine-banner.png" width="8000" height="8000" alt="hero banner" class="w-100">

            <img src="./assets/images/hero-circle-one.png" width="444" height="444" aria-hidden="true" alt=""
              class="circle circle-1">
            <img src="./assets/images/hero-circle-two.png" width="666" height="666" aria-hidden="true" alt=""
              class="circle circle-2">


           
            <!------------------------------------------------------------------------------>
          </div>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <div class="about-banner has-after">
            <img src="./assets/images/about-banner.png" width="660" height="648" loading="lazy" alt="about banner"
              class="w-100">

            <img src="./assets/images/about-circle-one.png" width="660" height="534" loading="lazy" aria-hidden="true"
              alt="" class="circle circle-1">
            <img src="./assets/images/about-circle-two.png" width="660" height="534" loading="lazy" aria-hidden="true"
              alt="" class="circle circle-2">

          </div>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">Welcome To Our Fitness Gym</h2>

            <p class="section-text">
              We are very excited to be able to welcome you to our institution RR Iron Fitness, as one of the new
              members of our gym. We want to assure you about our good and loyal service. We hope that you will not feel
              any regret or remorse by joining us. We really thank you for joining us.
            </p>

            <p class="section-text">
              We are waiting to meet you and share your ideas on the health clubs and training offered by us. We have
              attached an information booklet of our institution to make you more aware of us..
            </p>

            <div class="wrapper">

              <div class="about-coach">

                <figure class="coach-avatar">
                  <img src="./assets/images/trainner ssb.jpg" width="65" height="65" loading="lazy" alt="Trainer">
                </figure>

                <div>
                  <h3 class="h3 coach-name">Shilpa Gowda</h3>

                  <p class="coach-title">Our Coach</p>
                </div>

              </div>

              <a href="https://www.instagram.com/shifitnessfreak/" class="btn btn-primary">Explore More</a>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #VIDEO
      -->

      <section class="section video" aria-label="video">
        <div class="container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/eGTt1FrIF7o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>

        </div>
      </section>





      <!-- 
        - #CLASS
      -->

      <section class="section class bg-dark has-bg-image" id="class" aria-label="class"
        style="background-image: url('./assets/images/classes-bg.png')">
        <div class="container">

          <p class="section-subtitle">Our Classes</p>

          <h2 class="h2 section-title text-center">Fitness Classes For Every Goal</h2>

          <ul class="class-list has-scrollbar">

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img
                    src="https://raw.githubusercontent.com/francisjjba/rr-iron-fitness/main/assets/images/weight%20lifting.jpg"
                    width="416" height="240" loading="lazy" alt="Weight Lifting" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="#" class="card-title">Weight Lifting</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Weight training is a type of strength training that uses weights for resistance. Weight training
                    provides a stress to the muscles that causes them to adapt and get stronger, similar to the way
                    aerobic conditioning strengthens your heart.

                    Weight training can be performed with free weights, such as barbells and dumbbells, or by using
                    weight machines.
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <!--                       <p class="progress-label">Class Full</p>

                      <span class="progress-value">85%</span>
                    </div> -->

                      <div class="progress-bg">
                        <!--                       <div class="progress-bar" style="width: 85%"></div> -->
                      </div>

                    </div>

                  </div>

                </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img
                    src="https://raw.githubusercontent.com/francisjjba/rr-iron-fitness/main/assets/images/cardio%20and%20weightlifting.jpg"
                    width="200" height="240" loading="lazy" alt="Cardio & Strenght" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-2.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="#" class="card-title">Cardio & Strenght</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    To lose fat from your lower tummy, you must lose it from your entire body.This requires a daily
                    caloric deficit, which is created by eating a healthy diet and engaging in regular cardio and
                    strength training. With consistency and determination, your tubby tummy will reduce.
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                    
                    </div>

                  </div>

                </div>

              </div>
            </li>


                    </div>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #TESTIMONIALS
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <p class="section-subtitle">Testimonials</p>

          

          <ul class="blog-list has-scrollbar">

            <li class="scrollbar-item">
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                  <img src="./assets/images/1.GYM.jpg" width="440" height="270" loading="lazy"
                    alt="Going to the gym for the first time" class="img-cover">

                  
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">3 Month Body Transformation Results</a>
                  </h3>

                  <p class="card-text">

                  </p>

                  

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                  <img src="./assets/images/2gym.jpg" width="440" height="270" loading="lazy"
                    alt="3 Month Body Transformation Results" class="img-cover">

                  
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">6 Month Body Transformation Results</a>
                  </h3>

                  <p class="card-text">
                    
                  </p>

                 

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                  <img src="./assets/images/3gym.jpg" width="440" height="270" loading="lazy"
                    alt="Risus purus namien parturient accumsan cacus" class="img-cover">

                  
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">12 Month Body Transformation results</a>
                  </h3>

                  <p class="card-text">
                    
                  </p>

                 

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  


<footer class="footer">

    <div class="section footer-top bg-dark has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">
      <div class="container">

        <div class="footer-brand">


          <h2> <span class="span">RR - Iron - Fitness</span></h2>
          </a> <br>



          <div class="wrapper">

            <img src="./assets/images/footer-clock.png" width="34" height="34" loading="lazy" alt="Clock">

            <ul class="footer-brand-list">

              <li>
                <p class="footer-brand-title">Morning</p>

                <p>5:00Am - 12:00Pm</p>
              </li>

              <li>
                <p class="footer-brand-title">Evening</p>

                <p>5:00Pm - 10:00Pm</p>
              </li>

               <li>
                  <p class="footer-brand-title"> Sunday</p>

                  <p>closed</p>

                </li>


            </ul>

          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Our Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Home</a>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Training</a>
          </li>

          <li>
            <a href="#" class="footer-link">Testimonials</a>
          </li>

        
        </ul>

        <ul class="footer-list">



          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="location" aria-hidden="true" role="img" class="md hydrated"></ion-icon>
            </div>

            <address class="address footer-link"><h5>
               #251, G R Plaza, 1st floor, above state bank of India, hv halli, double road, rajarajeshwari nagar,
                bangalore -560098,Karnataka </h5>
            </address>
          </li>
<br>
          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="call" aria-hidden="true" role="img" class="md hydrated"></ion-icon>
            </div>

            <div>
              <a href="tel:+91 81052 56176" class="footer-link">+91 81052 56176</a>
            </div>
          </li>
          <br>

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="mail" aria-hidden="true" role="img" class="md hydrated"></ion-icon>
            </div>

            <div>
              <a href="mailto:info@rrironfitness.com" class="footer-link">info@rrironfitness.com</a>

              <a href="mailto:services@rrironfitness.com" class="footer-link">services@rrironfitness.com</a>
            </div>
          </li>

        </ul>



            </ul>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          © 2022 Fitlife. All Rights Reserved By <a href="#" class="copyright-link">CLASS3E.</a>
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link has-before">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link has-before">Terms &amp; Condition</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>




  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up-sharp" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>     