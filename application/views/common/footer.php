<!-- ══════════════════════════════════════════
     FOOTER
     ══════════════════════════════════════════ -->
<style>
  .site-footer {
    background: #1a1a1a;
    color: #bbb;
    padding: 60px 0 0;
    font-size: 14px;
    line-height: 1.8;
  }
  .site-footer a { color: #bbb; text-decoration: none; transition: color .2s; }
  .site-footer a:hover { color: #cea651; }
 
  /* Logo & about */
  .footer-logo img { max-width: 200px; margin-bottom: 16px; }
  .footer-about-text { font-size: 13.5px; color: #999; margin-bottom: 20px; line-height: 1.7; }
 
  /* Location blocks */
  .footer-location { margin-bottom: 14px; padding-bottom: 14px; border-bottom: 1px solid rgba(255,255,255,.08); }
  .footer-location:last-of-type { border-bottom: none; }
  .footer-location .loc-name { color: #fff; font-weight: 700; font-size: 13px; display: block; margin-bottom: 3px; }
  .footer-location .loc-addr { font-size: 12.5px; color: #888; display: block; margin-bottom: 2px; }
  .footer-location .loc-phone { font-size: 13px; color: #cea651; }
  .footer-location .loc-phone:hover { color: #fff; }
 
  /* Column headings */
  .footer-col-title {
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .5px;
    margin-bottom: 18px;
    padding-bottom: 10px;
    border-bottom: 2px solid #cea651;
    display: inline-block;
  }
 
  /* Link lists */
  .footer-links { list-style: none; padding: 0; margin: 0; }
  .footer-links li { margin-bottom: 8px; }
  .footer-links li a { font-size: 13.5px; color: #999; }
  .footer-links li a:hover { color: #cea651; padding-left: 4px; }
  .footer-links li a::before { content: "› "; color: #cea651; }
 
  /* Social icons */
  .footer-socials { display: flex; gap: 10px; margin-top: 18px; flex-wrap: wrap; }
  .footer-socials a {
    width: 36px; height: 36px; border-radius: 50%;
    border: 1px solid rgba(255,255,255,.2);
    display: flex; align-items: center; justify-content: center;
    color: #bbb; font-size: 14px; transition: all .2s;
  }
  .footer-socials a:hover { background: #cea651; border-color: #cea651; color: #fff; }
 
  /* Bottom bar */
  .footer-bottom {
    background: #111;
    text-align: center;
    padding: 16px 0;
    font-size: 13px;
    color: #666;
    margin-top: 50px;
  }
  .footer-bottom a { color: #cea651; }
  .footer-bottom a:hover { color: #fff; }
 
  /* Divider between sections */
  .footer-divider { border-top: 1px solid rgba(255,255,255,.07); margin: 40px 0 0; }
</style>
 
<footer class="site-footer">
  <div class="container">
    <div class="row g-5">
 
      <!-- Col 1: Logo + About + Locations -->
      <div class="col-lg-4 col-md-12">
        <div class="footer-logo">
          <img src="<?=base_url('uploads/')?>assets/images/logo/logo-light.png" alt="6 Panchkarma & Wellness" onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
          <span style="display:none; color:#d89b87; font-size:20px; font-weight:800;">6 Panchkarma &amp; Wellness</span>
        </div>
        <p class="footer-about-text">
          6 Panchkarma &amp; Wellness Center is built to treat your problems with our Authentic therapies. We have a team of experienced doctors and trained therapists working on your health with the most comfortable therapies in a well-equipped, hygienic facility.
        </p>
        <div class="footer-socials">
          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
          <a href="#" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
 
        <hr style="border-color:rgba(255,255,255,.1); margin: 28px 0 20px;">
 
        <!-- Locations -->
        <div class="footer-location">
          <span class="loc-name">📍 Juhu, Andheri (West)</span>
          <span class="loc-addr">G-3/4, Bharat Apartment, CD Barfiwalla Marg, Juhu Lane, Andheri West, Mumbai – 400058</span>
          <a class="loc-phone" href="tel:+918657915422">+91 8657915422</a>
        </div>
        <div class="footer-location">
          <span class="loc-name">📍 Kandivali (West)</span>
          <span class="loc-addr">101, Maitri Swami Krupa, MG Cross Road No. 3, Kandivali West, Mumbai – 400067</span>
          <a class="loc-phone" href="tel:+918828855200">+91 8828855200</a>
        </div>
        <div class="footer-location">
          <span class="loc-name">📍 Goregaon (West)</span>
          <span class="loc-addr">No 1, Ground Floor, Swarupam, Plot No 79, Jawahar Nagar Road No 4, Goregaon West, Mumbai – 400104</span>
          <a class="loc-phone" href="tel:+918657777967">+91 8657777967</a>
        </div>
        <div class="footer-location">
          <span class="loc-name">📍 Borivali – LT Road</span>
          <span class="loc-addr">Office No. A/102, 1st Floor, New Gopal Premises CHS, L.T. Road, Borivali West, Mumbai – 400092</span>
          <a class="loc-phone" href="tel:+918657555515">+91 8657555515</a>
        </div>
        <div class="footer-location">
          <span class="loc-name">📍 Borivali – Yogi Nagar</span>
          <span class="loc-addr">Office No. 1 &amp; 2, 1st Floor, Rajkamal CHS Ltd., Yogi Nagar, Eksar, Borivali West, Mumbai – 400091</span>
          <a class="loc-phone" href="tel:+919769626565">+91 9769626565</a>
        </div>
      </div>
 
      <!-- Col 2: Business Divisions + Health Package + Quick Links -->
      <div class="col-lg-2 col-md-4 col-6">
 
        <div class="mb-4">
          <span class="footer-col-title">Business</span>
          <ul class="footer-links">
            <li><a href="https://www.herbalhillswellness.com/ayurvedic-third-party-manufacturer/">Private Label &amp; Manufacturing</a></li>
            <li><a href="https://www.herbalhillsprime.com/">Wholesale Division</a></li>
            <li><a href="https://www.herbalhillswellness.in/">Online Shop</a></li>
            <li><a href="https://herbalhillswellness.com/associate-doctor/">Associate Doctor</a></li>
          </ul>
        </div>
 
        <div class="mb-4">
          <span class="footer-col-title">Health Package</span>
          <ul class="footer-links">
            <li><a href="#">Detox Pro</a></li>
            <li><a href="#">Joint Care</a></li>
            <li><a href="#">Mann Shuddhi</a></li>
            <li><a href="#">Weight Management</a></li>
            <li><a href="#">5 Days Panchkarma</a></li>
          </ul>
        </div>
 
        <div>
          <span class="footer-col-title">Our Catalogue</span>
          <ul class="footer-links">
            <li><a href="#">Signature Treatment</a></li>
            <li><a href="#">Health Package</a></li>
            <li><a href="#">Price List</a></li>
          </ul>
        </div>
 
      </div>
 
      <!-- Col 3: Our Treatments (Disease-wise) -->
      <div class="col-lg-3 col-md-4 col-6">
        <span class="footer-col-title">Our Treatments</span>
        <ul class="footer-links">
          <li><a href="#">Acidity Treatment</a></li>
          <li><a href="#">Arthritis – Joint Care</a></li>
          <li><a href="#">Asthma Treatment</a></li>
          <li><a href="#">Blood Pressure</a></li>
          <li><a href="#">Chronic Cold &amp; Cough</a></li>
          <li><a href="#">Constipation</a></li>
          <li><a href="#">Diabetes Treatment</a></li>
          <li><a href="#">Eye Disease</a></li>
          <li><a href="#">Hair Fall Treatment</a></li>
          <li><a href="#">Heart Problems</a></li>
          <li><a href="#">Insomnia</a></li>
          <li><a href="#">Liver Cleanse</a></li>
          <li><a href="#">Migraine</a></li>
          <li><a href="#">Paralysis</a></li>
          <li><a href="#">Pcos-Pcod Treatment</a></li>
          <li><a href="#">Skin Treatment</a></li>
          <li><a href="#">Stress Relief Treatment</a></li>
          <li><a href="#">Thyroid Treatment</a></li>
          <li><a href="#">Weight Loss Treatment</a></li>
        </ul>
      </div>
 
      <!-- Col 4: HH Signature Treatments + Therapies -->
      <div class="col-lg-3 col-md-4 col-12">
 
        <div class="mb-4">
          <span class="footer-col-title">Signature Treatment</span>
          <ul class="footer-links">
            <li><a href="#">Apatarpana</a></li>
            <li><a href="#">Drishti</a></li>
            <li><a href="#">Keshya</a></li>
            <li><a href="#">Padabhyanga</a></li>
            <li><a href="#">Saundarya</a></li>
            <li><a href="#">Santulana</a></li>
            <li><a href="#">Santarpana</a></li>
            <li><a href="#">Sukha</a></li>
            <li><a href="#">Swasth Vardhan</a></li>
            <li><a href="#">Udvartana</a></li>
            <li><a href="#">Vishrama</a></li>
            <li><a href="#">Vishudhi</a></li>
          </ul>
        </div>
 
        <div>
          <span class="footer-col-title">Our Therapies</span>
          <ul class="footer-links">
            <li><a href="#">Agnikarma</a></li>
            <li><a href="#">Anuvasana Basti</a></li>
            <li><a href="#">Face Abhyanga</a></li>
            <li><a href="#">Sarvanga Abhyanga</a></li>
            <li><a href="#">Greeva Basti</a></li>
            <li><a href="#">Janu Basti</a></li>
            <li><a href="#">Leech Therapy</a></li>
            <li><a href="#">Nasya</a></li>
            <li><a href="#">Navarakizhi</a></li>
            <li><a href="#">Niruha Basti</a></li>
            <li><a href="#">Pichu</a></li>
            <li><a href="#">Podikizhi</a></li>
            <li><a href="#">Shirodhara</a></li>
            <li><a href="#">Virechan</a></li>
          </ul>
        </div>
 
      </div>
 
    </div><!-- /row -->
 
    <!-- SEO link bar -->
    <div class="footer-divider"></div>
    <div style="padding: 20px 0; font-size: 12.5px; color: #555; text-align: center; line-height: 2;">
      <a href="#">Weight Loss by Ayurvedic Treatment</a> |
      <a href="#">Ayurvedic Treatment of Eyes</a> |
      <a href="#">Ayurvedic Treatment for Hair Fall</a> |
      <a href="#">Ayurvedic Joint Pain Treatment</a> |
      <a href="#">Ayurvedic Treatment of Skin</a> |
      <a href="#">Treatment for Vata Dosha</a> |
      <a href="#">Ayurvedic Massage</a> |
      <a href="#">Ayurveda for Younger Skin</a> |
      <a href="#">Ayurvedic Body Scrub</a> |
      <a href="#">Ayurvedic Body Cleansing</a>
    </div>
 
  </div><!-- /container -->
 
  <!-- Bottom copyright bar -->
  <div class="footer-bottom">
    <div class="container">
      &copy; 2026 <a href="#">6 Panchkarma &amp; Wellness</a>, All Rights Reserved &nbsp;|&nbsp;
      Developed by <a href="https://digitizebrand.com/" target="_blank">Digitize Brand Hub, Pune (MH)</a>
    </div>
  </div>
</footer>

    

<!-- Jquery 3.7.0 Min Js -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?=base_url('uploads/')?>assets/js/jquery.js"></script>
    <!-- Bootstrap min Js -->
    <script src="<?=base_url('uploads/')?>assets/js/bootstrap.min.js"></script>
    <!-- Mean menu Js -->
    <script src="<?=base_url('uploads/')?>assets/js/meanmenu.js"></script>
    <!-- Swiper bundle min Js -->
    <script src="<?=base_url('uploads/')?>assets/js/swiper-bundle.min.js"></script>
    <!-- Counterup min Js -->
    <script src="<?=base_url('uploads/')?>assets/js/jquery.counterup.min.js"></script>
    <!-- Datetimepicker min Js -->
    <script src="<?=base_url('uploads/')?>assets/js/jquery.datetimepicker.full.min.js"></script>
    <!-- Wow min Js -->
    <script src="<?=base_url('uploads/')?>assets/js/wow.min.js"></script>
    <!-- Fancybox Js -->
    <script src="<?=base_url('uploads/')?>assets/js/jquery.fancybox.js"></script>
    <!-- Nice select min Js -->
    <script src="<?=base_url('uploads/')?>assets/js/nice-select.min.js"></script>
    <!-- Parallax Js -->
    <script src="<?=base_url('uploads/')?>assets/js/parallax.js"></script>
    <!-- Splitting Js -->
    <script src="<?=base_url('uploads/')?>assets/js/splitting.js"></script>
    <!-- Vanilla Tilt Js -->
    <script src="<?=base_url('uploads/')?>assets/js/vanilla-tilt.js"></script>
    <!-- Waypoints Js -->
    <script src="<?=base_url('uploads/')?>assets/js/jquery.waypoints.js"></script>
    <!-- Gsap -->
    <script src="<?=base_url('uploads/')?>assets/js/gsap/gsap.min.js"></script>
    <script src="<?=base_url('uploads/')?>assets/js/gsap/ScrollTrigger.min.js"></script>
    <script src="<?=base_url('uploads/')?>assets/js/gsap/ScrollSmoother.min.js"></script>
    <!-- Script Js -->
    <script src="<?=base_url('uploads/')?>assets/js/script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){

            document.querySelectorAll('.mega-toggle').forEach(function(item){

                item.addEventListener('click', function(e){

                    if(window.innerWidth < 992){

                        e.preventDefault();

                        let menu = this.nextElementSibling;

                        document.querySelectorAll('.mega-menu').forEach(function(m){

                            if(m !== menu){
                                m.classList.remove('show');
                            }

                        });

                        menu.classList.toggle('show');
                    }

                });

            });

        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            if (window.innerWidth < 992) {

                document.querySelectorAll('.dropdown-toggle').forEach(function (dropdown) {

                    dropdown.addEventListener('click', function (e) {

                        e.preventDefault();

                        let menu = this.nextElementSibling;

                        document.querySelectorAll('.dropdown-menu').forEach(function (item) {

                            if (item !== menu) {
                                item.classList.remove('show');
                            }

                        });

                        menu.classList.toggle('show');

                    });

                });

            }

        });
    </script>
</body>
</html>
