<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="css/styles.css">


<section class="newsletter-section">
  <div class="newsletter-container">
    <h2 class="newsletter-title">Stay Updated with Our Newsletter</h2>
    <p class="newsletter-description">Sign up to receive the latest news, updates, and exclusive offers directly to your inbox. Don't miss out on any of our exciting content!</p>
    <form class="newsletter-form" action="/submit-newsletter" method="POST">
      <input type="email" name="email" placeholder="Enter your email address" required>
      <button type="submit">Subscribe Now</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="bg-light text-dark pt-5 pb-4">
  <div class="container">
    <div class="row">
      <!-- About Section -->
      <div class="col-md-4 mb-3">
        <h5>About</h5>
        <p>Learn more about the author, Eugene Crowley, and his works. Discover his journey, achievements, and insights.</p>
        <a href="#" class="btn btn-primary" style="color: white;">Read More</a>
      </div>
      
      <!-- Quick Links -->
      <div class="col-md-4 mb-3">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#">Books</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      
      <!-- Contact Information -->
      <div class="col-md-4 mb-3">
        <h5>Contact</h5>
        <address>
          <p>Email: <a href="mailto:info@yourwebsite.com">info@crowleyeugene.com</a></p>
          <p>Follow us on:</p>
          <ul class="list-unstyled d-flex">
            <li class="me-3"><a href="#" class="text-dark"><i class="fab fa-facebook-f"></i></a></li>
            <li class="me-3"><a href="#" class="text-dark"><i class="fab fa-twitter"></i></a></li>
            <li class="me-3"><a href="#" class="text-dark"><i class="fab fa-instagram"></i></a></li>
            <li class="me-3"><a href="#" class="text-dark"><i class="fab fa-pinterest-p"></i></a></li>
            <li class="me-3"><a href="#" class="text-dark"><i class="fab fa-linkedin-in"></i></a></li>
            <li class="me-3"><a href="#" class="text-dark"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </address>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="row mt-4">
      <div class="col-12 text-center">
        <p class="mb-0">© <?php echo date("Y"); ?> Eugene Crowley. All rights reserved.</p>
        <p class="mb-0">
          <a href="#">Privacy Policy</a> | 
          <a href="#">Terms of Service</a> | 
          <a href="#">Cookie Policy</a> | 
          <a href="#">Disclaimer</a>
        </p>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
