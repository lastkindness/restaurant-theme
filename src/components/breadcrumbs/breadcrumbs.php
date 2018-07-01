<?php if( isset($breadcrumbs) && !empty($breadcrumbs) ): ?>
  <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
      <?php foreach ($breadcrumbs as $key => $breadcrumb):
        $classes = ( $key != count($breadcrumbs)-1 ) ? 'breadcrumb-item active' : 'breadcrumb-item';
      ?>
        <li class="<?php echo $classes; ?>">
          <a href="#"><?php echo $breadcrumb; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>
<?php else: ?>
  <span>No args for breadcrumbs were found.</span>
<?php endif; ?>
