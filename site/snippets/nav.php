          <!-- Header --><!-- <?= $page->uri() ?> -->
          <header id="header" <?php if ($page->uri()=='home'): ?>class="alt"<?php endif ?>>
            <h1><a href="/"><img src="assets/images/logo_wh640.png" style="width:18%">
            <!-- Spectral --></a></h1>
            <nav id="nav">
              <ul>
                <li class="special">
                  <a href="#menu" class="menuToggle"><span>Menu</span></a>
                  <div id="menu">
                    <ul>
                      <li><a href="/">Home</a></li>
                      <li><a href="<?= page('dailymenu')->url() ?>">Daily Menu</a></li>
                      <li><a href="gallerysub">Gallery</a></li>
                      <li><a href="#">Sign Up</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </nav>
          </header>