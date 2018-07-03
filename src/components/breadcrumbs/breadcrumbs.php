<?php if( isset($breadcrumbs) && !empty($breadcrumbs) ): ?>
  <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
      <?php foreach ($breadcrumbs as $key => $breadcrumb):
        $active = $key != count($breadcrumbs)-1; ?>

            <li class="breadcrumb-item <?php echo $active ? '' :'active' ; ?>"><?php

                echo $active ?
                   '<a href="#">' . $breadcrumb . '</a>'
                   :
                   '<span>' . $breadcrumb . '</span>' ?>

            </li>

      <?php endforeach; ?>
    </ul>
  </nav>
<?php else: ?>
  <span>No args for breadcrumbs were found.</span>
<?php endif; ?>
