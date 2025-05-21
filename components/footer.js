document.addEventListener("DOMContentLoaded", () => {
    const footer = `
      <footer class="footer">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
              <div class="footer-widget-about">
                <img src="assets/images/logo/goodwell_logo.jpeg" alt="logo" class="mb-30">
                <p class="color-gray">Our goal is to deliver quality of care in a courteous, respectful, and
                  compassionate manner. We hope you will allow us to care for you and strive to be the first and best
                  choice for your family healthcare.
                </p>

              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Departments</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Obstetrics & Gynecology</a></li>
                    <li><a href="#">Orthopedics</a></li>
                    <li><a href="#">Pulmonology</a></li>
                    <li><a href="#">ENT</a></li>
                    <li><a href="#">Dermatology</a></li>
                    <li><a href="#">Laproscopic Surgery</a></li>
                    <li><a href="#">Pediatric & Neonatology</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Quick Links</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="home-modern.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="doctors-grid.html">Team</a></li>
                    <li><a href="contact-us.html">Contacts</a></li>
                    <li><a href="#">Blogs</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="footer-widget-contact">
                <h6 class="footer-widget__title color-heading">Quick Contacts</h6>
                <ul class="contact-list list-unstyled">
                  <li>If you have any questions or need help, feel free to contact with our team.</li>
                  <li>
                    <div style="display: flex;gap: 10px;">
                      <div><a href="tel:6364444988 " class="phone__number">
                          <i class="icon-phone"></i> <span>6364444988 </span>
                        </a></div>
                      <div>
                        <a href="tel:9008049699 " class="phone__number">
                          <i class="icon-phone"></i> <span>9008049699 </span>
                        </a>
                      </div>
                    </div>
                    </li>
                  <li>
                    <div style="display: flex;gap: 10px">
                      <div><a href="tel:08029727745 " class="phone__number">
                          <i class="icon-phone"></i> <span>08029727745 </span>
                        </a></div>
                      <div>
                        <a href="tel:08029727746 " class="phone__number">
                          <i class="icon-phone"></i> <span>08029727746 </span>
                        </a>
                      </div>
                    </div>
                    </li>
                    
                    <li>
                    <a href="mailto:goodwellhospital2025@gmail.com" class="phone__number">
                      <i class="fas fa-envelope"></i> <span>goodwellhospital2025 <br> @gmail.com</span>
                    </a>
                  </li>
                  <li class="color-body">56-04 cavalier tower dr Bender layout opp to decathlon kothanur bengaluru 560077</li>
                </ul>
                <div class="d-flex align-items-center">
                  <a href="https://maps.app.goo.gl/7StUN1Bw1AnGEM627" class="btn btn__primary btn__link mr-30">
                    <i class="icon-arrow-right"></i> <span class="text-nowrap">Get Direction</span>
                  </a>
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="https://x.com/Goodwell_112">X</a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=61575672526904"><i
                          class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/goodwell_hospital/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://in.pinterest.com/digigoodwellhospital/"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <span class="fz-14">Copyright 2025 - Goodwell Hospital All Right Reserved</span>

            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
              <nav>
                <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0">
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>

                </ul>
              </nav>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer>
    
  `;
    document.getElementById("footer").innerHTML = footer;
});
