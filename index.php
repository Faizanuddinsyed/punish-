<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Bridge suite crm </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favIcon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/bridge.css" rel="stylesheet">

  <style>
    .modern-crm-section {
      padding: 30px;
      background: linear-gradient(313.83deg, rgba(255, 237, 233, 0.68) 6.48%, rgba(118, 200, 252, 0.25) 47.9%, rgba(255, 255, 255, 0) 100%);
    }

    .logo-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-bottom: 10px;
      /* Reduced padding */
    }

    .logo-left,
    .logo-right {
      max-width: 100px;
      margin: 0 10px;
      /* Reduced margin */
    }

    .content {
      text-align: left;
    }

    .content h1 {
      font-size: 36px;
      font-weight: 700;
      margin-bottom: 10px;
      color: #0f3e65;
    }

    .intro-text {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .info-section {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      /* Reduced margin */
    }

    .info-item {
      flex: 0 0 auto;
    }

    .trophy-icon {
      width: 100px;
      height: auto;
      margin-right: 10px;
      /* Reduced margin */
    }

    .info-text {
      flex: 1;
    }

    .info-text p {
      margin: 5px 0;
    }

    .product-suite {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 4px;
      font-weight: 500;
      color: #000;
      margin-top: 10px;
    }

    .product-item {
      font-size: 18px;
      margin: 0 5px;
      padding: 8px;
      transition: transform 0.3s, color 0.3s;
      cursor: pointer;
    }

    .product-item:hover {
      transform: translateY(-5px);
      color: #007bff;
    }

    .form-wrapper {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    .form-header {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 10px;
      color: #0f3e65;
      text-align: center;
    }

    .form-group {
      margin-bottom: 10px;
    }

    .form-control {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 14px;
    }

    .btn-primary {
      background: #0982D1;
      color: #fff;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #065d9a;
    }

    /* Enhanced Responsive Design */
    @media (max-width: 768px) {
      .content h1 {
        font-size: 28px;
      }

      .intro-text {
        font-size: 16px;
      }

      .logo-container {
        flex-direction: column;
        align-items: center;
        padding-bottom: 10px;
      }

      .logo-left,
      .logo-right {
        max-width: 80px;
        margin: 10px 0;
      }

      .info-section {
        flex-direction: column;
        align-items: flex-start;
      }

      .info-text {
        text-align: left;
      }

      .form-wrapper {
        padding: 15px;
        margin-top: 15px;
      }

      .btn-primary {
        width: 100%;
        padding: 12px;
      }
    }

    @media (max-width: 480px) {
      .content h1 {
        font-size: 24px;
      }

      .intro-text {
        font-size: 14px;
      }

      .product-suite {
        gap: 5px;
      }

      .product-item {
        font-size: 16px;
        margin: 0 5px;
      }

      .form-wrapper {
        padding: 15px;
      }
    }








    /* Main section 4 animation styling */

    /* Section Background */
    /* Updated Styling for Cinntra SAP Add-Ons Section */
    .CinntraSAPadd_Ons {
      background: #ffffff;
      /* White background */
      padding: 60px 0;
      overflow: hidden;
      /* Ensure the overflow of the slider is hidden */
    }

    /* Main Content */
    .MainContent h2 {
      font-size: 2rem;
      font-weight: 700;
      color: #01579b;
      /* Darker blue for text */
    }

    .MainContent p {
      font-size: 1rem;
      color: #003c8f;
      /* Darker blue for text */
    }

    /* Icon Box */
    .SAPadd-ons__Services {
      position: relative;
      overflow: hidden;
      /* Hide overflow */
    }

    .slider {
      display: flex;
      width: max-content;
      /* Ensures the width expands based on content */
      animation: slide 20s linear infinite;
      /* Slide animation */
    }

    .Icon__Box {
      margin: 10px;
      padding: 15px;
      background: #f5f5f5;
      /* Light gray background */
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      width: 180px;
      /* Adjust width for better fit */
      flex: 0 0 auto;
      /* Prevent shrinking */
    }

    /* Hover effect */
    .Icon__Box:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Icon Text */
    .cinntra {
      font-weight: 600;
      color: #003c8f;
      /* Darker blue for text */
      margin-top: 10px;
      font-size: 0.9rem;
    }

    /* Button */
    .ActionBtn {
      background-color: #003c8f;
      /* Darker blue */
      color: #ffffff;
      padding: 10px 30px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .ActionBtn:hover {
      background-color: #002f6c;
      /* Even darker blue */
    }

    /* Slider Animation */
    @keyframes slide {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
        /* Adjusted for a seamless loop */
      }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .Icon__Box {
        width: 150px;
        /* Adjust width for smaller screens */
      }

      .MainContent h2 {
        font-size: 1.5rem;
        /* Adjust font size for smaller screens */
      }

      .MainContent p {
        font-size: 0.9rem;
        /* Adjust font size for smaller screens */
      }
    }


    /* section 5 personalized */
    .PersonalizedBRIDGE {
      background: #f0f7ee;
      padding: 50px 0;
    }

    .MainContent {
      text-align: left;
      padding-right: 30px;
      padding-left: 35px;
    }

    .MainContent h6 {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .MainContent p {
      margin-bottom: 20px;
      font-size: 1.1rem;
    }

    .ActionBtn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #5aad4d;
      color: #fff;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
    }

    .ActionBtn:hover {
      background-color: #4a8e3f;
    }

    .MainCounterBox {
      background-color: #0982d1;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      text-align: center;
    }

    .counter {
      font-size: 2rem;
      font-weight: bold;
      color: #fff;
    }

    .counter-plus {
      font-size: 1.5rem;
      color: #fff;
    }

    .MainCounterBox p {
      margin-top: 10px;
      font-size: 1rem;
    }

    /* call */

    .contact-popup-widgetCinntra {
      position: fixed;
      right: 20px;
      bottom: 15px;
      z-index: 9998;
      font-size: 16px;
      line-height: 1.2em;
      text-decoration: none !important;
    }

    .contact-popup-widgetCinntra .contact-popup {
      display: flex;
      align-items: center;
      justify-content: center;
      width: auto;
      height: 50px;
      /* Height adjusted for a cleaner look */
      padding: 0 20px;
      /* Adjusted padding for better visual balance */
      border-radius: 25px;
      /* Rounded corners for a modern feel */
      box-shadow: rgba(0, 0, 0, 0.2) 0 4px 8px;
      /* Softer and more pronounced shadow */
      font-family: 'Arial', sans-serif;
      text-align: center;
      font-weight: bold;
      font-size: 16px;
      /* Font size for better readability */
      color: #fff;
      /* White text for high contrast */
      background: #0982D1;
      /* Modern green background color */
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.3s ease;
      /* Smooth transitions */
    }

    .contact-popup-widgetCinntra .contact-popup:hover {
      background: #0f3e65;
      /* Darker green on hover */
      transform: scale(1.05);


    }
  </style>



</head>

<body class="index-page">

  <header>
    <div>

      <!-- Left Logo -->


      <!-- Navigation Menu -->

      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- Uncomment if needed -->
      <!-- <a class="btn-getstarted" href="#about">Get a Demo Now</a> -->

    </div>
  </header>
  <!-- section 1  -->


  <section class="modern-crm-section" id="NetSuiteImplementationUSA">
    <div class="container">
      <div class="logo-container">
        <img src="assets/img/logo-1.png" alt="Bridge" class="logo-left">
        <img src="assets/img/SAP-Gold-partner.png" alt="SAP Gold Partner" class="logo-right">
      </div>

      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center" style="padding-bottom: 100px;">
          <div class="content">
            <h1>Synergizing your Sales Teams and Profit Rate with Bridge Suite CRM</h1>
            <p class="intro-text">
              Maximize productivity across your sales force, field teams, online channels, and merchant services with the best CRM management software.
            </p>
            <div class="info-section">
              <div class="info-item">
                <img src="https://www.cinntra.com/add/bridge/bridge-img/trophy.png" alt="CRM Solution Endorsed by SAP" class="trophy-icon">
              </div>
              <div class="info-text">
                <p>✅ Boosted funnel efficiency by 57%</p>
                <p>✅ Complete Lead Capture on all Channels</p>
                <p>✅ Segmenting Leads for Bullseye Communication</p>
                <p>✅ Omnichannel Marketing Automation</p>
              </div>
            </div>
            <p class="product-suite">
              <span class="product-item">Vista</span>
              <span class="product-item">Galaxy</span>
              <span class="product-item">DMS</span>
              <span class="product-item">Serve</span>
              <span class="product-item">Pulse</span>
              <span class="product-item">Omni</span>
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-6">
          <div class="form-wrapper shadow-lg">
            <div class="form-header text-center">
              <h4>High-End Solution for Your Growing Business</h4>
            </div>
            <form action="#" method="post" id="getQuoteFrm" class="login-signup-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required="">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Company Email" required="">
              </div>
              <div class="form-group">
                <input type="text" name="CompanyName" class="form-control" placeholder="Company Name" required="">
              </div>
              <div class="form-group">
                <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" required="">
              </div>
              <div class="form-row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" name="country" class="form-control" placeholder="Country" required="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" name="PhoneNumber" class="form-control" placeholder="Phone Number" required="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea name="message" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required=""></textarea>
              </div>
              <div class="form-group text-center">
                <input type="submit" name="sub" id="submit" class="btn btn-primary btn-block" value="Request a Free Demo">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>







  <main class="main">



    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center" style=padding:50px>
            <div class="swiper-slide"><img style="max-width: 120px " src="https://www.cinntra.com/add/SAP/images/client/1.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/2.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/3.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/4.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/5.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/6.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/7.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/8.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/9.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/10.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/11.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/12.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/13.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/14.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/15.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/16.png" class="img-fluid" alt="cinntra"></div>
            <div class="swiper-slide"><img style="max-width: 120px" src="https://www.cinntra.com/add/SAP/images/client/17.png" class="img-fluid" alt="cinntra"></div>



          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->



    <!-- Why Us Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">
      <div class="container-fluid">
        <div class="box-container">
          <div class="row gy-4">
            <div class="col-lg-12 d-flex flex-column justify-content-center">
              <div class="content px-xl-5 text-center mb-4">
                <h3 class="heading">Bridge Suite CRM <strong class="sub-heading">Redefining Customer Engagement for the Digital Age</strong></h3>
                <p class="description">Our solutions empower businesses with cutting-edge tools to enhance sales efficiency and customer engagement.</p>
              </div>

              <div class="row px-xl-5 justify-content-center">
                <!-- First Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="info-card">
                    <h3 class="card-heading">Vista</h3>
                    <p class="card-subheading">Revolutionize your sales process</p>
                    <p class="card-description">From intuitive dashboards to smart inventory management and real-time delivery tracking, Vista empowers your team to close deals faster.</p>
                  </div>
                </div>

                <!-- Second Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="info-card">
                    <h3 class="card-heading">Galaxy</h3>
                    <p class="card-subheading">Conquer the Field, Dominate the Market</p>
                    <p class="card-description">Unleash the full potential of your field sales team with Galaxy. Leverage cutting-edge technology for precision geo-fencing, real-time performance tracking & more.</p>
                  </div>
                </div>

                <!-- Third Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="info-card">
                    <h3 class="card-heading">DMS</h3>
                    <p class="card-subheading">Strengthen Dealer Connections</p>
                    <p class="card-description">From sales and orders to payments and support, streamline every aspect of your dealer relationships, boosting efficiency and elevating user experience in one powerful solution.</p>
                  </div>
                </div>

                <!-- Fourth Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="info-card">
                    <h3 class="card-heading">Insight</h3>
                    <p class="card-subheading">Deep Dive into Data</p>
                    <p class="card-description">Gain valuable insights from comprehensive analytics and reports, helping you make informed decisions and optimize your strategies for maximum impact.</p>
                  </div>
                </div>

                <!-- Fifth Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="info-card">
                    <h3 class="card-heading">Connect</h3>
                    <p class="card-subheading">Seamless Integration</p>
                    <p class="card-description">Easily integrate with existing systems and tools, ensuring a smooth workflow and enhanced productivity across all departments.</p>
                  </div>
                </div>

                <!-- Sixth Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="info-card">
                    <h3 class="card-heading">Engage</h3>
                    <p class="card-subheading">Enhance Customer Experience</p>
                    <p class="card-description">Boost customer satisfaction with personalized interactions, efficient support, and streamlined communication through our innovative platform.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Embedded CSS -->
      <style>
        /* Section Styling */
        .why-us {

          background-color: #f8f9fa;
        }

        /* Box Container Styling */
        .box-container {
          background-color: #ffffff;
          border-radius: 12px;
          box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
          padding: 40px;
        }

        /* Heading Styling */
        .heading {
          font-size: 36px;
          font-weight: 700;
          color: #333;
          margin-bottom: 20px;
        }

        .sub-heading {
          font-size: 24px;
          font-weight: 500;
          color: #555;
        }

        .description {
          font-size: 18px;
          font-weight: 400;
          color: #666;
        }

        /* Info Card Styling */
        .info-card {
          background-color: #ffffff;
          border: 1px solid #ddd;
          border-radius: 8px;
          box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
          padding: 20px;
          text-align: center;
          transition: box-shadow 0.3s, transform 0.3s;
          min-height: 280px;
          /* Ensures all cards are at least 280px tall */
          display: flex;
          flex-direction: column;
          justify-content: space-between;
        }

        .info-card:hover {
          box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
          transform: translateY(-5px);
        }

        .card-heading {
          font-size: 22px;
          font-weight: 600;
          margin-bottom: 10px;
        }

        .card-subheading {
          font-size: 18px;
          font-weight: 400;
          color: #555;
          margin-bottom: 10px;
        }

        .card-description {
          font-size: 16px;
          font-weight: 400;
          color: #333;
        }

        /* Responsive Styling */
        @media (max-width: 767px) {
          .info-card {
            padding: 15px;
            min-height: auto;
            /* Removes fixed height on smaller screens */
          }

          .box-container {
            padding: 20px;
          }

          .heading {
            font-size: 28px;
          }

          .sub-heading {
            font-size: 20px;
          }

          .description {
            font-size: 16px;
          }
        }
      </style>
    </section>







    <!-- Section 5  Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Client Testimonials </h2>
        <p style="
               font-size: 20px;
               font-weight: 400;
           ">Hear from our customers who are using our CRM solution at its core </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://www.cinntra.com/add/bridge/bridge-img/Shobhit.jpg" class="testimonial-img" alt="">
                <h3>Shobhit Garg </h3>
                <h4>
                  Co-Founder &amp;
                  Mantra E-bike</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span style="font-size: 16px;"> The best thing about Bridge CRM is customization. On a rating scale of 1-10, I would rate it 20. With this excellent solution, I was able to track and manage the records of my sales executive and customers as well as propel my business to new heights.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://www.cinntra.com/add/bridge/bridge-img/Raghav.jpg" class="testimonial-img" alt="">
                <h3>Raghav Sachdeva </h3>
                <h4>Director</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span style="font-size: 16px
                  ;">
                    I would have to say whenever I am facing any challenge or issue, the Bridge CRM team is always there to help me out. The product has helped my company save valuable time, boost productivity, and keep track of the activities of our sales executives and customers.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->




          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->


    <!-- Section 6 Portfolio Section -->
    <section class="CinntraSAPadd_Ons">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="MainContent text-center">
              <h2>Serving a Myriad of Industries</h2>
              <p>Our Sales-Centric Lead Management System is customized for your industry.</p>
            </div>
          </div>
        </div>
        <div class="SAPadd-ons__Services">
          <div class="slider">
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/winner-1.png" alt="Manufacturing">
              <p class="cinntra">Manufacturing</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/scan.png" alt="Pharmaceutical">
              <p class="cinntra">Pharmaceutical</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/Flat.png" alt="Construction">
              <p class="cinntra">Construction</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/work.png" alt="F &amp; B">
              <p class="cinntra">F &amp; B</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/gardening.png" alt="Logistics">
              <p class="cinntra">Logistics</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://storage.googleapis.com/mainsitemedia/exchange.png" alt="Trading">
              <p class="cinntra">Trading</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/entrance.png" alt="Retail">
              <p class="cinntra">Retail</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/scanning.png" alt="Chemical">
              <p class="cinntra">Chemical</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/data-collection.png" alt="Education">
              <p class="cinntra">Education</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/Bulkinvoice.png" alt="BFSI">
              <p class="cinntra">BFSI</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/voucher.png" alt="Real-Estate">
              <p class="cinntra">Real-Estate</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/collaboration.png" alt="Hospitality">
              <p class="cinntra">Hospitality</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/invoice.png" alt="Healthcare">
              <p class="cinntra">Healthcare</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/internet.png" alt="Entertainment">
              <p class="cinntra">Entertainment</p>
            </div>
            <div class="Icon__Box text-center">
              <img src="https://www.cinntra.com/assets/image/Icons/cashier.png" alt="Automotive">
              <p class="cinntra">Automotive</p>
            </div>
          </div>
        </div>
        <div class="text-center">
          <a class="ActionBtn" id="Leth" data-bs-toggle="modal" data-bs-target="#exampleModal">Schedule a Call</a>
        </div>
      </div>
    </section>

    <!-- /Portfolio Section -->




    <!-- Section 7 Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Purpose-Built for Sales-Driven Marketing Achieve Brilliance in Sales and Marketing with Bridge Suite.</h2>

      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">360* Sales Insights:</a></h4>
              <p>Fuel sales performance and accountability with access to real-time data and meaningful insights, all within the CRM system</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link"> Visualized Sales Pipeline </a></h4>
              <p>Get a clear view of the entire sales pipeline with defined lead stages automatically briefly with one CRM software. </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Automate Repetitive Tasks</a></h4>
              <p> Tailored Dashboards and Reports

              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Tailored Dashboards and Reports</a></h4>
              <p>Gain concurrent insights with over 100+ reports and drill-down dashboards, monitoring KPIs from campaign impact to deal closure. </p>
            </div>
          </div><!-- End Service Item -->




        </div>

      </div>

    </section><!-- /Services Section -->


    <!-- section 8 Skills Section -->
    <section id="skills" class="skills section" style="padding: 60px 0;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-6">
                <div class="MainCounterBox" style="
              background-color: #ffffff;
              padding: 20px;
              border-radius: 10px;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
              text-align: center;
              margin-bottom: 20px;">
                  <span class="counter" style="
                font-size: 2.5rem;
                font-weight: 700;
                color: var(--accent-color);">300</span>
                  <span class="counter-plus" style="
                font-size: 2rem;
                font-weight: 700;
                color: var(--accent-color);">%</span>
                  <p style="
                font-size: 16px;
                font-weight: 400;
                color: #666;
                margin-top: 10px;">Better Lead Conversion Rate</p>
                </div>
              </div>
              <div class="col-6">
                <div class="MainCounterBox" style="
              background-color: #ffffff;
              padding: 20px;
              border-radius: 10px;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
              text-align: center;
              margin-bottom: 20px;">
                  <span class="counter" style="
                font-size: 2.5rem;
                font-weight: 700;
                color: var(--accent-color);">0.1</span>
                  <span class="counter-plus" style="
                font-size: 2rem;
                font-weight: 700;
                color:  var(--accent-color);">%</span>
                  <p style="
                font-size: 16px;
                font-weight: 400;
                color: #666;
                margin-top: 10px;">Lead Opportunity Drainage</p>
                </div>
              </div>
              <div class="col-6">
                <div class="MainCounterBox" style="
              background-color: #ffffff;
              padding: 20px;
              border-radius: 10px;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
              text-align: center;
              margin-bottom: 20px;">
                  <span class="counter" style="
                font-size: 2.5rem;
                font-weight: 700;
                color: var(--accent-color);">49</span>
                  <span class="counter-plus" style="
                font-size: 2rem;
                font-weight: 700;
                color:var(--accent-color) ;">%</span>
                  <p style="
                font-size: 16px;
                font-weight: 400;
                color: #666;
                margin-top: 10px;">Improved Revenue per Salesperson</p>
                </div>
              </div>
              <div class="col-6">
                <div class="MainCounterBox" style="
              background-color: #ffffff;
              padding: 20px;
              border-radius: 10px;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
              text-align: center;
              margin-bottom: 20px;">
                  <span class="counter" style="
                font-size: 2.5rem;
                font-weight: 700;
                color: var(--accent-color);">58</span>
                  <span class="counter-plus" style="
                font-size: 2rem;
                font-weight: 700;
                color: var(--accent-color);">%</span>
                  <p style="
                font-size: 16px;
                font-weight: 400;
                color: #666;
                margin-top: 10px;">Better Customer Retention Rate</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="MainContent" style="
          padding: 20px;
          background-color: #f9f9f9;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          text-align: left;">
              <h6 style="
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 20px;">Top Rated CRM Building Lead-Centered Businesses With 99% Happy Clients</h6>
              <p style="
            font-size: 16px;
            font-weight: 400;
            color: #666;
            margin-bottom: 30px;">Boost closure rates through seamless, automated personalization across all CX touchpoints with our trusted Sales Management Software CRM.</p>
              <a class="ActionBtn" style="
            background-color: var(--accent-color);
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: 600;
            transition: background-color 0.3s ease;" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Enhance Your CX</a>
            </div>
          </div>
        </div>
      </div>
    </section>


   <!-- Pricing Section -->
<!-- Pricing Section -->
<section id="pricing" class="pricing section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Pricing</h2>
      <p>Choose the plan that suits your needs</p>
    </div>

    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="true" style="
        background-color: #47b2e4;
        color: #fff;
        padding: 10px 20px;
        border-radius: 50px;
        margin: 5px;
        font-weight: 600;
        transition: background-color 0.3s, color 0.3s;
    " onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#47b2e4'; this.style.color='#fff';">
          Yearly
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="false" style="
        background-color: #47b2e4;
        color: #fff;
        padding: 10px 20px;
        border-radius: 50px;
        margin: 5px;
        font-weight: 600;
        transition: background-color 0.3s, color 0.3s;
    " onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#47b2e4'; this.style.color='#fff';">
          Monthly
        </button>
      </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
      <!-- Yearly Pricing -->
      <div class="tab-pane fade show active" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">
        <div class="row gy-4">
          <!-- Standard Plan -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item" style="
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 500px; /* Increase this value as needed */
            line-height: 1.6; /* Spacing between lines of text */
            letter-spacing: 0.5px; /* Slight spacing between letters */
        " onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1)';">
              <div>
                <h3>Standard</h3>
                <h4><sup>₹</sup>299<span> / user</span></h4>
                <ul style="
            font-size: 17px;
            font-weight: 400;
            padding-left: 20px; /* Additional padding for list items */
            margin-bottom: 20px; /* Space below the list */
        ">
                  <li><i class="bi bi-check"></i> <span>1 million Records</span></li>
                  <li><i class="bi bi-check"></i> <span>2 GB Data/User</span></li>
                  <li><i class="bi bi-check"></i> <span>Data Import/Export</span></li>
                  <li><i class="bi bi-check"></i> <span>Quotation Template</span></li>
                  <li><i class="bi bi-check"></i> <span>Invoice Template</span></li>
                  <li><i class="bi bi-check"></i> <span>Inventory Product List</span></li>
                </ul>
              </div>
              <a href="#" class="buy-btn" style="
              background-color: #47b2e4;
              color: #fff;
              padding: 15px 25px;
              border-radius: 5px;
              text-align: center;
              display: inline-block;
              text-decoration: none;
              font-size: 18px;
              font-weight: 600;
              transition: background-color 0.3s, color 0.3s;
          " onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#47b2e4'; this.style.color='#fff';">Buy Now</a>
            </div>
          </div>

          <!-- Premium Plan -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item" style="
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 500px; /* Increase this value as needed */
            line-height: 1.6; /* Spacing between lines of text */
            letter-spacing: 0.5px; /* Slight spacing between letters */
        " onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1)';">
              <div>
                <h3>Premium</h3>
                <h4><sup>₹</sup>499<span> / user</span></h4>
                <ul style="
            font-size: 17px;
            font-weight: 400;
            padding-left: 20px; /* Additional padding for list items */
            margin-bottom: 20px; /* Space below the list */
        ">
                  <li><i class="bi bi-check"></i> <span>Unlimited Records</span></li>
                  <li><i class="bi bi-check"></i> <span>5 GB Data/User</span></li>
                  <li><i class="bi bi-check"></i> <span>Priority Support</span></li>
                  <li><i class="bi bi-check"></i> <span>Advanced Analytics</span></li>
                  <li><i class="bi bi-check"></i> <span>Custom Templates</span></li>
                  <li><i class="bi bi-check"></i> <span>Dedicated Account Manager</span></li>
                </ul>
              </div>
              <a href="#" class="buy-btn" style="
              background-color: #47b2e4;
              color: #fff;
              padding: 15px 25px;
              border-radius: 5px;
              text-align: center;
              display: inline-block;
              text-decoration: none;
              font-size: 18px;
              font-weight: 600;
              transition: background-color 0.3s, color 0.3s;
          " onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#47b2e4'; this.style.color='#fff';">Buy Now</a>
            </div>
          </div>

          <!-- Enterprise Plan -->
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-item" style="
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 500px; /* Increase this value as needed */
            line-height: 1.6; /* Spacing between lines of text */
            letter-spacing: 0.5px; /* Slight spacing between letters */
        " onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1)';">
              <div>
                <h3>Enterprise</h3>
                <h4><sup>₹</sup>799<span> / user</span></h4>
                <ul style="
            font-size: 17px;
            font-weight: 400;
            padding-left: 20px; /* Additional padding for list items */
            margin-bottom: 20px; /* Space below the list */
        ">
                  <li><i class="bi bi-check"></i> <span>All Premium Features</span></li>
                  <li><i class="bi bi-check"></i> <span>Unlimited Data/User</span></li>
                  <li><i class="bi bi-check"></i> <span>24/7 Support</span></li>
                  <li><i class="bi bi-check"></i> <span>Advanced Customization</span></li>
                  <li><i class="bi bi-check"></i> <span>Exclusive Updates</span></li>
                  <li><i class="bi bi-check"></i> <span>Personalized Training</span></li>
                </ul>
              </div>
              <a href="#" class="buy-btn" style="
              background-color: #47b2e4;
              color: #fff;
              padding: 15px 25px;
              border-radius: 5px;
              text-align: center;
              display: inline-block;
              text-decoration: none;
              font-size: 18px;
              font-weight: 600;
              transition: background-color 0.3s, color 0.3s;
          " onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#47b2e4'; this.style.color='#fff';">Buy Now</a>
            </div>
          </div>

          <!-- Additional Plans -->
          <!-- Add similar blocks for additional pricing plans if needed -->
        </div>
      </div>

      <!-- Monthly Pricing -->
      <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
        <div class="row gy-4">
          <!-- Repeat the same pricing item structure here for monthly pricing plans -->
        </div>
      </div>
    </div>
  </div>
</section>







    <!-- Section 10 promo Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Cultivating Lead-Focused Sales Teams is easier with Bridge Suite </h3>

          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Sign In</a>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!--  Section 11 Faq  -->
    <!-- Faq 2 Section -->
    <section id="faq-2" class="faq-2 section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>

      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Is Bridge Suite CRM built on-premises or cloud? </h3>
                <div class="faq-content">
                  <p style="
                    font-size: 17px;
                    font-weight: 400;">On-premise CRM usually involves setting up physical servers in your office and installing the software on all devices on your local network. Bridge Suite is built on the cloud and maintained by the service provider, on their servers</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Will my employees use Bridge Suite CRM? </h3>
                <div class="faq-content">
                  <p style="
                    font-size: 17px;
                    font-weight: 400;">Bridge Suite has a well-designed, intuitive interface that provides a clean and clutter-free experience. Ensure that everyone's CRM programs are intuitive, and that repetitive activities for entering and accessing information are simple to complete. CRM must consistently demonstrate the value of using the system. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3> Can I easily migrate to Bridge Suite? </h3>
                <div class="faq-content">
                  <p style="
                    font-size: 17px;
                    font-weight: 400;">Yes. If you have all your data on Excel sheets, or if you're using another CRM, it must be easy to get your data into the Bridge Suite CRM software and have your business up and running, right from the first day. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3> Does Bridge Suite offer a free trial?</h3>
                <div class="faq-content">
                  <p style="
                    font-size: 17px;
                    font-weight: 400;">Yes. We offer a 14-day free trial with our limited and functional user abilities. This helps in providing a better understanding of the CRM software. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Can your CRM be integrated with ERP? </h3>
                <div class="faq-content">
                  <p style="
                    font-size: 17px;
                    font-weight: 400;">Yes. Bridge Suite can be integrated with top ERPs like SAP Business One, Oracle’s NetSuite, and other renowned ERPs. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Is your CRM expensive for SME’s? </h3>
                <div class="faq-content">
                  <p style="
                    font-size: 17px;
                    font-weight: 400;">CRM systems are more expensive due to IT overhead, hardware, software, and maintenance, while Cloud-based CRM solutions are maintained, upgraded, and backed up by providers, reducing subscription costs. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Faq 2 Section -->



    <style>
      .contact {
        padding: 60px 0;
        background-color: #f8f9fa;
      }

      .section-title h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 40px;
      }

      .contact-form-header {
        margin-bottom: 30px;
      }

      .contact-form-header h3 {
        font-size: 1.75rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
      }

      .contact-form {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .contact-form .form-group {
        margin-bottom: 20px;
      }

      .contact-form .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 15px;
        font-size: 16px;
      }

      .contact-form .form-control::placeholder {
        color: #6c757d;
      }

      .contact-form .btn-primary {
        background-color: #0982d1;
        border: none;
        color: #fff;
        padding: 12px 25px;
        border-radius: 5px;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        transition: background-color 0.3s ease;
      }

      .contact-form .btn-primary:hover {
        background-color: #065a8e;
      }

      .contact-image img {
        max-width: 100%;
        border-radius: 8px;
      }

      @media (max-width: 768px) {
        .contact-form {
          padding: 20px;
        }

        .contact-form .btn-primary {
          padding: 10px 20px;
          font-size: 14px;
        }
      }
    </style>




  </main>

  <footer id="footer" class="footer">






    <div class="container copyright text-center mt-4">
      <p><span>Copyright © 2024</span> <strong class="px-1 sitename">Cinntra</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script>
    document.querySelectorAll('.flip-card').forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.querySelector('.flip-card-inner').style.transform = 'rotateY(180deg)';
      });
      card.addEventListener('mouseleave', () => {
        card.querySelector('.flip-card-inner').style.transform = 'rotateY(0deg)';
      });
    });
  </script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- Hero Section -->



</body>

</html>