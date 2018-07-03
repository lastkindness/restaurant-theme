<?php function nu_tags($tags) { ?>
  <div class="cat-tags-links">
    <div class="tags-links">
      <span class="screen-render-text">Tags</span>
      <?php foreach ($tags as $tag) : ?>
        <a class="entry-date-chip" href="#" rel="tag"><?php echo $tag; ?></a>
      <?php endforeach; ?>
    </div>
</div>
<?php } ?>
