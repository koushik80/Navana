
<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="Koushik" content="NAVANA TRADING"/>
    <title>NAVANA TRADING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Custom CSS -->
    <link rel = "stylesheet" href="main.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300i,400,400i,500,600,700,800%7CLora:400,400i,700,700i" rel="stylesheet">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <!-- Owl carousel -->
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
  </head>
  <body>

    <!-- header -->
    <section id="home" class="header">
      <div class="header-wrapper">
        <!-- navbar -->
        <div class="navbar-wrapper container">
          <nav class="navbar">
            <div class="brand-and-toggler container">
              <a href="index.php" class="navbar-brand"><img src="images/logo.png" alt="logo"></a>
              <button type="button" class="navbar-toggler" id="navbar-toggler">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
              </button>
            </div>
          </nav>

          <div class="navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="#home" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="#about" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="#product-range" class="nav-link">Product range</a>
              </li>
              <li class="nav-item">
                <a href="#services" class="nav-link">Services</a>
              </li>
              <li class="nav-item">
                <a href="#prices" class="nav-link">Quote</a>
              </li>
              <li class= "nav-item">
                <a href="#team" class="nav-link">Team</a>
              </li>
              <li class="nav-item">
                <a href="#blog" class="nav-link">Blog</a>
              </li>
              <li class ="nav-item">
                <a href ="hello/index.php" class="hello-link">Contact</a>
              </li>
              <li class ="nav-item">
                <a href ="feedback.php" class="fd-link">Feedback</a>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <a class="dropbtn" href="#">Register<i class="fa fa-caret-down"></i>
                </a>
                  <div class="dropdown-content">
                    <a href="Login and Signup Form with Email Verification/signup-user.php">Signup</a>
                    <a href="Login and Signup Form with Email Verification/login-user.php">Login</a>
                 </div>
               </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- end of navbar -->

        <div class="header-banner container">
          <h1 class="banner-title">NAVANA TRADING</h1>
          <p class="text-slogan">
            Your ultimate sourcing destination
          </p>
          <div class="banner-btns">
            <button type="button" class="banner-btn">
          <a href="What we do.pdf" class="company-info" style="border: solid 0.01rem var(--guide-color); position: relative; min-width: max-content; isolation: isolate; z-index: 1;">What we do</a></button>
        </div>
        </div>
      </div>
    </section>
    <!-- end of header -->

    <!-- about section -->
    <section class="about py-4" id="about">
      <div class="container">
        <div class="title">
          <h2 class="title-text">Welcome to NAVANA as your one-stop sourcing hub</h2>
          <div class="title-underline"></div>
        </div>

        <div class="about-wrapper">
          <!-- single item -->
          <div class="single-about overlay">
            <span><i class="fas fa-cogs"></i></span>
            <h2 class="text-large">Product Development, Sourcing & Production</h2>
            <p class="text-light">From the concept and design phase to sampling and all the way through the production process, NAVANA handles and provides a complete end-to-end manufacturing service.</p>
            <a href="#" class="btn-link">read more</a>
          </div>
          <!-- end of single item -->

          <!-- single item -->
          <div class="single-about overlay">
            <span><i class="fas fa-shipping-fast"></i></span>
            <h2 class="text-large">Supply Chain & Warehousing</h2>
            <p class="text-light">Our systematic ordering procedures ensure we deliver consistent quality. We manage high product volumes from our larger corporate clients and also dropship products from our warehouse.</p>
            <a href="#" class="btn-link">read more</a>
          </div>
          <!-- end of single item -->

          <!-- single item -->
          <div class="single-about overlay">
            <span><i class="fas fa-luggage-cart"></i></span>
            <h2 class="text-large">Shipping & Logistics</h2>
            <p class="text-light">Our logistics team makes the whole shipping process as easy as possible. We handle all the tedious admin work and cater to your needs with all forms of freight. NAVANA will import your goods from ports to your business doors.</p>
            <a href="#" class="btn-link">read more</a>
          </div>
          <!-- end of single item -->
        </div>
      </div>
    </section>
    <!-- end of about section -->

    <!-- product-range section -->
    <section class="product-range py-4" id="product-range">
      <div class="container">
        <div class="title">
          <h2 class="title-text">Product-Line</h2>
          <div class="title-underline"></div>
        </div>

        <div class="product-range-wrapper">
          <!-- single item -->
          <div class="single-product-range">
            <img src="images/apparel.jpg" alt="product-range images">
            <div class="single-product-range-content">
              <h3>Garments</h3>
              <h2>Knit,Woven,Non-woven</h2>
              <div class="product-range-icons">
                <span class="sq-icon">
                  <i class="fas fa-external-link-alt"></i>
                </span>
                <span class="sq-icon">
                  <i class="fas fa-search"></i>
                </span>
              </div>
            </div>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-product-range">
            <img src="images/leather.jpg" alt="product-range images">
            <div class="single-product-range-content">
              <h3>Leather</h3>
              <h2>Chrome Tanning,Vegetable Tanning,Chrome-free Tanning</h2>
              <div class="product-range-icons">
                <span class="sq-icon">
                  <i class="fas fa-external-link-alt"></i>
                </span>
                <span class="sq-icon">
                  <i class="fas fa-search"></i>
                </span>
              </div>
            </div>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-product-range">
            <img src="images/craft.jpg" alt="product-range images">
            <div class="single-product-range-content">
              <h3>Handicrafts</h3>
              <h2>Eco-friendly</h2>
              <div class="product-range-icons">
                <span class="sq-icon">
                  <i class="fas fa-external-link-alt"></i>
                </span>
                <span class="sq-icon">
                  <i class="fas fa-search"></i>
                </span>
              </div>
            </div>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-product-range">
            <img src="images/hmxt.jpg" alt = "product-range images">
            <div class="single-product-range-content">
              <h3>Home-Textiles</h3>
              <h2>Interior & Exterior</h2>
              <div class="product-range-icons">
                <span class="sq-icon">
                  <i class="fas fa-external-link-alt"></i>
                </span>
                <span class="sq-icon">
                  <i class="fas fa-search"></i>
                </span>
              </div>
            </div>
          </div>
          <!-- end of single item -->
        </div>
      </div>
    </section>
    <!-- end of product-range section -->

    <!-- services section -->
    <section class = "services py-4" id="services">
      <div class="container">
        <div class="title">
          <h2 class="title-text">Order Process</h2>
          <div class="title-underline"></div>
        </div>

        <div class="services-wrapper">
          <!-- single item -->
          <div class="single-service overlay">
            <span class="services-icon">
              <i class="far fa-envelope"></i>
            </span>
            <div class="single-service-content">
              <h2 class="text-large">Enquire</h2>
              <p class="text-light">Get in touch with our team, and we can discuss your product specs, timeline and quantity.</p>
            </div>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-service overlay">
            <span class="services-icon">
            <i class="fas fa-quote-right"></i>
            </span>
            <div class="single-service-content">
              <h2 class="text-large">Quote</h2>
              <p class="text-light">Our team will prepare a quote for you after discussing your product specs with our network of factories.</p>
            </div>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-service overlay">
            <span class="services-icon">
              <i class="fas fa-tshirt"></i>
            </span>
            <div class="single-service-content">
              <h2 class="text-large">Confirm Order/Design</h2>
              <p class="text-light">Depending on your order, it may require a custom design. Approval is required before sampling and production.</p>
            </div>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-service overlay">
            <span class="services-icon">
              <i class="fas fa-cogs"></i>
            </span>
            <div class="single-service-content">
              <h2 class="text-large">Production</h2>
              <p class="text-light">Most production varies between 3-5 weeks.</p>
            </div>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-service overlay">
            <span class="services-icon">
              <i class="fas fa-award"></i>
            </span>
            <div class="single-service-content">
              <h2 class="text-large">Quality Control</h2>
              <p class="text-light">Nearing the end of the production, a member of our team will do a full QC report to ensure the order is to spec and initial sampling.</p>
            </div>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-service overlay">
            <span class="services-icon">
              <i class="fas fa-cash-register"></i>
            </span>
            <div class="single-service-content">
              <h2 class="text-large">Balance Payment</h2>
              <p class="text-light">Once you're happy with the production results, the balance payment is required to ship your order.</p>
            </div>
          </div>
          <!-- end of single item -->
        </div>
      </div>
    </section>
    <!-- end of services section -->

    <!-- features -->
    <section class="features py-4">
      <div class="container">
        <div class="features-wrapper">
          <!-- feature left -->
          <div class="features-left">
            <div class="title">
              <h2 class="title-text">Features</h2>
              <div class="title-underline"></div>
            </div>

            <div class="features-left-content">
              <p class="text-light">Regardless of what product you're looking for, our process, infrastructure, network & experience allows us to source effectively for our industry. Our painstaking efforts to reengineer each steps of NAVANA's value chain-procurement, production process & planning, workforce productivity & efficiency, technologies and turned them into core competencies have paid off.</p>
              <ul class="features-list">
                <li>
                  <span class="feat-list-icon">
                    <i class="fas fa-angle-double-right"></i>
                  </span>
                  <span class="text-light">Strong networks of sourcing.</span>
                </li>
                <li>
                  <span class="feat-list-icon">
                  <i class="fas fa-angle-double-right"></i>
                  </span>
                  <span class="text-light">Affiliation with number of factories and suppliers which given us negotiation power.</span>
                </li>
                <li>
                  <span class="feat-list-icon">
                    <i class="fas fa-angle-double-right"></i>
                  </span>
                  <span class="text-light">We can meet price because we work with Compliant and Semi-Compliant factories.</span>
                </li>
                <li>
                  <span class="feat-list-icon">
                <i class="fas fa-angle-double-right"></i>
                  </span>
                  <span class="text-light">Continuous market intelligence gathered by our specialized sourcing division which can concentrates on identifying and evaluating new vendors and prices for development and production, what we do with best priority.</span>
                </li>
                <li>
                  <span class="feat-list-icon">
                    <i class="fas fa-angle-double-right"></i>
                  </span>
                  <span class="text-light">The ability to assist improve consumption and efficiency.</span>
                </li>
                <li>
                  <span class="feat-list-icon">
                    <i class="fas fa-angle-double-right"></i>
                  </span>
                  <span class="text-light">The ability to source raw materials at very favorable price, production and technical expertise which enables breaking down cost to minimum.</span>
                </li>
                <li>
                  <span class="feat-list-icon">
                    <i class="fas fa-angle-double-right"></i>
                  </span>
                  <span class="text-light">Our professional expatriate production and merchandising team with their vast practical experiences in manufacturing and merchandising combine force to bring customers a professional, well managed, proactive time and action calendar for every order and style.</span>
                </li>
                <li>
                  <span class="feat-list-icon">
                    <i class="fas fa-angle-double-right"></i>
                  </span>
                  <span class="text-light">Our action plan enables them to analyse and foresees potential problems and plan necessary solutions doing so, all issues are controlled and resolved before they become unmanaged. The customer remains well informed about the status of each and every order without having to ask.</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- features right -->
          <div class="features-right">
            <div class="features-slider owl-carousel owl-theme">
              <div class="item">
                <img src="images/FT1.jpg" alt = "features image">
              </div>
              <div class="item">
                <img src="images/FT2.jpg" alt = "features image">
              </div>
              <div class="item">
                <img src="images/FT3.jpg" alt = "features image">
              </div>
              <div class="item">
                <img src="images/FT4.jpg" alt = "features image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of features -->

    <!-- numbers -->
    <section class="numbers py-4">
      <div class="container">
        <div class="numbers-wrapper">
          <!-- single item -->
          <div class="single-number">
            <span class="numbers-icon">
              <i class="fas fa-user-tie"></i>
            </span>
            <h2 class="number-text">752</h2>
            <p class="text-normal">Happy clients</p>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-number">
            <span class="numbers-icon">
              <i class="fas fa-trophy"></i>
            </span>
            <h2 class="number-text">20</h2>
            <p class="text-normal">Awards won</p>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-number">
            <span class="numbers-icon">
            <i class="fas fa-tshirt"></i>
            </span>
            <h2 class="number-text">232K</h2>
            <p class="text-normal">Product Development</p>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-number">
            <span class="numbers-icon">
              <i class="fas fa-truck"></i>
            </span>
            <h2 class="number-text">800</h2>
            <p class="text-normal">Shipment</p>
          </div>
          <!-- end of single item -->
        </div>
      </div>
    </section>
    <!-- end of numbers -->

    <!-- Quote section -->
    <section class="prices py-4" id = "prices">
      <div class="container">
        <div class="title">
          <h2 class="title-text">Minimum Order Quantity</h2>
          <div class="title-underline"></div>
        </div>

        <div class="prices-wrapper">
          <!-- single item -->
          <div class="single-price overlay">
            <h2 class="text-uppercase">Apparel</h2>
            <div class="price-box">
              <h2 class="price-text">
                MOQ:5000pcs<span>/order</span>
              </h2>
            </div>
            <ul class="pricing-list">
              <li class="text-light">Garments</li>
              <li class="text-light">Home-textile</li>
              <li class="text-light">Work costume</li>
            </ul>
            <button type="button" class="prices-btn">Ask for offer</button>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-price overlay">
            <h2 class="text-uppercase">Accessories</h2>
            <div class="price-box">
              <h2 class="price-text">
                MOQ:2000pcs<span>/order</span>
              </h2>
            </div>
            <ul class="pricing-list">
              <li class="text-light">Practical</li>
              <li class="text-light">Fashionable</li>
              <li class="text-light">Including design</li>
            </ul>
            <button type="button" class="prices-btn">Ask for offer</button>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-price overlay">
            <h2 class="text-uppercase">Crafts</h2>
            <div class="price-box">
              <h2 class="price-text">
                MOQ:2000pcs<span>/order</span>
              </h2>
            </div>
            <ul class="pricing-list">
              <li class="text-light">Home decor</li>
              <li class="text-light">Practical</li>
              <li class="text-light">Including design</li>
            </ul>
            <button type="button" class="prices-btn">Ask for offer</button>
          </div>
          <!-- end of single item -->
        </div>
      </div>
    </section>
    <!-- end of Quote section -->

    <!-- testimonial -->
    <section class="testimonial py-4">
      <div class="container">
        <div class="testimonial-wrapper owl-carousel owl-theme">
          <!-- single item -->
          <div class="item">
            <div class="single-test-top">
              <img src="images/TST1.jpg" alt="testimonial image">
              <div>
                <h2 class="text-large">Mr. XXX</h2>
                <h2 class="text-uppercase">Buyer, Spacix Group Ltd.</h2>
              </div>
            </div>
            <p class="text-normal">We selected NAVANA to facilitate our indirect spend categories competitive bidding processes. Since implementation over 3 years ago, we’ve had great success using the solution to generate savings and leverage the automated web-based platform to increase bid visibility, timing and structure to provide a more formalized and credible bidding process. Our inter-company cross-functional team members have found the site to be very user friendly along with the invited vendors.</p>

          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="item">
            <div class="single-test-top">
              <img src="images/TST2.jpg" alt = "testimonial image">
              <div>
                <h2 class="text-large">Mr. XXX</h2>
                <h2 class="text-uppercase">Supply-Chain specialist, Metro Clothing Ltd.</h2>
              </div>
            </div>
            <p class="text-normal">We selected NAVANA because it is extremely cost efficient and operationally effective. It is cost efficient because we do not need a team of people to do project setup. It is operationally effective because the user interface and the supplier interface are clean and tight. We consistently get feedback from suppliers that our system is the easiest to understand and navigate. However, we prefer a partner who blocks and tackles better than anyone else and that’s why we stay with the NAVANA.</p>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="item">
            <div class="single-test-top">
              <img src="images/TST3.jpg" alt="testimonial image">
              <div>
                <h2 class="text-large">Mr. XXX</h2>
                <h2 class="text-uppercase">Category specialist, Optima Group Ltd.</h2>
              </div>
            </div>
            <p class="text-normal">We get the solution to be easy for all parties with high vendor participation. We use the solution to negotiate small buys and extremely large capital purchases with success on all levels. Navana provideds a high level of support both on technical matters, selecting categories and strategic sourcing strategy.</p>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="item">
            <div class="single-test-top">
              <img src="images/TST4.jpg" alt="testimonial image">
              <div>
                <h2 class="text-large">Mrs. XXX</h2>
                <h2 class="text-uppercase">Senior designer, Castle Group Ltd.</h2>
              </div>
            </div>
            <p class="text-normal">NAVANA save us a significant amount of time each day. The team helped us design and develop the custom solution we needed and continue to add new features each year to make our jobs easier. We value our partnership with Navana and the sourcing management solutions they provide us.</p>
          </div>
          <!-- end of single item -->
        </div>
      </div>
    </section>
    <!-- end of testimonial -->

    <!-- team section -->
    <section class="team py-4" id="team">
      <div class="container">
        <div class="title">
          <h2 class="title-text">The A Team</h2>
          <div class="title-underline"></div>
        </div>

        <div class="team-wrapper">
          <!-- single item -->
          <div class="single-team overlay">
            <div class="team-img">
              <img src="images/TM1.jpg" alt="team image">

              <div class="team-icons">
                <span class="sq-icon">
                  <i class="fab fa-facebook"></i>
                </span>
                <span class="sq-icon">
                  <i class="fab fa-linkedin"></i>
                </span>
                <span class="sq-icon">
                  <i class="fab fa-twitter"></i>
                </span>
              </div>
            </div>
            <div class="team-footer">
              <h2 class="text-large">Mr. XXX</h2>
              <h2 class="text-uppercase">CEO</h2>
            </div>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-team overlay">
            <div class="team-img">
              <img src="images/TM2.jpg" alt = "team image">

              <div class="team-icons">
                <span class="sq-icon">
                  <i class="fab fa-facebook"></i>
                </span>
                <span class="sq-icon">
                  <i class="fab fa-linkedin"></i>
                </span>
                <span class="sq-icon">
                  <i class="fab fa-twitter"></i>
                </span>
              </div>
            </div>
            <div class="team-footer">
              <h2 class="text-large">Mr. XXX</h2>
              <h2 class="text-uppercase">Senior Business Developer</h2>
            </div>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-team overlay">
            <div class="team-img">
              <img src="images/TM3.jpg" alt = "team image">

              <div class="team-icons">
                <span class="sq-icon">
                  <i class="fab fa-facebook"></i>
                </span>
                <span class="sq-icon">
                  <i class="fab fa-linkedin"></i>
                </span>
                <span class="sq-icon">
                  <i class="fab fa-twitter"></i>
                </span>
              </div>
            </div>
            <div class="team-footer">
              <h2 class="text-large">Mrs. XXX</h2>
              <h2 class="text-uppercase">Senior Merchandiser</h2>
            </div>
          </div>
          <!-- end of single item -->
        </div>
      </div>
    </section>
    <!-- end of team section -->

    <!-- blog section -->
    <section class="blog py-4" id = "blog">
      <div class="container">
        <div class="title">
          <h2 class="title-text">recent news</h2>
          <div class="title-underline"></div>
        </div>

        <div class="blog-wrapper">
          <!-- single item -->
          <div class="single-blog">
            <img src="images/BLG1.jpg" alt="blog image">
            <div class="single-blog-content">
              <div class="single-blog-top">
                <span>
                  <i class="fas fa-user"></i> Mr. XXX
                </span>
                <span>
                  <i class="fas fa-clock"></i> 15 Jan
                </span>
                <span>
                  <i class="fas fa-comment"></i> 46
                </span>
              </div>

              <h2 class="text-large">What Are Strategic Suppliers?</h2>
              <p class="text-light">What Are Strategic Suppliers? In the world of procurement management, one thing that’s a given is working with suppliers. One of the most important sourcing and procurement techniques is working with...</p>
              <a href="#" class="btn-link">Read More</a>
            </div>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-blog">
            <img src="images/BLG2.jpg" alt = "blog image">
            <div class="single-blog-content">
              <div class="single-blog-top">
                <span>
                  <i class="fas fa-user"></i> Mr. XXX
                </span>
                <span>
                  <i class="fas fa-clock"></i> 23 Mar
                </span>
                <span>
                  <i class="fas fa-comment"></i> 38
                </span>
              </div>

              <h2 class="text-large">What is a Reverse Auction? Why Do Buyers Like Them?</h2>
              <p class="text-light">As the process of procurement has become more automated, so has the strategic sourcing process and the components within it. Instead of simple, straightforward auctions or eAuctions where buyers bid on goods...</p>
              <a href="#" class="btn-link">Read More</a>
            </div>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="single-blog">
            <img src="images/BLG3.jpg" alt = "blog image">
            <div class="single-blog-content">
              <div class="single-blog-top">
                <span>
                  <i class="fas fa-user"></i> Mr. XXX
                </span>
                <span>
                  <i class="fas fa-clock"></i> 25 Aug
                </span>
                <span>
                  <i class="fas fa-comment"></i> 76
                </span>
              </div>

              <h2 class="text-large">Spend Analysis in Supply Chain Management</h2>
              <p class="text-light">Spend Analysis in Supply Chain Management The broader picture beyond procurement is the supply chain, as procurement (or purchasing) is just one step in the supply chain.  Fundamentally, the goal of the...</p>
              <a href="#" class = "btn-link">Read More</a>
            </div>
          </div>
          <!-- end of single item -->
        </div>
      </div>
    </section>
    <!-- end of blog section -->

    <!-- contact section -->
    <section class="contact py-4" id = "contact">
      <div class="container">
        <div class="title">
          <h2 class="title-text">Say Hello</h2>
          <div class="title-underline"></div>
        </div>

        <div class="contact-wrapper">
          <!-- contact info -->
          <div class="contact-info">
            <!-- single item -->
            <div class="single-contact">
              <span>
                <i class="fas fa-phone-volume"></i>
              </span>
              <h2 class="text-large">Phone</h2>
              <p class="text-light">+358 XXXXXXX</p>
            </div>
            <!-- end of single item -->
            <!-- single item -->
            <div class="single-contact">
              <span>
                <i class="far fa-envelope-open"></i>
              </span>
              <h2 class="text-large">Email</h2>
              <p class="text-light">info@navana.com</p>
            </div>
            <!-- end of single item -->
            <!-- single item -->
            <div class="single-contact">
              <span>
                <i class="fas fa-street-view"></i>
              </span>
              <h2 class="text-large">Location</h2>
              <p class="text-light">Ongenkoukku XX XX,
                XXX0 Vantaa, Finland</p>
            </div>
            <!-- end of single item -->
          </div>
          <form class="form" method="post" action="contact/index.php">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Name" required>
              <input type="text" class="form-control" placeholder="Email" required>
            </div>
            <input type="text" class="form-control" placeholder="Organization Name" required>
            <input type="text" class="form-control" placeholder="Subject">
            <textarea rows="8" placeholder="Message" required></textarea>
            <button type="button" class="btn-form">Send Message</button>
          </form>
        </div>
      </div>
      </section>
    <!-- end of contact section -->

    <!-- footer -->
    <footer class="footer py-3">
      <div class="container">
        <div class="footer-wrapper">
        <h2 class="footer-title">Connect us</h2>

          <div class="footer-social-icons">
              <span class="sq-icon">
                <a class="facebook" target="_blank" href="https://www.facebook.com">
              <i class="fab fa-facebook-f"></i></a>
            </span>
            <span class="sq-icon">
              <a class="twitter" target="_blank" href="https://twitter.com/?lang=en">
              <i class="fab fa-twitter"></i></a>
            </span>
            <span class="sq-icon">
              <a class="instagram" target="_blank" href="https://www.instagram.com/">
              <i class="fab fa-instagram-square"></i></a>
            </span>
            <span class="sq-icon">
              <a class="linkedin" target="_blank" href="https://fi.linkedin.com/">
              <i class="fab fa-linkedin-in"></i></a>
            </span>
            <span class="sq-icon">
              <a class="youtube" target="_blank" href="https://www.youtube.com/">
              <i class="fab fa-youtube"></i></a>
            </span>
            <span class="sq-icon">
            <a href="https://www.joc.com/rail-intermodal/rail-shippers" target="_blank">
            <i class="fa fa-rss" aria-hidden="true"></i></a>
            </span>
          </div>

          <p class="footer-text">
            copyright &copy;<a href="#home" class="company">NAVANA</a><span class="copyright-date"></span>.all rights reserved.
          </p>
        </div>
      </div>
    </footer>
    <!-- end of footer -->

    <!--########################-->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Owl carousel -->
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <!-- JS -->
    <script src="script.js"></script>
  </body>
</html>
