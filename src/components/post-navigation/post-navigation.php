<?php
?>
<nav class="navigation post-navigation" role="navigation">
    <h2 class="screen-reader-text d-none">Post navigation</h2>
    <div class="nav-links">
        <div class="border"><span></span></div>
        <div class="nav-item nav-previous ">
            <a href="/single.html" rel="prev">
                <span class="screen-reader-text d-none">Previous Post</span>
                <span aria-hidden="true" class="nav-subtitle d-none">Previous</span>
                <span class="nav-title">
                    <span class="nav-title-icon-wrapper">
                        <?php require 'svg/left-arrow.svg'; ?>
                    </span>
<!--                    Come celebrate our grand opening!-->
                </span>
            </a>
        </div>
        <div class="nav-item nav-next ">
            <a href="/single.html" rel="next">
                <span class="screen-reader-text d-none">Next Post</span>
                <span aria-hidden="true" class="nav-subtitle d-none">Next</span>
                <span class="nav-title">
<!--                    Looking for local artists!-->
                    <span class="nav-title-icon-wrapper">
                        <?php require 'svg/right-arrow.svg'; ?>
                    </span>
                </span>
            </a>
        </div>
    </div>
</nav>
