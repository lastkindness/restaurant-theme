<?php
if($post):?>

  <article id="article_<?php echo $key; ?>" class="post-teaser">
    <header class="entry-header">
      <?php
          $date = $post['date'];
          include(getcwd() . "/src/components/elements/date/date.php");
      ?>
      <h2 class="post-title"><?php echo $post['title']; ?></h2>
    </header>
    <div class="post-thumbnail">
      <a href="#">
        <img src="components/teaser/teaser.jpg" alt="<?php echo $post['title']; ?>">
      </a>
    </div>
    <div class="tags">
        <?php
            $tags = $post['tags'];
            include(getcwd() . "/src/components/elements/tags/tags.php");
        ?>
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
