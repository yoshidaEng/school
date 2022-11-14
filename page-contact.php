<?php get_header(); ?>

    <!-- main-contents -->
    <main class="main-contents">

        <!-- page-header -->
        <div class="page-header _contact">
            <h1 class="page-header__title">お問い合わせ・資料請求</h1>
        </div><!-- /.page-header -->

        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- container -->
        <div class="container _narrow">

            <!-- page-lead -->
            <p class="page-lead">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p><!-- /.page-lead -->

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </div><!-- /.container -->

    </main>

    <?php get_footer(); ?>