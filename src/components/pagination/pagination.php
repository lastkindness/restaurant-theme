<?php if( isset($pages) && !empty($pages) ): ?>
  <nav aria-label="Pagination">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link prev" href="#">
          &larr;
        </a>
      </li>
      <?php foreach ($pages as $page): $classes = ($page == 3) ? 'page-link current' : 'page-link'; ?>
        <li class="page-item">
          <a class="<?php echo $classes; ?>" href="#"><?php echo $page; ?></a>
        </li>
      <?php endforeach; ?>
      <li class="page-item">
        <a class="page-link points" href="#">
          ...
        </a>
      </li>
      <li class="page-item">
        <a class="page-link next" href="#">
          &rarr;
        </a>
      </li>
    </ul>
  </nav>
<?php else: ?>
  <span>No args for pagination were found.</span>
<?php endif; ?>
