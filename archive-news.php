<?php get_header(); ?>

    <main>

        <!-- page-header -->
        <div class="page-header _information">
            <h1 class="page-header__title">お知らせ</h1>
        </div><!-- /.page-header -->

        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- container -->
        <div class="container">

            <!-- heading -->
            <h2 class="heading-lv2">お知らせ一覧</h2>

            <!-- information-list -->
            <ul class="information-list">

                <?php
                $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 10,
                );
                $news_query = new WP_Query( $args );
                if ($news_query->have_posts()) : ?>
                    <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>

                        <li class="information-list__item">
                            <div class="information-list__header">
                                <time class="information-list__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                            </div> <!-- information-list__header -->

                            <h3 class="information-list__title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </li>
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </ul>

            <div class="pager-wrapper _news-archive">
                <?php echo get_template_part( './template-parts/pager' ); ?>
            </div>

            <?php echo get_template_part( './template-parts/request' ); ?>

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