          <!-- Header --><!-- <?= $page->uri() ?> -->
          <header id="header" <?php if ($page->uri()=='home'): ?>class="alt"<?php endif ?>>
<<<<<<< HEAD
            <h1><a href="<?php echo kirby()->urls()->index() ?>"><img src="<?php echo kirby()->urls()->assets() . '/images/logo_wh640.png'?>" style="width:18%"></a></h1>
=======
            <h1><a href="/"><img src="assets/images/logo_wh640.png" style="width:18%">
            <!-- Spectral --></a></h1>
>>>>>>> 026ed1da4f67572b5f9b3aead5ba1fa64f10d487
            <nav id="nav">
              <ul>
                <li class="special">
                  <a href="#menu" class="menuToggle"><span>Menu</span></a>
                  <div id="menu">
                    <ul>
<<<<<<< HEAD
                      <li><a href="<?php echo kirby()->urls()->index() ?>">Home</a></li>
                      <li><a href="<?php echo kirby()->urls()->index() . '/dailymenu'?>">Menu</a></li>
                      <li><a href="<?php echo kirby()->urls()->index() . '/blog'?>">Specials</a></li>
                      <li><a href="<?php echo kirby()->urls()->index() . '/gallerysub'?>">Gallery</a></li>
                      <li><a href="<?php echo kirby()->urls()->index() . '/news'?>">News</a></li>
                      <li><a href="<?php echo kirby()->urls()->index() . '/members'?>">Members</a></li>
=======
                      <li><a href="/">Home</a></li>
                      <li><a href="<?= page('dailymenu')->url() ?>">Daily Menu</a></li>
                      <li><a href="gallerysub">Gallery</a></li>
                      <li><a href="#">Sign Up</a></li>
>>>>>>> 026ed1da4f67572b5f9b3aead5ba1fa64f10d487
                    </ul>
                  </div>
                </li>
              </ul>
            </nav>
          </header>