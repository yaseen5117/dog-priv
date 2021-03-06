<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <a href="/home"><img src="{{ asset('dog-prive/assets/img/logo.png')}}" alt="" class="img-fluid"></a>
             
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +39 380 101 1195<br>
              <strong>Email:</strong> Info@dogprive.it<br>
            </p>

            <div class="social-links">
              <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
              <a href="https://www.facebook.com/DogPrive/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/dogprive/" class="instagram"><i class="bi bi-instagram"></i></a>
              <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore
              legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form id="subscriber" enctype="multipart/form-data">
            @csrf
              <input type="email" name="email"><input type="submit" value="Subscribe">
              @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
              @endif
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>DogPrive</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/serenity-bootstrap-corporate-template/ -->
        Designed by <a target="_blank" href="https://www.fiverr.com/users/ghulamyaseen179">Ghulam Yaseen</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
      
