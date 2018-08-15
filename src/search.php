<?php ob_start(); ?>

    <main>
        <div class="container">

            <?php include 'components/search-form/search-form.php'; ?>

            <h1 class="search-title">Searching results</h1>

            <?php
            $breadcrumbs =
                array(
                    'Home',
                    'Category',
                    'Posts',
                );
            require 'components/breadcrumbs/breadcrumbs.php';
            ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php
                        $posts = array(
                            array(
                                'title'   => 'Something delicious you can eat and play with',
                                'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...',
                                'date'    => '26.07.2018',
                            ),
                            array(
                                'title'   => 'Second title',
                                'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...',
                                'date'    => '26.07.2018',
                            ),
                            array(
                                'title'   => 'Third title',
                                'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...',
                                'date'    => '26.07.2018',
                            ),
                            array(
                                'title'   => 'Fourth title',
                                'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...',
                                'date'    => '26.07.2018',
                            ),
                            array(
                                'title'   => 'Fifth title',
                                'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...',
                                'date'    => '26.07.2018',
                            ),
                            array(
                                'title'   => 'Sixth title',
                                'content' => 'История успеха. Для того чтобы закончить тему необходимо всего лишь...',
                                'date'    => '26.07.2018',
                            ),
                        );
                        foreach ( $posts as $key => $post ) :
                            ?>
                            <div class="col-lg-12">
                                <?php include 'components/teaser-2/teaser-2.php'; ?>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>

                </div>
            </div>

            <?php
            $pages = array( 1, 2, 3, 4, 5, 6 );
            require 'components/pagination/pagination.php';
            ?>
        </div>
    </main>


<?php $GLOBALS['content'] = ob_get_clean(); ?>

<?php require 'components/layout.php'; ?>