<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Nyetir Yuk</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.ico') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="fa fa-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Nyetir<span>Yuk</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- < href="#body"><img src="{{ asset('img/logo.png" alt="" title="" /></') }}a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Makin Mudah <span>Nyetir Sendiri</span><br>Bersama Nyetir <span>Yuk</span>!</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="{{ asset('img/about-img.jpg') }}" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Salam, kami dari Nyetir Yuk,</h2>
            <h3>sebuah lembaga pendidikan dan pelatihan untuk sekolah mengemudi. Kami berkomitmen untuk memberikan pelatihan berkendara yang berkualitas dan aman bagi para calon pengemudi.</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Tenaga pengajar yang profesional dan berpengalaman di bidangnya.</li>
              <li><i class="ion-android-checkmark-circle"></i> Fasilitas yang memadai dan teknologi terbaru untuk memastikan setiap siswa mendapatkan pengalaman belajar yang maksimal.</li>
              <li><i class="ion-android-checkmark-circle"></i> Program pelatihan dan kursus berkendara untuk pemula, pengemudi berpengalaman, dan bahkan untuk pengemudi yang ingin meningkatkan keterampilan mereka.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Services</h2>
          <p>Nyetir Yuk Menyediakan banyak program dan fasilitas yang akan membuat calon pengemudi nyaman dan aman.</p>
        </div>

        <div class="row">

            <div class="col-lg-6">
                <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                <div class="icon"><i class="fa fa-car"></i></div>
                <h4 class="title"><a href="">Kursus teori dan praktek berkendara</a></h4>
                <p class="description">Program ini dirancang untuk memberikan siswa pengetahuan dan keterampilan dasar berkendara yang aman dan bertanggung jawab.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInLeft">
                <div class="icon"><i class="fa fa-shield"></i></div>
                <h4 class="title"><a href="">Keamanan berkendara</a></h4>
                <p class="description">Mobil yang digunakan sudah dimodifikasi agar instruktur dapat menjamin keamanan berkendara.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInRight">
                <div class="icon"><i class="fa fa-id-card"></i></div>
                <h4 class="title"><a href="">Pelatihan uji SIM</a></h4>
                <p class="description">Pelatihan ini membantu siswa mempersiapkan diri untuk ujian praktik dan teori SIM, dan memberikan tips dan strategi yang berguna untuk menghadapi ujian.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInRight" data-wow-delay="0.2s">
                <div class="icon"><i class="fa fa-plus"></i></div>
                <h4 class="title"><a href="">Pelatihan keterampilan khusus</a></h4>
                <p class="description">Pelatihan ini memberikan siswa pengalaman praktis dan keterampilan yang diperlukan untuk menghadapi situasi yang lebih sulit saat berkendara.</p>
                </div>
            </div>

        </div>

      </div>
    </section><!-- #services -->

<!--==========================
      Cars Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Cars</h2>
          <p>Mobil yang disediakan Nyetir Yuk sangat bervariatif dari berbagai merk. Mau belajar Manual atau Matic? Semua ada.</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="{{asset('img/clients/client-1.png') }}" alt="">
          <img src="{{asset('img/clients/client-2.png') }}" alt="">
          <img src="{{asset('img/clients/client-3.png') }}" alt="">
          <img src="{{asset('img/clients/client-4.png') }}" alt="">
          <img src="{{asset('img/clients/client-5.png') }}" alt="">
          <img src="{{asset('img/clients/client-6.png') }}" alt="">
        </div>

      </div>
    </section><!-- #clients -->

 <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Apa sih kata mereka yang udah belajar di Nyetir Yuk</p>
        </div>
        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                "Belajar mengemudi di Nyetir Yuk adalah pengalaman yang luar biasa. Instruktur mereka sangat ahli dan berpengalaman, dan selalu memberikan dukungan dan motivasi yang dibutuhkan. Saya sangat senang bisa menyelesaikan kursus ini dan merasa siap untuk mengemudi dengan lebih percaya diri dan nyaman."
                <img src="{{ asset('img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
              </p>
              
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                "Saya sangat senang belajar mengemudi di Nyetir Yuk. Instruktur mereka sangat profesional dan sabar, dan selalu memberikan tips dan saran yang berguna. Saya merasa sangat percaya diri setelah menyelesaikan kursus ini, dan sekarang bisa mengemudi dengan lebih aman dan nyaman."
                <img src="{{ asset('img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
              </p>
              
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                "Kursus di Nyetir Yuk benar-benar mengubah hidup saya. Saya sangat takut mengemudi sebelumnya, tetapi instruktur mereka membantu saya mengatasi ketakutan tersebut dan memberikan pelatihan yang sangat baik. Sekarang, saya bisa mengemudi dengan lebih percaya diri dan nyaman."
                <img src="{{ asset('img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
              </p>
              
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                "Saya sangat merekomendasikan Nyetir Yuk untuk semua orang yang ingin belajar mengemudi. Instruktur mereka sangat ahli dan sabar, dan mereka benar-benar peduli dengan kemajuan siswa mereka. Saya sangat senang dengan hasilnya dan merasa siap untuk mengemudi dengan lebih aman dan bertanggung jawab."
                <img src="{{ asset('img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
              </p>
              
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                "Kursus berkendara di Nyetir Yuk sangat terstruktur dan mudah dipahami. Instruktur mereka sangat sabar dan memberikan penjelasan yang jelas dan terperinci. Saya sangat senang dengan hasilnya dan merasa siap untuk mengemudi dengan lebih baik dan lebih aman."
                <img src="{{ asset('img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
              </p>
              
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Want to know more</h3>
            <p class="cta-text"> Kamu pengen tau lebih banyak tentang Nyetir Yuk? Bisa langsung WhatsApp ke admin Nyetir Yuk .</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">WhatsApp</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Instructor</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('img/team-1.jpg') }}" alt=""></div>
              <div class="details">
                <h4>Walter White</h4>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('img/team-2.jpg') }}" alt=""></div>
              <div class="details">
                <h4>Sarah Jhinson</h4>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('img/team-3.jpg') }}" alt=""></div>
              <div class="details">
                <h4>William Anderson</h4>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('img/team-4.jpg') }}" alt=""></div>
              <div class="details">
                <h4>Amanda Jepson</h4>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/magnific-popup/magnific-popup.min.js') }}"></script>
  <script src="{{ asset('lib/sticky/sticky.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
