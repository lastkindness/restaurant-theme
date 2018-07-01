<?php function nu_date($date) { ?>
  <div class="entry-meta">
    <a class="entry-date-chip calendar" href="#" rel="bookmark">
      <time class="entry-date published" datetiem="">
        <?php echo $date; ?>
      </time>
    </a>
    <a class="entry-date-chip" href="#" rel="bookmark">
      <time class="updated" datetime="">
        <?php echo $date; ?>
      </time>
    </a>
  </div>
<?php } ?>
