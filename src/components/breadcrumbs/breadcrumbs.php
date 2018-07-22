<?php if( isset($breadcrumbs) && !empty($breadcrumbs) ): ?>
  <nav aria-label="breadcrumb" aria-label="breadcrumb">
    <ul class="breadcrumb-list">
      <?php foreach ($breadcrumbs as $key => $breadcrumb):
        $active = $key != count($breadcrumbs)-1; ?>

            <li class="breadcrumb-item <?php echo $active ? '' :'breadcrumb-item-active' ; ?>"><?php

                echo $active ?
                   '<a class="breadcrumb-link" href="#">' . $breadcrumb . '</a>'
                   :
                   '<span>' . $breadcrumb . '</span>' ?>

            </li>

      <?php endforeach; ?>
    </ul>
  </nav>
<?php else: ?>
  <span>No args for breadcrumbs were found.</span>
<?php endif; ?>
