        <!-- Footer -->
          <footer id="footer">
            <div class="inner">
              <h2 class="major">Get in touch</h2>
              <p>A dispensary that is worth a visit. At Higher Grade we take our time to make all patients feel welcome and appreciated.</p>
              <form method="post" action="#">
                <div class="field">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" />
                </div>
                <div class="field">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" />
                </div>
                <div class="field">
                  <label for="message">Message</label>
                  <textarea name="message" id="message" rows="4"></textarea>
                </div>
                <ul class="actions">
                  <li><input type="submit" value="Send Message" /></li>
                </ul>
              </form>
              <ul class="contact">
                <li class="fa-home">
                  3111 W.38th Ave.<br />
                  Denver, 80211<br />
                </li>
                <li class="fa-clock-o">Mon-Sat 10:00am -  7:00pm<br />
                  Sun 12:00pm -  5:00pm
                </li>
                <li class="fa-phone">(303) 955-0186</li>
              </ul>


            <ul class="icons">
              <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
              <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
              <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
              <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
              <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
              <li>&copy; Higher Grade</li>
            </ul>
          </footer>

      </div>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.onvisible.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
<?php if (($page->uri()=='gallery') || ($page->uri()=='gallerysub')): ?>
      <script src="assets/js/jquery.photoswipe-global.js"></script>
      <script src="assets/js/photoswipe-ui-default.min.js"></script>
<?php endif ?>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/jquery.cookie.js"></script>
      <script src="assets/js/age-verification.js"></script>
      <script src="assets/js/main.js"></script>

  </body>
</html>