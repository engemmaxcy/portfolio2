<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    .toast-success {
      background-color: #28a745 !important;
      color: white !important;
    }

    .toast-error {
      background-color: #dc3545 !important;
      color: white !important;
    }

    .toast-warning {
      background-color: rgb(229, 156, 54);
      color: black;
    }

    .modal-fullscreen {
      width: 100vw !important;
      height: 100vh !important;
      margin: 0 !important;
      top: 0 !important;
      left: 0 !important;
    }
  </style>

  <!-- SEO Meta Tags -->
  <meta name="description" content="Your description" />
  <meta name="author" content="Ogangi Emmanuel" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
  <meta property="og:site_name" content="" />
  <!-- website name -->
  <meta property="og:site" content="" />
  <!-- website link -->
  <meta property="og:title" content="" />
  <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" />
  <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" />
  <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" />
  <!-- where do you want your post to link to -->
  <meta name="twitter:card" content="summary_large_image" />
  <!-- to have large image post format in Twitter -->

  <!-- Webpage Title -->
  <title>Emmanuel Ogangi | Software Engineer</title>

  <!-- Styles -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap"
    rel="stylesheet" />
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/fontawesome-all.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />

  <!-- Favicon  -->
  <link rel="icon" href="images/favicon.png" />
</head>

<body data-spy="scroll" data-target=".fixed-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">
      <!-- Image Logo -->
      <a class="navbar-brand logo-image" href="index.php"><img src="images/logo.png" alt="alternative" /></a>

      <!-- Text Logo - Use this if you don't have a graphic logo -->
      <!-- <a class="navbar-brand logo-text page-scroll" href="index.php">Emma</a> -->

      <button
        class="navbar-toggler p-0 border-0"
        type="button"
        data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div
        class="navbar-collapse offcanvas-collapse"
        id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#services">Services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link page-scroll" href="#projects">Projects</a>
          </li>

          <li class="nav-item">
            <a class="nav-link page-scroll" href="#contact">Contact</a>
          </li>
        </ul>
        <span class="nav-item social-icons">
          <span class="fa-stack">
            <a href="https://www.facebook.com/profile.php?id=100089222856566" target="_blank">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack" target="_blank">
            <a href="https://x.com/EngEmmaxcy2020" target="_blank">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-twitter fa-stack-1x"></i>
            </a>
          </span>

          <span class="fa-stack">
            <a href="https://www.linkedin.com/in/engogangi-emmanuel/" target="_blank">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-linkedin-in fa-stack-1x"></i>
            </a>
          </span>

          <span class="fa-stack">
            <a href="https://www.youtube.com/@emmaxcy" target="_blank">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-youtube fa-stack-1x"></i>
            </a>

          </span>
      </div>
      <!-- end of navbar-collapse -->
    </div>
    <!-- end of container -->
  </nav>
  <!-- end of navbar -->
  <!-- end of navigation -->

  <!-- Header -->
  <header id="header" class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="text-container">
            <h1 class="h1-large">
              Detail-oriented and user-focused Software Engineer
            </h1>
            <a class="btn-solid-lg rounded page-scroll" href="#about">Discover</a>
            <a class="btn-outline-lg page-scroll" href="#contact"><i class="fas fa-user"></i>Contact Me</a>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </header>
  <!-- end of header -->
  <!-- end of header -->

  <!-- About-->
  <div id="about" class="basic-1 bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="text-container first">
            <h2>Hi there I'm Ogangi Emmanuel,</h2>
            <p>
              Passionate and Creative problem-solver Software Engineer. I love
              going through the entire process with the customer from concept,
              to design and then development and launch.
            </p>
            <p>
              I enjoy solving real-world problems through clean, efficient
              code and am always eager to learn and adopt new tools that
              improve performance and user experience. Whether working
              independently or as part of a team, I take pride in delivering
              solutions that are not only functional but also impactful.
            </p>
            <p>
              I’m comfortable working across the stack—from setting up
              databases and APIs to crafting seamless front-end experiences. I
              thrive in collaborative environments and am committed to
              continuous growth, innovation, and delivering high-quality
              results.
            </p>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
          <div class="text-container second">
            <div class="time">2023 - PRESENT</div>
            <h6>Full Stack Developer at Pearl Tech Solutions</h6>
            <p>
              At Pearl Tech, I work as a Full-Stack Developer, contributing to
              the design, development, and deployment of Software and systems.
            </p>

            <div class="time">2020 - 2023</div>
            <h6>BackEnd Developer Team Lead at Otic Foundation company</h6>
            <p>
              I was responsible for developing and maintaining server-side
              logic, databases, and APIs that power the organization's digital
              platforms.
            </p>

            <div class="time">2018 - 2019</div>
            <h6>System Analyst at Sadja WebSolutions Ltd</h6>
            <p>
              I was responsible for analyze business requirements, existing
              systems and translate them into functional technical solutions.
            </p>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
          <div class="text-container third">
            <div class="time">2019 - 2020</div>
            <h6>Creative Designer at Hands of Women in Development</h6>
            <p>
              As a Creative Designer at Hands of Women in Development, I craft
              visually engaging designs that support the organization’s
              mission and advocacy efforts.
            </p>

            <div class="time">2018 - 2019</div>
            <h6>Skylink Internet Cafe Aduku</h6>
            <p>
              My role was to provide IT support and customer service,
              assisting clients with computer use, internet access, and basic
              troubleshooting. I managed printing, scanning, and document
              formatting tasks using Microsoft office while maintaining system
              functionality and ensuring a smooth digital experience for
              users.
            </p>

            <div class="time">2017</div>
            <h6>Freelance Developer</h6>
            <p>Working happily on my own projects</p>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of basic-1 -->
  <!-- end of about -->


  <!-- Services -->
  <section id="services" class="services-section py-5">
    <div class="container">
      <div class="row mb-5 text-center">
        <div class="col-lg-8 mx-auto">
          <h2 class="h2-heading fw-bold">Offered Services</h2>
          <p class="p-heading text-muted">
            Software and system development have been my bread and butter for more than 5 years.
            I help startups and companies build, improve, and maintain powerful digital systems.
          </p>
        </div>
      </div>

      <div class="row g-4 justify-content-center">
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 service-card border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="icon-box mb-3">
                <i class="fas fa-cogs"></i>
              </div>
              <h5 class="card-title fw-bold">SYSTEM DEVELOPMENT</h5>
              <p class="card-text text-muted">Building scalable and secure software systems tailored to business needs.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card h-100 service-card border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="icon-box mb-3">
                <i class="fas fa-sync-alt"></i>
              </div>
              <h5 class="card-title fw-bold">SYSTEM REDESIGN</h5>
              <p class="card-text text-muted">Modernizing existing systems for better performance and user experience.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card h-100 service-card border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="icon-box mb-3">
                <i class="fas fa-tools"></i>
              </div>
              <h5 class="card-title fw-bold">MAINTENANCE</h5>
              <p class="card-text text-muted">Bug fixing, updates, and optimization to keep systems running smoothly.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card h-100 service-card border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="icon-box mb-3">
                <i class="fas fa-plug"></i>
              </div>
              <h5 class="card-title fw-bold">API INTEGRATION</h5>
              <p class="card-text text-muted">Connecting systems with third-party APIs for extended functionality.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-4 mt-2 justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 service-card border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="icon-box mb-3 bg-light-blue">
                <i class="fas fa-code"></i>
              </div>
              <h5 class="card-title fw-bold">WEB DEVELOPMENT</h5>
              <p class="card-text text-muted">Building responsive and scalable websites using modern technologies.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card h-100 service-card border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="icon-box mb-3">
                <i class="fas fa-database"></i>
              </div>
              <h5 class="card-title fw-bold">BACKEND DEV</h5>
              <p class="card-text text-muted">Server-side logic, APIs, and database systems using PHP and Python.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card h-100 service-card border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="icon-box mb-3">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <h5 class="card-title fw-bold">MOBILE APPS</h5>
              <p class="card-text text-muted">Cross-platform mobile apps using Flutter and modern frameworks.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Details Section -->



  <div class="area-2 bg-gray">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="image-container">
            <img class="img-fluid rounded shadow" src="images/details-background.jpg" alt="About Me">
          </div>
        </div>

        <div class="col-lg-6">
          <div class="text-container">
            <h2>Why Work With Me</h2>
            <p>
              I am a strong communicator who takes time to fully understand client needs and deliver effective solutions.
            </p>

            <h5>Design Tools</h5>
            <p>
              I work with tools like Photoshop, Illustrator, Figma, Canva, Sketch, and Adobe XD to create clean and modern designs.
            </p>

            <h5>Development Skills</h5>
            <p>
              I build responsive, user-friendly web and mobile applications using modern technologies such as HTML, CSS, JavaScript, Bootstrap, PHP, Python, Flutter, Django, MySQL and more.
            </p>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <h4>Programming Languages & Technologies</h4>
        <div class="col-lg-12">
          <div class="icons-container text-center py-4 border-top">
            <i class="bi bi-filetype-psd mx-2" title="Photoshop"></i>

            <i class="bi bi-filetype-ai mx-2" title="Adobe Illustrator"></i>
            <i class="bi bi-figma mx-2" title="Figma"></i>



            <i class="bi bi-filetype-html mx-2" title="HTML"></i>
            <i class="bi bi-filetype-css mx-2" title="CSS"></i>
            <i class="bi bi-bootstrap mx-2" title="Bootstrap"></i>
            <i class="bi bi-filetype-js mx-2" title="JavaScript"></i>

            <i class="bi bi-filetype-php mx-2" title="PHP"></i>
            <i class="bi bi-filetype-py mx-2" title="Python"></i>
            <i class="bi bi-terminal-split mx-2" title="Django"></i>
            <i class="bi bi-phone mx-2" title="Flutter"></i>

            <i class="bi bi-patch-check mx-2" title="React"></i>
            <i class="bi bi-vimeo mx-2" title="Vue.js"></i>

            <i class="bi bi-database mx-2" title="MySQL"></i>
            <i class="bi bi-database-check mx-2" title="PostgreSQL"></i>
            <i class="bi bi-database-add mx-2" title="SQLite"></i>
            <i class="bi bi-hdd-network mx-2" title="MongoDB"></i>
            <i class="bi bi-lightning-charge mx-2" title="Redis"></i>
            <i class="bi bi-database-fill mx-2" title="Oracle"></i>
            <i class="bi bi-fire mx-2" title="Firebase"></i>
            <i class="bi bi-git mx-2" title="Git"></i>
            <i class="bi bi-github mx-2" title="GitHub"></i>
          </div>
        </div>
      </div>
    </div>
  </div> ```

  <!-- End Details Section -->
  <!-- Projects -->
  <div id="projects" class="basic-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="h2-heading">Delivered projects</h2>
          <p class="p-heading">
            Below is a curated selection of my most impactful projects, spanning from architecting high-conversion landing pages to developing complex, scalable systems.
          </p>
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="text-container">
            <div class="image-container">
              <a href="#project">
                <img
                  class="img-fluid"
                  src="images/project-1.png"
                  alt="alternative" />
              </a>
            </div>
            <!-- end of image-container -->
            <p>
              <strong>Client:</strong> Economic & Research Organization,
              <strong>Service:</strong> Development of a professional web platform for data presentation, research publication, and organizational visibility to support economic analysis and reporting.
              <a class="blue" href="https://jacorion.com/" target="_blank" rel="noopener noreferrer">
                Live Preview
              </a>
            </p>
          </div>
          <!-- end of text-container -->
          <div class="text-container">
            <div class="image-container">
              <a href="#projects">
                <img
                  class="img-fluid"
                  src="images/project-2.png"
                  alt="alternative" />
              </a>
            </div>
            <!-- end of image-container -->
            <p>
              <strong>Client:</strong> Retail Business,
              <strong>Service:</strong> Design and development of a Point of Sale (POS) system for managing sales, inventory, and transactions to improve business efficiency.
              <a class="blue" href="" target="_blank" rel="noopener noreferrer">

              </a>
            </p>
          </div>
          <!-- end of text-container -->
          <div class="text-container">
            <div class="image-container">
              <a href="#projects">
                <img
                  class="img-fluid"
                  src="images/project-3.png"
                  alt="alternative" />
              </a>
            </div>
            <!-- end of image-container -->
            <p>
              <strong>Client:</strong> Educational Institution,
              <strong>Service:</strong> Design and development of a School Management System for managing student records, attendance, academic performance, and administrative operations.
              <a class="blue" href="" target="_blank" rel="noopener noreferrer">

              </a>
            </p>
          </div>
          <!-- end of text-container -->
          <div class="text-container">
            <div class="image-container">
              <a href="#projects">
                <img
                  class="img-fluid"
                  src="images/project-4.png"
                  alt="alternative" />
              </a>
            </div>
            <!-- end of image-container -->
            <p>
              <strong>Client:</strong> Service Organization,
              <strong>Service:</strong> Development of a ticket management system for handling customer requests, tracking issues, and improving support response efficiency.
              <a class="blue" href="" target="_blank" rel="noopener noreferrer">

              </a>
            </p>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of basic-3 -->
  <!-- end of projects -->

  <!-- Works -->
  <div class="basic-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="text-container">
            <div class="image-container">
              <a href="#projects">
                <img
                  class="img-fluid"
                  src="images/work-1.png"
                  alt="alternative" />
              </a>
            </div>
            <!-- end of image-container -->
            <p>
              <strong>Client:</strong> Isimbi Wine,
              <strong>Service:</strong> Design and development of a modern website to showcase products, enhance brand visibility, and support customer engagement.
              <a class="blue" href="https://isimbibeverages.com/" target="_blank" rel="noopener noreferrer">
                Live Preview
              </a>
            </p>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
          <div class="text-container">
            <div class="image-container">
              <a href="#projects">
                <img
                  class="img-fluid"
                  src="images/work-2.jpg"
                  alt="alternative" />
              </a>
            </div>
            <!-- end of image-container -->
            <p>
              <strong>Client:</strong> FinTech Solution,
              <strong>Service:</strong> Development of a financial management Mobile Application to monitor expenses, control budgets, and provide insights for better financial decision-making.
              <a class="blue" href="" target="_blank" rel="noopener noreferrer">

              </a>
            </p>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
          <div class="text-container">
            <div class="image-container">
              <a href="#projects">
                <img
                  class="img-fluid"
                  src="images/work-3.jpg"
                  alt="alternative" />
              </a>
            </div>
            <!-- end of image-container -->
            <p>
              <strong>For:</strong> Primoday,
              <strong>Project:</strong> Developed a high-performance desktop application for their corporate platform with native OS integration.

            </p>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
      <div class="row">
        <div class="col-lg-4">
          <div class="text-container">
            <div class="image-container">
              <a href="#projects">
                <img
                  class="img-fluid"
                  src="images/work-4.jpg"
                  alt="alternative" />
              </a>
            </div>
            <!-- end of image-container -->
            <p>
              <strong></strong> Nextlite,
              <strong>Project:</strong> Payment Integration
              Streamlined the checkout process for Nextlite using Stripe to manage secure subscriptions and video rendering credits.
            </p>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
          <div class="text-container">
            <div class="image-container">
              <a href="#projects">
                <img
                  class="img-fluid"
                  src="images/work-5.jpg"
                  alt="alternative" />
              </a>
            </div>
            <!-- end of image-container -->
            <p>
              <strong>Client:</strong> Syncnow,
              <strong>Project:</strong> Comprehensive redesign of corporate websites and landing pages for a modern, high-end digital identity.

            </p>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
        <div class="col-lg-4">
          <div class="text-container">
            <div class="image-container">
              <a href="#projects">
                <img
                  class="img-fluid"
                  src="images/work-6.jpg"
                  alt="alternative" />
              </a>
            </div>
            <!-- end of image-container -->
            <p>
              <strong>Client:</strong> Shifter,
              <strong>Project:</strong> Collaborated on the full-stack development of a new SaaS platform and product ecosystem from the ground up.

            </p>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of basic-4 -->
  <!-- end of works -->

  <!-- Testimonials -->
  <div class="cards-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="h2-heading">
            A few words from people that chose to work with me
          </h2>
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
      <div class="row">
        <div class="col-lg-12">
          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <p class="testimonial-text">
                Eng Emma is a skilled developer which will do everything possible
                to deliver the project on time and I really appreciate that”
              </p>
              <div class="details">
                <img src="images/testimonial-1.jpg" alt="alternative" />
                <div class="text">
                  <div class="testimonial-author">Samantha Bloom</div>
                  <div class="occupation">Team Leader - Syncnow</div>
                </div>
                <!-- end of text -->
              </div>
              <!-- end of testimonial-details -->
            </div>
          </div>
          <!-- end of card -->

          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <p class="testimonial-text">
                “Loved to work with Eng Emma he's such an awesome developer with
                great attention to details. He also has a great eye for
                design”
              </p>
              <div class="details">
                <img src="images/testimonial-2.jpg" alt="alternative" />
                <div class="text">
                  <div class="testimonial-author">John Rowling</div>
                  <div class="occupation">Marketing Manager - Nexlite</div>
                </div>
                <!-- end of text -->
              </div>
              <!-- end of testimonial-details -->
            </div>
          </div>
          <!-- end of card -->

          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <p class="testimonial-text">
                “So glad we started working with Emma. We've used many times
                his design and development skills for our inhouse online
                projects”
              </p>
              <div class="details">
                <img src="images/testimonial-3.jpg" alt="alternative" />
                <div class="text">
                  <div class="testimonial-author">Lana Smith</div>
                  <div class="occupation">General Manager - Shifter</div>
                </div>
                <!-- end of text -->
              </div>
              <!-- end of testimonial-details -->
            </div>
          </div>
          <!-- end of card -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of cards-1 -->
  <!-- end of testimonials -->

  <!-- Section Divider -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <hr class="section-divider" />
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
  <!-- end of section divider -->

  <!-- Questions -->
  <div class="accordion-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="h2-heading">Frequent questions</h2>
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <button
                  class="btn btn-link btn-block text-left"
                  type="button"
                  data-toggle="collapse"
                  data-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne">
                  How can I contact you and quickly get a quote for my online
                  project?
                </button>
              </div>
              <div
                id="collapseOne"
                class="collapse show"
                aria-labelledby="headingOne"
                data-parent="#accordionExample">
                <div class="card-body">
                  The best way to reach me is through the contact form of by
                  messaging me on my social media accounts. For a fast quote
                  make sure your provide many project details
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <button
                  class="btn btn-link btn-block text-left collapsed"
                  type="button"
                  data-toggle="collapse"
                  data-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo">
                  Do you create designs from the ground up or you are using
                  themes?
                </button>
              </div>
              <div
                id="collapseTwo"
                class="collapse"
                aria-labelledby="headingTwo"
                data-parent="#accordionExample">
                <div class="card-body">
                  I primarily create designs from the ground up to ensure each
                  project is unique, scalable, and tailored to the client’s
                  specific needs and goals. This approach allows me to focus
                  on user experience, performance, and brand identity from the
                  very beginning. However, in cases where timelines are tight
                  or budgets are limited, I can work with well-structured
                  themes or frameworks and customize them extensively to meet
                  the required standards. Regardless of the approach, I ensure
                  the final product is optimized, responsive, and delivers a
                  seamless user experience.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <button
                  class="btn btn-link btn-block text-left collapsed"
                  type="button"
                  data-toggle="collapse"
                  data-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree">
                  Will I receive any included maintenance or warranty after
                  project delivery?
                </button>
              </div>
              <div
                id="collapseThree"
                class="collapse"
                aria-labelledby="headingThree"
                data-parent="#accordionExample">
                <div class="card-body">
                  Yes, I provide a limited period of post-delivery support to
                  ensure everything runs smoothly after deployment. This
                  typically includes fixing any bugs, resolving performance
                  issues, and offering guidance on how to use the system.
                  Beyond the initial support period, I also offer optional
                  maintenance packages that cover regular updates, security
                  improvements, feature enhancements, and ongoing technical
                  support. This ensures your product remains stable, secure,
                  and up-to-date as your needs grow.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFour">
                <button
                  class="btn btn-link btn-block text-left collapsed"
                  type="button"
                  data-toggle="collapse"
                  data-target="#collapseFour"
                  aria-expanded="false"
                  aria-controls="collapseFour">
                  If something goes wrong with the project can I have my money
                  back?
                </button>
              </div>
              <div
                id="collapseFour"
                class="collapse"
                aria-labelledby="headingFour"
                data-parent="#accordionExample">
                <div class="card-body">
                  Client satisfaction is very important to me. I follow a
                  structured development process with clear milestones,
                  regular updates, and feedback sessions to ensure the project
                  stays aligned with your expectations. If any issues arise, I
                  first work to resolve them promptly within the agreed scope
                  at no additional cost. Refunds are generally handled based
                  on the stage of the project and the terms agreed upon at the
                  start. In cases where the project cannot be completed as
                  agreed, a fair partial refund may be considered. My goal is
                  always to deliver a successful project, so I focus on
                  communication, transparency, and quality to minimize any
                  risks.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFive">
                <button
                  class="btn btn-link btn-block text-left collapsed"
                  type="button"
                  data-toggle="collapse"
                  data-target="#collapseFive"
                  aria-expanded="false"
                  aria-controls="collapseFive">
                  What's your preferred method of payment and do you need an
                  advance?
                </button>
              </div>
              <div
                id="collapseFive"
                class="collapse"
                aria-labelledby="headingFive"
                data-parent="#accordionExample">
                <div class="card-body">
                  My preferred payment methods are secure and convenient
                  options such as bank transfer, mobile money, or other agreed
                  digital payment platforms. Yes, I typically require an
                  upfront deposit before starting the project. This helps
                  secure the timeline and covers initial planning and
                  development work. The remaining balance is usually paid in
                  agreed milestones or upon project completion, depending on
                  the scope and duration of the project.
                </div>
              </div>
            </div>
          </div>
          <!-- end of accordion -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of accordion-1 -->
  <!-- end of questions -->

  <!-- Contact -->
  <div id="contact" class="form-1 bg-light py-5">
    <div class="container">

      <!-- Section Header -->
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold">Contact Details</h2>
        <p class="text-muted mx-auto" style="max-width: 650px;">
          Have a project in mind or need a reliable developer? Feel free to
          reach out—I’m always open to discussing new ideas and opportunities.
        </p>
      </div>

      <div class="row g-4 align-items-stretch">

        <!-- LEFT: CONTACT INFO -->
        <div class="col-lg-4">
          <div class="contact-info-card p-4 shadow rounded-4 bg-white h-100">

            <h5 class="fw-bold mb-4">Contact Info</h5>

            <!-- Email -->
            <div class="info-item d-flex align-items-start mb-4">
              <div class="icon-box me-3">
                <i class="bi bi-envelope-fill"></i>
              </div>
              <div>
                <h6 class="fw-semibold mb-1">Email</h6>
                <a href="mailto:ogangiemmanuel2020@gmail.com" class="d-block text-decoration-none text-dark small">
                  ogangiemmanuel2020@gmail.com
                </a>
                <a href="mailto:emma@pearl-host.com" class="d-block text-decoration-none text-dark small">
                  emma@pearl-host.com
                </a>
              </div>
            </div>

            <!-- Phone -->
            <div class="info-item d-flex align-items-start mb-4">
              <div class="icon-box me-3">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <div>
                <h6 class="fw-semibold mb-1">Phone</h6>
                <p class="mb-0 small">+256 770 974 075</p>
                <p class="mb-0 small">+256 740 987 907</p>
              </div>
            </div>

            <!-- Location -->
            <div class="info-item d-flex align-items-start">
              <div class="icon-box me-3">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div>
                <h6 class="fw-semibold mb-1">Location</h6>
                <p class="mb-0 small">Kampala, Uganda</p>
              </div>
            </div>

          </div>
        </div>

        <!-- RIGHT: FORM -->
        <div class="col-lg-8">
          <div class="form-container p-4 p-md-5 shadow-sm rounded-4 bg-white h-100 position-relative">

            <!-- Loader -->
            <div id="formLoader" class="loader-overlay">
              <div class="loader"></div>
            </div>

            <form id="formid">

              <div class="row g-3">

                <!-- Name -->
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Name</label>
                  <input name="name" type="text" class="form-control custom-input" placeholder="Your Name" required>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Email</label>
                  <input type="email" name="email" class="form-control custom-input" placeholder="Your Email" required>
                </div>

                <!-- Message -->
                <div class="col-12">
                  <label class="form-label fw-semibold">Message</label>
                  <textarea name="message" class="form-control custom-input" rows="5" placeholder="How can I help you?" required></textarea>
                </div>

                <!-- Button -->
                <div class="col-12 mt-2">
                  <button type="submit" class="btn btn-primary btn-lg w-100 fw-semibold">
                    Send Message
                  </button>
                </div>

              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end of contact -->

  <!-- Footer -->
  <div class="footer bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="social-container">
            <span class="fa-stack">
              <a href="https://www.facebook.com/profile.php?id=100089222856566" target="_blank">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-facebook-f fa-stack-1x"></i>
              </a>
            </span>
            <span class="fa-stack">
              <a href="https://x.com/EngEmmaxcy2020" target="_blank">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-twitter fa-stack-1x"></i>
              </a>
            </span>

            <span class="fa-stack">
              <a href="https://www.instagram.com/engemmaxcy" target="_blank">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-instagram fa-stack-1x"></i>
              </a>
            </span>
            <span class="fa-stack">
              <a href="https://www.youtube.com/@emmaxcy" target="_blank">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-youtube fa-stack-1x"></i>
              </a>
            </span>

            <span class="fa-stack">
              <a href="https://github.com/engemmaxcy" target="_blank">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-github fa-stack-1x"></i>
              </a>

          </div>
          <!-- end of social-container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of footer -->
  <!-- end of footer -->

  <!-- Copyright -->
  <div class="copyright bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="p-small">
            Copyright &copy; <?php echo date("Y"); ?>
            <a class="no-line footer-link" href="">Emmanuel Ogangi</a>
          </p>
        </div>
        <!-- end of col -->
      </div>
      <!-- enf of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of copyright -->
  <!-- end of copyright -->

  <!-- Scripts -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery for Bootstrap's JavaScript plugins -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Bootstrap framework -->
  <script src="js/jquery.easing.min.js"></script>
  <!-- jQuery Easing for smooth scrolling between anchors -->
  <script src="js/scripts.js"></script>
  <!-- Custom scripts -->
</body>

</html>


<script>
  $('#formid').submit(function(e) {
    e.preventDefault();
    var _this = $(this)
    if (_this[0].checkValidity() == false) {
      _this[0].reportValidity();
      return false;
    }
    $('#formLoader').css('display', 'flex');
    $.ajax({
      url: "contact.php",
      data: new FormData($(this)[0]),
      cache: false,
      contentType: false,
      processData: false,
      method: 'POST',
      type: 'POST',
      dataType: 'json',
      error: err => {
        console.error(err)
        $('#formLoader').fadeOut(200);
      },
      success: function(resp) {
        if (resp.status == 'success') {
          toastr.success(resp.msg);
          $('#formid')[0].reset();
        } else if (resp.status == 'failed') {
          toastr.error(resp.msg)
        } else {
          console.error(resp)
        }
        $("html, body").scrollTop(0);

        $('#formLoader').fadeOut(200);

      }
    })
  })
</script>