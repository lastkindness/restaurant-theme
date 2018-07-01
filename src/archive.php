<?php ob_start(); ?>

<main>
  <div class="container">
    <?php
    $breadcrumbs =
    array(
      'Home',
      'Category',
      'Posts'
    );
    include('components/breadcrumbs/breadcrumbs.php');
    ?>

    <h1>Posts</h1>

    <div class="row">
      <div class="col-lg-9">
        <div class="row">          
          <?php
          $posts = array(
            array( 'title' => 'First title', 'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...', 'date' => '26.07.2018', 'tags' => array('news', 'food', 'life') ),
            array( 'title' => 'Second title', 'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...', 'date' => '26.07.2018', 'tags' => array('news', 'food', 'life') ),
            array( 'title' => 'Third title', 'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...', 'date' => '26.07.2018', 'tags' => array('news', 'food', 'life') ),
            array( 'title' => 'Fourth title', 'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...', 'date' => '26.07.2018', 'tags' => array('news', 'food', 'life') ),
            array( 'title' => 'Fifth title', 'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...', 'date' => '26.07.2018', 'tags' => array('news', 'food', 'life') ),
            array( 'title' => 'Sixth title', 'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...', 'date' => '26.07.2018', 'tags' => array('news', 'food', 'life') )
          );
          foreach ($posts as $key => $post):
            ?>
            <div class="col-lg-4">
              <?php include('components/teaser/teaser.php'); ?>
            </div>
            <?php
          endforeach;
          ?>
        </div>

      </div>
      <div class="col-lg-3">
        <?php include('components/sidebar/sidebar.php'); ?>
      </div>
    </div>

    <?php
    $pages = array(1,2,3,4,5,6);
    include('components/pagination/pagination.php');
    ?>
  </div>
</main>


<?php $GLOBALS["content"] = ob_get_clean(); ?>

<?php require 'components/layout.php'; ?>
