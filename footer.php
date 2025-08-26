<style>
  .footer-section {
    background-color: #ad8585ff; /* Dark background */
    color: #f5f5f5;           /* Light text */
    width: 100%;
  }

  .footer-section a {
    color: #ccc;
    text-decoration: none;
  }

  .footer-section a:hover {
    color: #fff;
    text-decoration: underline;
  }

  .footer-logo-img {
    max-width: 150px;
    height: auto;
  }

  .custom-social a {
    color: #f5f5f5;
    font-size: 18px;
    transition: color 0.3s;
  }

  .custom-social a:hover {
    color: #00bcd4;
  }

  .footer-section .list-unstyled li {
    margin-bottom: 8px;
  }

  .footer-section .list-inline a {
    color: #ccc;
  }

  .footer-section .list-inline a:hover {
    color: #fff;
  }

  .footer-section iframe {
    max-width: 100%;
    border-radius: 8px;
  }

  @media (max-width: 768px) {
    .footer-section {
      text-align: center;
    }
    .text-end {
      text-align: center !important;
    }
    iframe {
      height: 250px;
      width: 100%;
    }
  }
</style>

<footer class="footer-section py-12 ">
  <div class="container">
    <div class="row">

      <!-- Left Column: Logo, About, Social -->
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="footer-logo-wrap mb-3">
          <a href="#" class="footer-logo">
            <img src="images/logo.png" alt="Company Logo" class="footer-logo-img"  style="width: 150px; height: auto;">
          </a>
        </div>
        <p>Design with love by Yaswanth M S</p>
        <ul class="list-unstyled custom-social d-flex gap-3">
          <li><a href="#" aria-label="Facebook"><span class="fab fa-facebook-f"></span></a></li>
          <li><a href="#" aria-label="Twitter"><span class="fab fa-twitter"></span></a></li>
          <li><a href="#" aria-label="Instagram"><span class="fab fa-instagram"></span></a></li>
          <li><a href="#" aria-label="LinkedIn"><span class="fab fa-linkedin"></span></a></li>
        </ul>
      </div>
	  <div class="col-lg-4">
        <div class="row">
          <div class="col-6 col-md-6">
            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>
          </div>
          <div class= "col-md-4">
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Knowledge Base</a></li>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Our Team</a></li>
              <li><a href="#">Leadership</a></li>
              <li><a href="#">Privacy Policy</a></li>
			  <li><a href="#">Python</a></li>
          <li><a href="#">Django</a></li>
          <li><a href="#">Flask</a></li>
            </ul>
			  
          </div>
        </div>
      </div>
	  <div class="col-lg-4 mb-4 mb-lg-0 text-end">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.3084071283974!2d76.97635137452008!3d11.015471454740041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859b4c388bbbb%3A0x10f74e67296be643!2sCloudSwan%20Solution!5e0!3m2!1sen!2sin!4v1755443248808!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    </div>

      <!-- Center Column: Career Image -->
    

      <!-- Right Column: Links -->
      

    <!-- Technology Links Row -->
    <div class="row mt-4">
      <div class="col text-center">
        <ul class="list-inline">
          
        </ul>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="border-top pt-4 mt-4">
      <div class="row">
        <div class="col-lg-6 text-center text-lg-start mb-2 mb-lg-0">
          <p class="mb-0">&copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved — Designed with love by Yaswanth</p>
        </div>
        <div class="col-lg-6 text-center text-lg-end">
          <ul class="list-inline mb-0">
            <li class="list-inline-item me-3"><a href="#">Terms &amp; Conditions</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
