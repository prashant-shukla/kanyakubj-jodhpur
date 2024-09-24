  <!-- footer section start -->
  <section>
    <footer class="footer">
      <!-- Footer Header -->
      <div class="container-fluid footer-header">
        <div class="row d-flex justify-content-between p-4">
          <div class="col-lg-3 mb-3">
            <a class="navbar-brand fw-bolder" href="#">Community</a>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero dignissimos cum ullam debitis,
              reprehenderit quaerat ut suscipit nam deleniti animi totam eveniet cumque iure obcaecati tempora sunt
              deserunt. Repudiandae, molestiae?</p>
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
            <p>Email: support@example.com</p>
            <p>Phone: +123456789</p>
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
          <a href="{{setting('social.facebook')}}" class="social-icon text-decoration-none text-reset"><i class="fa-brands fa-facebook mx-2"></i></a>
          <a href="{{setting('social.instagram')}}" class="social-icon text-decoration-none text-reset"><i
              class="fa-brands fa-instagram mx-2"></i></a>
          <a href="{{setting('social.twitter')}}" class="social-icon text-decoration-none text-reset"><i
              class="fa-brands fa-x-twitter mx-2"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- footer section end  -->
  <!-- floating button start -->
  <a href="{{setting('social.whatsapp')}}" class="float" target="_blank">
    <i class="fa-brands fa-whatsapp my-float"></i>
  </a>
  <!-- floating button end -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1200, // Animation duration
  });
</script>
</html>