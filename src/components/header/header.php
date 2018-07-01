<?php $menu = ['HOME', 'MENU', 'BLOG', 'RESERVATION', 'GALLERY', 'CONTACTS']; ?>

<header class="header">
  <div class="container">
    <div class="row flex-nowrap align-items-center justify-content-between">
      <div class="col-auto">
        <a class="header-logo" href="#">
          <img src="components/header/maxresdefault.jpg" alt="logo"/>
        </a>
      </div>
      <div class="col-auto">
        <nav class="header-nav">
          <ul class="header-nav-list">
            <?php foreach ($menu as $index => $val) { ?>
              <li class="header-nav-list-item">
                <a href="#"><?php echo $val ?></a>
                <div class="header-nav-list-item-dropdown">
                  <ul>
                    <?php foreach (['Daily menu', 'Season menu', 'Diet menu'] as $index => $val) { ?>
                      <li>
                        <a href="#"><?php echo $val ?></a>
                        <?php if ($index == 1) { ?>
                          <div class="header-nav-list-item-dropdown">
                            <ul>
                              <?php foreach (['Summer menu', 'Children menu', 'Diet menu', 'Special offers'] as $index => $val) { ?>
                                <li><a href="#"><?php echo $val ?></a></li>
                              <?php } ?>
                            </ul>
                          </div>
                        <?php } ?>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </li>
            <?php } ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
