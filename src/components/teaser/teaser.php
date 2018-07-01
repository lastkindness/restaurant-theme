<?php
if($post):
  require_once getcwd() . "/src/components/elements/date/date.php";
  require_once getcwd() . "/src/components/elements/tags/tags.php";
?>
  <article id="article_<?php echo $key; ?>" class="post-teaser">
    <header class="entry-header">
      <?php echo nu_date($post['date']); ?>
      <h2 class="post-title"><?php echo $post['title']; ?></h2>
    </header>
    <div class="post-thumbnail">
      <a href="#">
        <img src="components/teaser/teaser.jpg" alt="<?php echo $post['title']; ?>">
      </a>
    </div>
    <div class="tags">
      <?php echo nu_tags($post['tags']); ?>
    </div>
    <div class="entry-content">
      <p>
        <?php echo $post['content']; ?>
        <a href="#">Read more -></a>
      </p>
    </div>
  </article>
<?php else: ?>
  <span>No post was found</span>
<?php endif; ?>
