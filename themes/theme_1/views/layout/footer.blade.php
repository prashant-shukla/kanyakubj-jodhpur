  <!-- footer section start -->
  <section>
      <footer class="footer">
          <!-- Footer Header -->
          <div class="container-fluid footer-header">
              <div class="row d-flex justify-content-between p-4">
                  <div class="col-lg-3 mb-3">
                      <a class="navbar-brand fw-bolder" href="#">Community</a>
                      <p>हमारा समुदाय हमारी हर गतिविधि का केंद्र है। हम एक समर्थनकारी वातावरण को बढ़ावा देने के लिए समर्पित हैं जहाँ हर कोई फल-फूल सके। हमारे साथ जुड़ें और एक सार्थक कनेक्शन बनाने, ज्ञान साझा करने, और एक-दूसरे को ऊपर उठाने के हमारे मिशन में शामिल हों</p>
                  </div>
                  <div class="col-lg-3 mb-3">
                      <h4 class="heading playfair-display-heading">Important Links</h4>
                      <div class="d-flex">
                          <ul class="list-unstyled me-5">
                              <li><a href="/">Home</a></li>
                              <li><a href="/about">About</a></li>
                              <li><a href="/events">Events</a></li>
                              <li><a href="/tribute">Tribute</a></li>
                          </ul>
                          <ul class="list-unstyled">
                              <li><a href="/members">Members</a></li>
                              <li><a href="/gallery">Gallery</a></li>
                              <li><a href="/achievers">Achievers</a></li>
                              <li><a href="/contact">Contact us</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3 mb-3">
                      <h4 class="heading playfair-display-heading">Contact Us</h4>
                      <p>Email: Kanyakubjbrahminsamaj5@gmail.com</p>
                      <p>Phone: 9509119053 , 9828100574 , 9251392192 , 9460273951</p>
                  </div>
              </div>
          </div>
      </footer>
      <!-- Footer Strip -->
      <div class="container-fluid footer-strip">
          <div class="container-fluid row d-flex justify-content-center align-items-center py-3">
              <div class="col-md-6">
                  <p class="mb-0 text-center text-md-start">All Rights Reserved.</p>
              </div>
              <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                  <a href="{{ setting('social.facebook') }}" class="social-icon text-decoration-none text-reset"><i
                          class="fa-brands fa-facebook mx-2"></i></a>
                  <a href="{{ setting('social.instagram') }}" class="social-icon text-decoration-none text-reset"><i
                          class="fa-brands fa-instagram mx-2"></i></a>
                  <a href="{{ setting('social.twitter') }}" class="social-icon text-decoration-none text-reset"><i
                          class="fa-brands fa-x-twitter mx-2"></i></a>
              </div>
          </div>
      </div>
  </section>
  <!-- footer section end  -->
  <!-- floating button start -->
  <a href="{{ setting('social.whatsapp') }}" class="float" target="_blank">
      <i class="fa-brands fa-whatsapp my-float"></i>
  </a>
  <!-- floating button end -->
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      AOS.init({
          duration: 1200, // Animation duration
      });
  </script>
  <script type="text/javascript">
      // Function to get cookie value by name
      function getCookieValue(name) {
          const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
          return match ? match[2] : null;
      }

      // Function to set a cookie
      function setCookie(name, value, days) {
          const date = new Date();
          date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
          document.cookie = `${name}=${value};expires=${date.toUTCString()};path=/`;
      }

      // Initialize Google Translate
      function googleTranslateElementInit() {
          new google.translate.TranslateElement({
              pageLanguage: 'en',
              includedLanguages: 'en,hi,gu,ta,te,bn,kn,ml,mr,pa,or',
              layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
              autoDisplay: false
          }, 'google_translate_element');
      }

      // Set default language if 'googtrans' cookie does not exist
      if (!getCookieValue('googtrans')) {
          setCookie('googtrans', '/en/{{ setting('localization.default_language') }}',
          1); // Set default language to Gujarati
          location.reload(); // Reload the page to apply the default translation
      } else {
          googleTranslateElementInit(); // Initialize Google Translate manually
      }
  </script>



  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
  </script>

  </html>
