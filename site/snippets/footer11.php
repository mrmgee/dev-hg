        <!-- Footer -->
          <footer id="footer">
            <div class="inner">
              <h2 class="major">Follow us <a href="https://www.instagram.com/highergradeco/" target="_blank">@highergradeco</a></h2>
              <ul class="icons">
                <li><a href="https://www.instagram.com/highergradeco/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="https://www.facebook.com/HigherGradeCO/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="https://twitter.com/HigherGradeCO" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
              </ul>

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

            <ul class="copyright">
              <li>&copy; Higher Grade</li>
            </ul>
          </footer>

      </div>

    <!-- Scripts -->
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.scrollex.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.scrolly.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.onvisible.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/skel.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/util.js'?>"></script>
<?php if (($page->uri()=='gallery') || ($page->uri()=='gallerysub')): ?>
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.photoswipe-global.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/photoswipe-ui-default.min.js'?>"></script>
<?php endif ?>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.cookie.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/age-verification.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/main.js'?>"></script>

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-101943993-1', 'auto');
        ga('send', 'pageview');
      </script>
  </body>
</html>