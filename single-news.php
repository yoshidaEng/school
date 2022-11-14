<?php get_header(); ?>

    <main>
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- container -->
        <div class="container">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts()) : the_post(); ?>

                    <article>

                        <!-- news-header -->
                        <div class="news-header">
                            <h1 class="news-header__title"><?php the_title(); ?></h1>
                            <time class="news-header__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                        </div><!-- /.post-body -->

                        <!-- post-body -->
                        <div class="news-body">
                            <?php the_content(); ?>
                        </div><!-- /.post-body -->

                    </article>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php get_template_part('template-parts/request'); ?>

            <!-- school -->
            <section class="school">
                <div class="school__inner">
                    <p>お電話でのお問い合わせはこちら</p>
                    <div class="school__num">0123-456-7890</div><!-- /.school__num -->
                    <div class="school_hour">平日 08:00~20:00</div><!-- /.school_hour -->
                </div><!-- /.school__inner -->
            </section>

        </div><!-- container -->

    </main>

    <?php get_footer(); ?>