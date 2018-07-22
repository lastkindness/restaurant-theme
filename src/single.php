<?php ob_start(); ?>
<main>

        <?php
        $title = 'Single';
        $title_content = "Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind";
        $image_url = 'components/page-title/img/single.png';
        require 'components/page-title/page-title.php';
        ?>
        <div class="contacts_wrapper">
            <div class="container">
                <?php
                    $breadcrumbs =
                        array(
                            'Brie Restaurant',
                            'Blog',
                            'Post',
                        );
                    require 'components/breadcrumbs/breadcrumbs.php';

                    $post = array(
                        'title'   => 'Looking for perfect cook',
                        'content' => '
                        <p>Are you a Townsville cook? If so, we’d love to chat!</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        ',
                        'date'    => '26.07.2018',
                        'tags'    => array( 'Food', 'Parties', 'Restaurant', 'Restaurant', 'Foo', 'Food' ),
                    );

                ?>
                <div class="wrap row">
                   <div id="primary" class="content-area col-lg-9">
                        <main id="main" class="site-main" role="main">
                            <article id="post-1" class="post-1 post type-post status-publish format-standard has-post-thumbnail hentry category-announcements tag-food tag-events">
                                <header class="teaser-header">
                                    <?php
                                        $date = $post['date'];
                                        include(getcwd() . "/src/components/elements/date/date.php");
                                    ?>
                                    <h1 class="teaser-title">
                                        <?php echo $post['title']; ?>
                                    </h1>
                                    <div class="teaser-tags">
                                        <?php
                                            $tags = $post['tags'];
                                            include(getcwd() . "/src/components/elements/tags/tags.php");
                                        ?>
                                    </div>
                                </header>
                                <div class="entry-content">
                                    <?php echo $post['content']; ?>
                                </div>

                                <?php require 'components/post-navigation/post-navigation.php'; ?>

                            </article>
                        </main>
                    </div>
                    <div class="col-lg-3">
                        <?php require 'components/sidebar/sidebar.php'; ?>
                    </div>
                </div>

</main>


<?php $GLOBALS['content'] = ob_get_clean(); ?>

<?php require 'components/layout-no_footer.php'; ?>