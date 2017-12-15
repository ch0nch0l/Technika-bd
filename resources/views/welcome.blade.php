<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user/layout/head')
  </head>
  <body>
     @include('user/layout/header')

    <!-- About Section Start -->
    <section id="about" class="section">
      <div class="container">
        <div class="section-header">
          <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Who We Are</h3>
          <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">About Us</h2>
        </div>
        <div class="row">
          <div class="col-md-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <p>Technika group is a leading indenting, trading and manufacturing company in Bangladesh.</p>
            <p>Technika Machinery supplies complete production lines to Food, Beverages, Pharmaceutical, Plastic, Oil, GAS, Cement, Sugar, Power Generation, Fertilizer, Glass, Ceramic, Energy, Environment, Paper, Poly Packaging Solutions, Pharma-Tech, Health, Medical-Tech, Water Management, Agro, Communications, Telecom, Defense Tactics, Network, Safety &amp; Security Industries of Bangladesh.</p>
            <p>Technika Machinery has worldwide business affiliations with various world famous foreign manufacturing companies. Get in touch with us to know how you can join our Channel Partner program and learn about how we can shoulder you in achieving your business goals and expanding your reach. Your success is our purpose.</p>

          </div>
        </div>
        <div class="counters">
          <div class="row"> 
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="wow fadeInUp" data-wow-delay=".2s">
                <div class="facts-item">
                  <div class="fact-count">
                    <h3><span class="counter">5</span></h3>
                    <h4>Sister Concerns</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="wow fadeInUp" data-wow-delay=".4s">
                <div class="facts-item">
                  <div class="fact-count">
                    <h3><span class="counter">18</span></h3>
                    <h4>Field Of Activity</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="wow fadeInUp" data-wow-delay=".6s">
                <div class="facts-item">
                  <div class="fact-count">
                    <h3><span class="counter">6</span></h3>
                    <h4>Business Principles</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="wow fadeInUp" data-wow-delay=".8s">
                <div class="facts-item">
                  <div class="fact-count">
                    <h3><span class="counter">100</span>%</h3>
                    <h4>Client Satisfaction</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="img-about-out">
        <img src="img/about-img.png" alt="">
      </div>
    </section>
    <!-- About Section End -->

    @include('user/layout/activities')

    <!-- Portfolio Section -->
    <section id="portfolio" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">
          <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Technika Group's Business Principles</h3>
          <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">We Follow 6 Business Principles</h2>
        </div>
        <div class="contents text-center">        
          <div class="row">
            <div class="bsns-prin-icon col-md-2 col-sm-6 col-xs-12">
              <div class="service-box wow fadeInUp" centered data-wow-duration="1000ms" data-wow-delay="450ms">
                <div class="icon">
                    <i class="fa fa-handshake-o fa-4x"></i>
                </div>
                <h3 class="bsns-prin">Client Service</h3>
              </div>
            </div>

            <div class="bsns-prin-icon col-md-2 col-sm-6 col-xs-12">
              <div class="service-box wow fadeInUp" centered data-wow-duration="1000ms" data-wow-delay="450ms">
                <div class="icon">
                    <i class="fa fa-cogs fa-4x"></i>
                </div>
                <h3 class="bsns-prin">Operational Excellence</h3>
              </div>
            </div>

            <div class="bsns-prin-icon col-md-2 col-sm-6 col-xs-12">
              <div class="service-box wow fadeInUp" centered data-wow-duration="1000ms" data-wow-delay="450ms">
                <div class="icon">
                    <i class="fa fa-shield fa-4x"></i>
                </div>
                <h3 class="bsns-prin">Integrity</h3>
              </div>
            </div>

            <div class="bsns-prin-icon col-md-2 col-sm-6 col-xs-12">
              <div class="service-box wow fadeInUp" centered data-wow-duration="1000ms" data-wow-delay="450ms">
                <div class="icon">
                    <i class="fa fa-balance-scale fa-4x"></i>
                </div>
                <h3 class="bsns-prin">Fairness</h3>
              </div>
            </div>

            <div class="bsns-prin-icon col-md-2 col-sm-6 col-xs-12">
              <div class="service-box wow fadeInUp" centered data-wow-duration="1000ms" data-wow-delay="450ms">
                <div class="icon">
                    <i class="fa fa-hourglass-2 fa-4x"></i>
                </div>
                <h3 class="bsns-prin">Responsibility</h3>
              </div>
            </div>

            <div class="bsns-prin-icon col-md-2 col-sm-6 col-xs-12">
              <div class="service-box wow fadeInUp" centered data-wow-duration="1000ms" data-wow-delay="450ms">
                <div class="icon">
                    <i class="fa fa-trophy fa-4x"></i>
                </div>
                <h3 class="bsns-prin">Winning Culture</h3>
              </div>
            </div>
          </div>
          <a rel="nofollow" href="#get-in-touch" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Get In touch</a>
        </div>
      </div>
    </section>
    <!-- Portfolio Section Ends --> 

    @include('user/layout/companies')

    @include('user/layout/team')

    

    

    <!-- Contact Icon Start -->
    <section id="contact">
      <div class="section contact-icon">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-3">
              <div class="box-icon wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
                <div class="icon icon-primary">
                  <i class="icon-map"></i>
                </div>
                <p>
                  House# 441(2nd floor), Road# 30, New D.O.H.S Mohakhali, Dhaka-1206, Bangladesh
                </p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="box-icon wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms">
                <div class="icon icon-secondary">
                  <i class="icon-envelope"></i>
                </div>
                <p><span class="email">Technika Group: </span> contact@technika-bd.com<br>
                <span class="email">Marketing Department:</span> sales@technika-bd.com<br>
                <span class="email">Technical Service:</span> support@technika-bd.com</br>
                <span class="email">Accounts Department:</span> accounts@technika-bd.com</br>
                <span class="email">Business Development Department</span> internationals@technika-bd.com</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-3">
              <div class="box-icon wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="700ms">
                <div class="icon icon-tertiary">
                  <i class="icon-phone"></i>
                </div>
                <p>
                  <span class="email">Phone: </span> +88-02-88 613 381<br>
                  <span class="email">Fax: </span> +88-02-9891 540<br>
                  <span class="email">Cell-1: </span> +880 1826 190 005<br>
                  <span class="email">Cell-2: </span> +880 1813 100 571
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Icon End -->
      @include('user/layout/footer')
  </body>
</html>