<?php
/*Template Name: Внутренняя страница */
$path = get_template_directory_uri() . '/';
get_header(); ?>

<main class="b-main">
    <div class="container-page ">
        <div class="row">
            <div class="col-lg-4 col-xl-3 d-lg-block b-sidebar collapse" id="sidebarMenu">
                <? get_sidebar(); ?>
            </div>
            <div class="col-xl-9 col-lg-8 b-main__coll">
                <h1 class="title-h1"><?= get_the_title(); ?></h1>
                <div class="b-articles">
                    <?= get_the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</main>
</div>

<?php get_footer(); ?>
