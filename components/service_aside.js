document.addEventListener("DOMContentLoaded", () => {
    const aside = `
     <aside class="sidebar has-marign-left sticky-top">
              <div class="widget widget-services">
                <h5 class="widget__title">Medical Services</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#"><span>ENT</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Pediatric & Neonatology<</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Internal Medicine</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Cardiology</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Orthopedics</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Dermatology</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Plastic Surgery</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Anesthesiology</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Urology</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Pulmonology</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Laproscopic Surgery</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Neuro Surger</span><i class="icon-arrow-right"></i></a></li>
                    <li><a href="#"><span>Sports Medicine</span><i class="icon-arrow-right"></i></a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-services -->
              <div class="widget widget-help bg-overlay bg-overlay-secondary-gradient">
                <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="background"></div>
                <div class="widget-content">
                  <div class="widget__icon">
                    <i class="icon-call3"></i>
                  </div>
                  <h4 class="widget__title">Emergency Cases</h4>
                  <p class="widget__desc">Please feel welcome to contact our friendly reception staff with any general
                    or medical enquiry call us.
                  </p>
                  <a href="tel:+917829224666" class="phone__number">
                    <i class="icon-phone"></i> <span>+917829224666</span>
                  </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-help -->
              <div class="widget widget-schedule">
                <div class="widget-content">
                  <div class="widget__icon">
                    <i class="icon-charity2"></i>
                  </div>
                  <h4 class="widget__title">Opening Hours</h4>
                  <ul class="time__list list-unstyled mb-0">
                    <li><span>Monday - Sunday</span><span>24 X 7</span></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-schedule -->

            </aside>
  `;
    document.getElementById("aside").innerHTML = aside;
});
