          <!-- Header --><!-- <?= $page->uri() ?> -->
          <header id="header" <?php if ($page->uri()=='home'): ?>class="alt"<?php endif ?>>
            <h1><a href="<?php echo kirby()->urls()->index() ?>"><img src="<?php echo kirby()->urls()->assets() . '/images/logo_wh640.png'?>" style="width:18%"></a></h1>
            <nav id="nav">
              <ul>
                <li class="special">
                  <a href="#menu" class="menuToggle"><span>Menu</span></a>
                  <div id="menu">
                    <ul>
                      <li><a href="<?php echo kirby()->urls()->index() ?>">Home</a></li>
                      <li><a href="<?php echo kirby()->urls()->index() . '/dailymenu'?>">Menu</a></li>
                      <li><a href="<?php echo kirby()->urls()->index() . '/blog'?>">Specials</a></li>
                      <li><a href="<?php echo kirby()->urls()->index() . '/gallerysub'?>">Gallery</a></li>
                      <li><a href="<?php echo kirby()->urls()->index() . '/news'?>">News</a></li>
                      <li><a href="<?php echo kirby()->urls()->index() . '/members'?>">Members</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </nav>
          </header>