
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Futras - Fitness & Nutrition</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

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
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@600&display=swap"
    rel="stylesheet">
    
</head>

<body id="top">





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        Futras<span class="span">.</span>
      </a>

      <nav class="navbar" data-navbar>

        <button class="nav-toggle-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="ProjectTeamEnglish.html" class="navbar-link" data-nav-link>Project Team</a>
          </li>

          <li class="navbar-item">
            <a href="about.html" class="navbar-link" data-nav-link>About Us</a>
          </li>

          <li class="navbar-item">
            <a href="AllCourss.html" class="navbar-link" data-nav-link>All Course</a>
          </li>

          <li class="navbar-item">
            <a href="Blog.html" class="navbar-link" data-nav-link>Blog</a>
          </li>

          <li class="navbar-item">
            <a href="Contact.html" class="navbar-link" data-nav-link>Contact</a>
          </li>
          

          <li class="navbar-item">
            <a href="arabic.html" class="navbar-link" data-nav-link >Arabic</a>
          </li>
         

        </ul>

      </nav>

      <a href="SingUp.php" class="btn btn-primary">Sign Up</a>

      <button class="nav-toggle-btn" aria-label="open manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="hero" id="home" data-section
        style="background-image: url('./assets/images/hero-banner.jpg')">
        <div class="container">

          <p class="hero-subtitle">Fitness & Nutrition</p>

          <h1 class="h1 hero-title">This life style for your fitness, not only diet.</h1>

          <p class="hero-text">
            Fitness is not just about physical appearance. It's about maintaining a healthy body, mind, and lifestyle. Whether you're trying to lose weight, build muscle, or simply improve your overall well-being, the right approach to fitness and nutrition can help you reach your goals.
          </p>

          <a href="#" class="btn btn-secondary">Start Course</a>

          <div class="social-wrapper">

            <p class="social-title">Connect with us:</p>

            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-skype"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" aria-label="service" data-section>
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-1.svg" width="60" height="60" loading="lazy" alt="Women’s Course">
                </div>

                <h3 class="h3">
                  <a href="WemansCourseEnglish.html" class="card-title">Women’s Course</a>
                </h3>

                <p class="card-text">
                  This course focuses on building strength, flexibility, and endurance. It's designed specifically for women, offering personalized fitness routines and nutrition plans to help you achieve your goals, whether it's weight loss, muscle toning, or general wellness.
                </p>

                <a href="#" class="btn btn-secondary">
                  <ion-icon name="arrow-forward"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card active">

                <div class="card-icon">
                  <img src="./assets/images/service-2.svg" width="60" height="60" loading="lazy" alt="Basic Course">
                </div>

                <h3 class="h3">
                  <a href="baciccycleEN.html" class="card-title">Basic Course</a>
                </h3>

                <p class="card-text">
                  Our basic fitness course is designed for beginners. Whether you're just starting your fitness journey or getting back into a routine, this course will teach you the fundamentals of exercise and nutrition for a healthy, balanced lifestyle.
                </p>

                <a href="#" class="btn btn-secondary">
                  <ion-icon name="arrow-forward"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-3.svg" width="60" height="60" loading="lazy" alt="Men’s Course">
                </div>

                <h3 class="h3">
                  <a href="MensCourseEnglish.html" class="card-title">Men’s Course</a>
                </h3>

                <p class="card-text">
                  This course is tailored for men who want to enhance their strength, cardiovascular health, and physique. With a focus on weightlifting, high-intensity training, and nutrition, it’s ideal for building muscle and achieving peak performance.
                </p>

                <a href="#" class="btn btn-secondary">
                  <ion-icon name="arrow-forward"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about" id="about" data-section>
        <div class="container">

          <div class="about-banner img-holder" style="--width: 470; --height: 580;">
            <img src="./assets/images/about-banner.jpg" width="470" height="580" loading="lazy" alt="about banner"
              class="img-cover">

            <a href="MatingToEn.html" class="btn btn-secondary">Meet Instructor</a>
          </div>

          <div class="about-content">

            <p class="section-subtitle">25+ Years Of Experience</p>

            <h2 class="h2 section-title">We have expert instructor for help our students.</h2>

            <p class="section-text">
              With over 25 years of experience in the fitness and nutrition industry, our instructors are passionate about helping you achieve your health and fitness goals. Whether you're training for a marathon, improving your diet, or simply looking to feel better, our team is here to support you.
            </p>

            <h3 class="about-h3">100+ Courses</h3>

            <p class="section-text">
              We offer over 100 different courses, including weight management, sports nutrition, and personalized fitness plans. These courses are designed to suit individuals at all fitness levels and are taught by certified instructors who specialize in fitness and nutrition.
            </p>

          </div>

        </div>
      </section>






      <!-- 
        - #COURSE
      -->

      <section class="section course" aria-label="course" id="course" data-section>
        <div class="container">

          <div class="title-wrapper">
            <p class="section-subtitle">100+ Courses Available</p>

            <h2 class="h2 section-title">Fitness & Nutrition Courses</h2>
          </div>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-1.jpg" width="350" height="300" loading="lazy"
                    alt="Children Nutrition and Cooking" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="98">$98</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Ryan Patterson</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Children Nutrition and Cooking</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT8H20M">08 hr 20 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">28 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-2.jpg" width="350" height="300" loading="lazy"
                    alt="Introduction to Food and Health." class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="72">$72</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Arlene Daniels</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Introduction to Food and Health.</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT9H25M">09 hr 25 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">16 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">
                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/تمارين-القرفصاء-للرجال-ضمانة-لحمايتك-من-الأمراض.jpg" width="350" height="300" loading="lazy"
                    alt="Introduction to Food and Health." class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="68">$68</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Selina Benton</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Nutrition and Lifestyle in Pregnancy</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT3H38M">03 hr 38 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">18 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-4.jpg" width="350" height="300" loading="lazy"
                    alt="Expertise on Fitness, Nutrition and Health" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="98">$98</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Ryan Patterson</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Expertise on Fitness, Nutrition and Health</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT2H16M">02 hr 16 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">14 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/267730.jpg" width="350" height="300" loading="lazy"
                    alt="Nutrition and Lifestyle in Pregnancy" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="72">$72</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Arlene Daniels</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Hacking exercise for health new science of fitness</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT6H12M">06 hr 12 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">35 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 300;">
                  <img src="./assets/images/courses-4.jpg" width="350" height="300" loading="lazy"
                    alt="Expertise on Fitness, Nutrition and Health" class="img-cover">
                </figure>

                <div class="card-content">

                  <data class="card-price" value="68">$68</data>

                  <p class="card-author">
                    <a href="#" class="card-link">
                      By: <span class="span">Selina Benton</span>
                    </a>
                  </p>

                  <h3 class="h3">
                    <a href="#" class="card-title">Designing Your Personal Weight Loss Plan</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time datetime="PT9H34M">09 hr 34 mins</time>
                    </li>

                    <li class="card-meta-item">
                      <p class="card-meta-text">28 Lectures</p>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" aria-label="blog" id="blog" data-section>
        <div class="container">

          <div class="title-wrapper">
            <p class="section-subtitle">Our Blog Post</p>

            <h2 class="h2 section-title">Latest Article of Nutrition</h2>
          </div>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <div class="wrapper">

                  <time class="publish-date" datetime="2022-02-24">
                    <span class="span">24</span> Feb
                  </time>

                  <div>

                    <div class="card-author">
                      <a href="#" class="card-link">
                        By: <span class="span">Mohamed Abed Ali</span>
                      </a>
                    </div>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <p class="item-text">87 Likes</p>
                      </li>

                      <li class="card-meta-item">
                        <p class="item-text">58 Share</p>
                      </li>
                    </ul>

                  </div>

                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">The importance of proper nutrition for health</a>
                </h3>

                <p class="card-text">
                  Proper nutrition plays a fundamental role in maintaining a healthy body and boosting immunity. Eating a balanced diet containing proteins, carbohydrates, healthy fats, vitamins, and minerals helps improve bodily functions and prevent disease. Drinking adequate amounts of water and consuming fiber also promotes digestion and maintains a healthy digestive system. Therefore, it's essential to avoid processed and sugary foods and rely on natural foods to ensure a healthy and sustainable life.
                </p>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="wrapper">

                  <time class="publish-date" datetime="2022-02-24">
                    <span class="span">5</span> March
                  </time>

                  <div>

                    <div class="card-author">
                      <a href="#" class="card-link">
                        By: <span class="span">Ahmed AbdAlmenim</span>
                      </a>
                    </div>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <p class="item-text">92 Likes</p>
                      </li>

                      <li class="card-meta-item">
                        <p class="item-text">71 Share</p>
                      </li>
                    </ul>

                  </div>

                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">The importance of vitamins and minerals in the body</a>
                </h3>

                <p class="card-text">
                  Vitamins and minerals play a vital role in supporting various bodily functions. For example, vitamin C boosts immunity, while vitamin D helps strengthen bones. Iron prevents anemia, and zinc improves wound healing. These nutrients can be obtained from natural foods such as fruits, vegetables, grains, and nuts. A deficiency in any of these nutrients can lead to serious health problems, so it's essential to eat a varied diet to ensure your body's needs are met and maintain optimal health.
                </p>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="wrapper">

                  <time class="publish-date" datetime="2022-02-24">
                    <span class="span">18</span> April
                  </time>

                  <div>

                    <div class="card-author">
                      <a href="#" class="card-link">
                        By: <span class="span">Ahmed Attia</span>
                      </a>
                    </div>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <p class="item-text">67 Likes</p>
                      </li>

                      <li class="card-meta-item">
                        <p class="item-text">102 Share</p>
                      </li>
                    </ul>

                  </div>

                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Nutrition and its effect on energy and concentration</a>
                </h3>

                <p class="card-text">
                  Proper nutrition plays a fundamental role in maintaining a healthy body and boosting immunity. Eating a balanced diet containing proteins, carbohydrates, healthy fats, vitamins, and minerals helps improve bodily functions and prevent disease.
                  These nutrients can be obtained from natural foods such as fruits, vegetables, grains, and nuts. A deficiency in any of these nutrients can lead to serious health problems, so it's essential to eat a varied diet to ensure your body's needs are met and maintain optimal health. 
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>


      <!-- 
        - #APP
      -->

      <section class="section app" aria-label="app" data-section>
        <div class="container">

          <div class="app-card">

            <p class="section-subtitle">Mobile App Available</p>

            <h2 class="h2 section-title">
              Download our mobile app.<br>
              and start coaching anytime.
            </h2>

            <div class="wrapper">
              <a href="#" class="app-link" aria-label="play store">
                <img src="./assets/images/play-store.jpg" width="134" height="38" loading="lazy" alt="Play Store"
                  class="img">
              </a>

              <a href="#" class="app-link" aria-label="app store">
                <img src="./assets/images/app-store.jpg" width="132" height="38" loading="lazy" alt="App Store"
                  class="img">
              </a>
            </div>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section" data-section>
      <div class="container">

        <div class="footer-list">

          <p class="footer-list-title">Subscribe Newsletter</p>

          

          <form action="" class="footer-form">
            <input type="email" name="email_address" aria-label="email" placeholder="Enter email" required
              class="email-field">

            <button type="submit" class="btn btn-secondary">Subscribe Now</button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">All Courses</p>
          </li>

          <li>
            <a href="TheDay (2).html" class="footer-link">Daily Exercise</a>
          </li>

          <li>
            <a href="immunsystem.html" class="footer-link">Immune System</a>
          </li>

          

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Help Links</p>
          </li>

          <li>
            <a href="SiastAlkssosiaa.html" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="Alshoro.html" class="footer-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="Aske.html" class="footer-link">Course FAQ’s</a>
          </li>

          

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Opening Hours</p>
          </li>

          <li>
            <a href="#" class="footer-link">Mon-Fri: 9 AM – 6 PM</a>
          </li>

          <li>
            <a href="#" class="footer-link">Saturday: 9 AM – 4 PM</a>
          </li>

          <li>
            <a href="#" class="footer-link">Sunday: Closed</a>
          </li>

          <li>
            <p class="footer-list-title address-title">Location</p>
          </li>

          <li>
            <address class="address">
              Cairo - Egypt
              
            </address>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2025 Futras Made With
          <ion-icon name="heart" aria-hidden="true"></ion-icon> by
          <a href="#" class="copyright-link">Group 23</a>
        </p>

        <ul class="footer-bottom-list">

          <li class="footer-bottom-item">
            <a href="#" class="footer-bottom-link">Terms of Service</a>
          </li>

          <li class="footer-bottom-item">
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li class="footer-bottom-item">
            <a href="#" class="footer-bottom-link">Sitemap</a>
          </li>

          <li class="footer-bottom-item">
            <a href="#" class="footer-bottom-link">Security</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
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

