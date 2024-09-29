<div class="floating_btn">
    <a target="_blank" href="https://wa.me/+918075680885" aria-label="Whatsapp us">
      <div class="contact_icon">
        <i class="fa fa-whatsapp fab my-float"></i>
      </div>
    </a>
</div>

<footer class="gap no-bottom two" style="background-image: url(<?= base_url() ?>assets/img/footer-2.webp);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="logo">
                    <a href="<?= base_url() ?>">
                        <img data-src="<?= base_url() ?>assets/img/logo.webp" style="height: 80px;" alt="log">
                    </a>
                    <p>ECS is a leading web development and app development company in Kasaragod and Mangalore. We have experienced the developers and have been giving excellent service for 5 years.</p>
                    <img data-src="<?= base_url() ?>assets/img/payments.webp" alt="imgs">
                    <h6>Go Cashless and Pay through</h6>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-links">
                  <h3>Useful Links</h3>
                  <div class="boder"></div>
                    <ul>
                      <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url() ?>">Home</a></li>
                      <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('about-us') ?>">About</a></li>
                      <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('services') ?>">Services</a></li>
                      <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('our-works') ?>">Portfolio</a></li>
                      <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('contact-us') ?>">Contact Us</a></li> 
                      <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('payments') ?>">Payments options</a></li> 
                      <li><i class="fa-solid fa-angle-right"></i><a href="https://www.paypal.com/ncp/payment/KPAMH4579349L">Payment link</a></li> 
                      <li><i class="fa-solid fa-angle-right"></i><a href="<?= base_url('sitemap') ?>">Sitemap</a></li> 

                    </ul>
                  </div>
            </div>
            <div class="col-lg-5">
                <div class="footer-links">
                  <h3>Get In Touch</h3>
                  <div class="boder"></div>
                  <ul class="p-0">
                      <li>
                          <a href="callto:+91 8075680885">
                              <i class="fa fa-phone me-2"></i> +91 8075680885
                          </a>
                      </li>
                      <li>
                          <a href="mailto:ecs@exevor.com">
                              <i class="fa fa-envelope me-2"></i> ecs@exevor.com
                          </a>
                      </li>

                      <li>
                          <a href="mailto:ecsmangalore@gmail.com">
                              <i class="fa fa-envelope me-2"></i> ecsmangalore@gmail.com
                          </a>
                      </li>
                      <li>
                          <a href="<?= base_url('contact-us') ?>"> 
                              <i class="fa fa-location-dot me-2"></i>Manjeshwara, Kerala, India
                          </a>
                      </li>
                      <li>
                        <a href="<?= base_url('contact-us') ?>">
                          <i class="fa fa-location-dot me-2"></i>Mangalore, Karnataka, India
                        </a>
                      </li>
                      <li>
                        <a href="<?= base_url('contact-us') ?>">
                            <i class="fa fa-location-dot me-2"></i>Vitla, Karnataka, India
                        </a>
                      </li>
                  </ul>
                 <!--  <div class="ecs_map"> 
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12020.417118325335!2d74.8870409!3d12.7173739!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2f8c49ce63ad0fdf%3A0x6de63a1e52746484!2sExevor%20Cloud%20Solutions%20(ECS)!5e1!3m2!1sen!2sin!4v1724817347442!5m2!1sen!2sin" style="border:0;" title="mapssssssssss" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div> -->
                </div>
            </div>
        </div>
        <div class="copyrights">
            <p>Copyright © <a href="<?= 'https://ecs.exevor.com' ?>">ECS</a> 2024. All Rights Reserved.</p>
            <ul class="social-icon">
                <li><a aria-label="social media link" href="https://www.facebook.com/profile.php?id=61564523416981&mibextid=ZbWKwL"><i class="fa-brands fa-facebook-f"></i></a></li> 
                <li><a aria-label="social media link" href="https://www.instagram.com/exevor_cloud_solutions"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a aria-label="social media link" href="https://www.linkedin.com/company/exevor-cloud-solutions"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- progress -->
<div id="progress">
      <span id="progress-value"><i class="fa-solid fa-up-long"></i></span>
</div>
<!-- progress end -->
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
<!-- fancybox -->
<script src="<?= base_url() ?>assets/js/jquery.fancybox.min.js"></script>

<script src="<?= base_url('assets'); ?>/js/lozad.js"></script>
<script type="text/javascript"> 
    var observer = lozad('img', {
      threshold: 0.1,
      enableAutoReload: true,
      load: function(el) {
        if ($(el).hasClass('no_lozad')!=true) {
          el.src = el.getAttribute("data-src");
          el.onload = function() {
            el.classList.add('imfade')
                // toastr["success"](el.localName.toUpperCase() + " " + el.getAttribute("data-index") + " lazy loaded.")
          }
        }
      }
    })
// Picture observer
// with default `load` method
    var pictureObserver = lozad('.lozad-picture', {
      threshold: 0.1
    })
    window.onload = function () {
      setTimeout(function () {
        // document.querySelector('#mutativeImg1').dataset.src = 'images/thumbs/02.webp'
        // document.querySelector('#mutativeImg2').dataset.src = 'images/thumbs/02.webp'
        // toastr["success"]("Once data-src change, the element render again.")
      }, 3000)
    }
// Background observer
// with default `load` method
    var backgroundObserver = lozad('.lozad-background', {
      threshold: 0.1
    })
    observer.observe()
    pictureObserver.observe()
    backgroundObserver.observe()
  </script>

<script src="<?= base_url() ?>assets/js/custom.js"></script>
</body>
</html>