<?php get_header(); ?>

    <?php get_template_part('template-parts/breadcrumb'); ?>

    <!-- grid container -->
    <div class="grid grid-pc-col2 container">

        <!-- content -->
        <main class="content">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>">

                        <!-- post-header -->
                        <div class="post-header">
                            <div class="post-header__meta">
                                <span class="tag"><?php echo get_category_name(); ?></span>
                            </div>
                            <h1 class="post-header__title"><?php the_title(); ?></h1>
                            <div class="post-header__box">
                                <div class="sns">
                                    <?php echo do_shortcode('[socialBtns]'); ?>
                                </div><!-- /.sns -->
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                            </div><!-- /.post-header__box -->
                        </div><!-- /.post-header -->

                        <?php if ( has_post_thumbnail() ) : ?>

                            <!-- post-eyecatch -->
                            <div class="post-eyecatch">
                                <?php the_post_thumbnail(); ?>
                            </div><!-- /.post-intro__eyecatch -->

                        <?php endif ?>

                        <!-- post-body -->
                        <div class="post-body">
                            <?php the_content(); ?>
                        </div><!-- /.post-body -->

                    </article>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php
                $args = array(
                    'posts_per_page' => 3,
                    'order' => 'desc',
                    'orderby' => 'date',
                    'tag' => 'pickup'
                );
                $get_recommend_article = new WP_Query( $args );
            ?>

            <?php
                if ( $get_recommend_article -> have_posts() ) :
            ?>

                <!-- recommend-article -->
                <section class="recommend-article section">
                    <h2 class="section__title align-left">おすすめの記事</h2>
                    <ul class="recommend-article__list">

                        <?php while ( $get_recommend_article -> have_posts()) : $get_recommend_article -> the_post(); ?>

                            <li class="recommend-article__item">
                                <div class="recommend-article__body">
                                    <time class="recommend-article__date" datetime="<?php the_time( 'Y-m-d' ); ?>">
                                        <?php the_time( 'Y-m-d' ); ?>
                                    </time>
                                    <h3 class="recommend-article__title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                                if (mb_strlen($post -> post_title, 'UTF-8') > 50) {
                                                    $title = mb_substr($post->post_title, 0, 40, 'UTF-8');
                                                    echo $title . '……';
                                                } else {
                                                    echo $post -> post_title;
                                                }
                                            ?>
                                        </a>
                                    </h3>
                                </div><!-- /.recommend-article__body -->
                                <div class="recommend-article__thumb">

                                    <!-- tag -->
                                    <span class="tag recommend-article__tag">
                                        <?php echo get_category_name(); ?>
                                    </span>

                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_noimage.jpg" alt="">
                                    <?php endif; ?>

                                </div><!-- /.recommend-article__thumb -->
                            </li>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                    </ul>

                </section>

            <?php endif; ?>

        </main>

        <!-- aside -->
        <aside class="aside">
            <h2 class="aside__title">関連記事</h2>

            <!-- related-article -->
            <ul class="related-article">
                <?php
                    $categories = get_the_category();
                    $category_ID = array();
                    foreach( $categories as $category ):
                        array_push( $category_ID, $category -> cat_ID );
                    endforeach ;
                    $args = array(
                        'post__not_in' => array( $post -> ID ),
                        'posts_per_page' => 3,
                        'category__in' => $category_ID,
                        'orderby' => 'rand',
                    );
                    $related_posts = new WP_Query( $args );
                ?>
                <?php if ( $related_posts -> have_posts() ) : ?>
                    <?php while ( $related_posts -> have_posts() ) : $related_posts -> the_post(); ?>
                        <li class="related-article__item">
                            <div class="related-article__body">
                                <h3 class="related-article__title">
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
                                </h3>
                            </div><!-- /.related-article__body -->
                            <div class="related-article__thumb">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_noimage.jpg" alt="">
                                <?php endif; ?>
                            </div><!-- /.related-article__thumb -->
                        </li>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </ul><!-- /.related-article -->

            <h2 class="aside__title">カテゴリー</h2>

            <!-- cat-widget -->
            <ul class="cat-widget">
                <?php
                    $args = array(
                        'parent' => 0,
                        'orderby' => 'term_oder',
                        'oder' => 'ASC',
                    );
                    $categories = get_categories( $args );
                ?>
                <?php foreach ( $categories as $category ) : ?>
                    <li>
                        <a href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name ?></a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </aside>

    </div><!-- /.grid-col2 -->

    <?php get_template_part('template-parts/request'); ?>

    <!-- school -->
    <section class="school">
        <div class="school__inner">
            <p>お電話でのお問い合わせはこちら</p>
            <div class="school__num">0123-456-7890</div><!-- /.school__num -->
            <div class="school_hour">平日 08:00~20:00</div><!-- /.school_hour -->
        </div><!-- /.school__inner -->
    </section>


    <?php get_footer(); ?>