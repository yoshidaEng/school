<?php get_header(); ?>

    <!-- main-contents -->
    <main class="main-contents">

        <!-- page-header -->
        <div class="page-header _blog">
            <h1 class="page-header__title">ブログ</h1>
        </div><!-- /.page-header -->

        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- container -->
        <div class="container">

            <!-- heading -->
            <h2 class="heading-lv2"><?php single_cat_title(); ?>一覧</h2>

            <!-- content-wrapper -->
            <div class="content-wrapper">

                <!-- blog-list-wrapper -->
                <div class="blog-list-wrapper">

                    <!-- blog-list -->
                    <ul class="blog-list">

                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>

                                <li class="blog-list__item">
                                    <div class="blog-list__body">
                                        <time class="blog-list__date"><?php the_time('Y-m-d'); ?></time>
                                        <p class="blog-list__title">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php
                                                if (mb_strlen($post->post_title, 'UTF-8') > 50) {
                                                    $title = mb_substr($post->post_title, 0, 40, 'UTF-8');
                                                    echo $title . '……';
                                                } else {
                                                    echo $post->post_title;
                                                }
                                                ?>
                                            </a>
                                        </p>
                                        <p class="blog-list__text"><?php the_excerpt(); ?></p>
                                    </div><!-- /.blog-list__body -->
                                    <div class="blog-list__thumb">
                                        <span class="tag blog-list__tag"> <?php echo get_category_name(); ?></span>

                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_noimage.jpg" alt="">
                                        <?php endif; ?>

                                    </div><!-- /.blog-list__thumb -->
                                </li><!-- /.blog-list__item -->

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>

                </div><!-- /.blog-list-wrapper -->

                <?php echo get_template_part( './template-parts/pager' ); ?>

            </div><!-- /.content-wrapper -->

            <?php get_template_part('template-parts/request'); ?>

            <!-- school -->
            <section class="school">
                <div class="school__inner">
                    <p>お電話でのお問い合わせはこちら</p>
                    <div class="school__num">0123-456-7890</div><!-- /.school__num -->
                    <div class="school_hour">平日 08:00~20:00</div><!-- /.school_hour -->
                </div><!-- /.school__inner -->
            </section>

        </div><!-- /.container -->

    </main>

    <?php get_footer(); ?>