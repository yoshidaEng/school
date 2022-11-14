<?php get_header(); ?>

    <!-- main-contents -->
    <main class="main-contents">

        <!-- hero -->
        <div class="hero">
            <div class="hero__inner">
                <h1 class="hero__title">TOEFL対策はEngress</h1>
                <div class="hero__text">
                    <p>日本人へのTOEFL指導歴豊かな講師陣の<br>
                        コーチング型TOEFLスクール</p>
                </div><!-- /.hero__text -->
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="rounded-btn hero__btn">資料請求</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="hero__link">お問い合わせ</a>
            </div><!-- /.main-visual__inner -->
        </div><!-- /.hero -->

        <!-- summary -->
        <section class="summary">
            <div class="summary__inner">

                <!-- problem -->
                <div class="problem summary__item">
                    <h2 class="problem__title">TOEFL学習でこんな悩みありませんか？</h2>
                    <ul class="problem__list">
                        <li class="problem__item">勉強の習慣が<br>身についていない</li>
                        <li class="problem__item">勉強しているはず<br>なのに点数が伸びない</li>
                        <li class="problem__item">正しい勉強方法が<br>わからない</li>
                    </ul>
                </div><!-- /.problem -->

                <!-- about-engress -->
                <div class="about-engress summary__item">
                    <div class="about-engress__box">
                        <div class="about-engress__lead">
                            <p>Engressは<br><span class="about-engress__underline">TOEFLに特化した</span><br class="br-only-sp"><span class="about-engress__underline">スクール</span>です
                            </p>
                        </div><!-- /.about-engress__lead -->
                        <p class="about-engress__text">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>
                    </div><!-- /.about-engress__box -->
                </div><!-- /.about-engress -->

            </div><!-- /.summary__inner -->
        </section>

        <!-- container -->
        <div class="container">

            <!-- section -->
            <section class="section">
                <h2 class="section__title">TOEFL対策に特化した<br class="br-only-sp">Engress3つの強み</h2>

                <!-- media-list -->
                <ul class="media-list">
                    <li class="media-list__item">

                        <!-- media -->
                        <div class="media">
                            <div class="media__body">
                                <div class="media__header">
                                    <span class="tag media__tag">特長 １</span>
                                    <h3 class="media__title">TOEFLに最適化された<br>無駄のないカリキュラム</h3>
                                </div><!-- /.media__header -->
                                <div class="media__text">
                                    <p>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                                    </p>
                                </div><!-- /.media__text -->
                            </div><!-- /.media__body -->
                            <figure class="media__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_strong01@2x.jpg" alt="生徒がカリキュラムに沿って勉強する姿が写っている画像">
                            </figure>
                        </div><!-- /.media -->

                    </li>
                    <li class="media-list__item">

                        <!-- media -->
                        <div class="media _reverse">
                            <div class="media__body">
                                <div class="media__header">
                                    <span class="tag media__tag">特長 ２</span>
                                    <h3 class="media__title">日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
                                </div><!-- /.media__header -->
                                <div class="media__text">
                                    <p>Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
                                    </p>
                                </div><!-- /.media__text -->
                            </div><!-- /.media__body -->
                            <figure class="media__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_strong02@2x.jpg" alt="講師が生徒に問題を解説している画像">
                            </figure>
                        </div><!-- /.media -->

                    </li>
                    <li class="media-list__item">

                        <!-- media -->
                        <div class="media">
                            <div class="media__body">
                                <div class="media__header">
                                    <span class="tag media__tag">特長 ３</span>
                                    <h3 class="media__title">平均3ヶ月でTOEFL iBT20点アップ</h3>
                                </div><!-- /.media__header -->
                                <div class="media__text">
                                    <p>Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
                                    </p>
                                </div><!-- /.media__text -->
                            </div><!-- /.media__body -->
                            <figure class="media__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_strong03@2x.jpg" alt="生徒と講師が手を取り合い上を目指している画像">
                            </figure>
                        </div><!-- /.media -->

                    </li>
                </ul>
            </section>

            <!-- price-plan -->
            <section class="price-plan">
                <div class="price-plan__inner">
                    <p class="price-plan__text">Engressの料金プランはこちら</p>
                    <a class="rounded-btn _price-plan" href="<?php echo esc_url(home_url('/fee')); ?>">料金を見てみる</a>
                </div><!-- /.request__inner -->
            </section>

            <!-- section -->
            <section class="section section--bg _case mt-40">
                <h2 class="section__title section__title--white">TOEFL成功事例</h2>

                <!-- case-list -->
                <ul class="case-list grid grid-col3">
                    <li class="case-list__item">
                        <?php $case_info01 = get_field('case_info01'); ?>

                        <!-- card -->
                        <div class="card">
                            <p class="card__lead"><?php echo $case_info01['result'] ?></p>
                            <div class="card__thumb">
                                <?php
                                $pic = $case_info01['pic'];
                                $pic_url = $pic['sizes']['medium'];
                                ?>
                                <img src="<?php echo $pic_url; ?>" alt="">
                            </div><!-- /.card__thumb -->
                            <div class="card__body">
                                <div class="card__profile">
                                    <div class="card__work">
                                        <?php echo $case_info01['work']; ?>
                                    </div><!-- /.card__work -->
                                    <div class="card__name">
                                        <?php echo $case_info01['name']; ?>
                                    </div><!-- /.card__name -->
                                </div><!-- /.card__profile -->
                                <div class="card__performance">
                                    <?php echo $case_info01['score']; ?>
                                </div><!-- /.card__performance -->
                            </div><!-- /.card__body -->
                        </div><!-- /.card -->

                    </li>

                    <li class="case-list__item">

                        <?php $case_info02 = get_field('case_info02'); ?>

                        <!-- card -->
                        <div class="card">
                            <p class="card__lead"><?php echo $case_info02['result'] ?></p>
                            <div class="card__thumb">
                                <?php
                                $pic = $case_info02['pic'];
                                $pic_url = $pic['sizes']['medium'];
                                ?>
                                <img src="<?php echo $pic_url; ?>" alt="">
                            </div><!-- /.card__thumb -->
                            <div class="card__body">
                                <div class="card__profile">
                                    <div class="card__work">
                                        <?php echo $case_info02['work']; ?>
                                    </div><!-- /.card__work -->
                                    <div class="card__name">
                                        <?php echo $case_info02['name']; ?>
                                    </div><!-- /.card__name -->
                                </div><!-- /.card__profile -->
                                <div class="card__performance">
                                    <?php echo $case_info02['score']; ?>
                                </div><!-- /.card__performance -->
                            </div><!-- /.card__body -->
                        </div><!-- /.card -->

                    </li>
                    <li class="case-list__item">
                        <?php $case_info03 = get_field('case_info03'); ?>

                        <!-- card -->
                        <div class="card">
                            <p class="card__lead"><?php echo $case_info03['result'] ?></p>
                            <div class="card__thumb">
                                <?php
                                $pic = $case_info03['pic'];
                                $pic_url = $pic['sizes']['medium'];
                                ?>
                                <img src="<?php echo $pic_url; ?>" alt="">
                            </div><!-- /.card__thumb -->
                            <div class="card__body">
                                <div class="card__profile">
                                    <div class="card__work">
                                        <?php echo $case_info03['work']; ?>
                                    </div><!-- /.card__work -->
                                    <div class="card__name">
                                        <?php echo $case_info03['name']; ?>
                                    </div><!-- /.card__name -->
                                </div><!-- /.card__profile -->
                                <div class="card__performance">
                                    <?php echo $case_info03['score']; ?>
                                </div><!-- /.card__performance -->
                            </div><!-- /.card__body -->
                        </div><!-- /.card -->

                    </li>
                </ul><!-- /.cace-card-list -->

            </section>

            <!-- section -->
            <section class="section">
                <h2 class="section__title">ご利用の流れ</h2>

                <!-- usage-flow-list -->
                <ul class="usage-flow-list">
                    <li class="usage-flow-list__item">

                        <!-- usage-flow -->
                        <div class="usage-flow">
                            <div class="usage-flow__header">
                                <div class="usage-flow__num">01</div><!-- /.usage-flow__num -->
                                <div class="usage-flow__title">お問い合わせ</div><!-- /.usage-flow__title -->
                            </div><!-- /.usage-flow__header -->
                            <div class="usage-flow__body">
                                <p class="usage-flow__text">まずはフォームまたはお電話からお申し込みください。</p>
                            </div><!-- /.usage-flow__body -->
                        </div><!-- /.usage-flow -->

                    </li>
                    <li class="usage-flow-list__item">

                        <!-- usage-flow -->
                        <div class="usage-flow">
                            <div class="usage-flow__header">
                                <div class="usage-flow__num">02</div><!-- /.usage-flow__num -->
                                <div class="usage-flow__title">ヒアリング</div><!-- /.usage-flow__title -->
                            </div><!-- /.usage-flow__header -->
                            <div class="usage-flow__body">
                                <p class="usage-flow__text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
                            </div><!-- /.usage-flow__body -->
                        </div><!-- /.usage-flow -->

                    </li>
                    <li class="usage-flow-list__item">

                        <!-- usage-flow -->
                        <div class="usage-flow">
                            <div class="usage-flow__header">
                                <div class="usage-flow__num">03</div><!-- /.usage-flow__num -->
                                <div class="usage-flow__title">学習プランのご提供</div><!-- /.usage-flow__title -->
                            </div><!-- /.usage-flow__header -->
                            <div class="usage-flow__body">
                                <p class="usage-flow__text">目標達成のために最適な学習プランをご提案致します。</p>
                            </div><!-- /.usage-flow__body -->
                        </div><!-- /.usage-flow -->

                    </li>
                    <li class="usage-flow-list__item">

                        <!-- usage-flow -->
                        <div class="usage-flow">
                            <div class="usage-flow__header">
                                <div class="usage-flow__num">04</div><!-- /.usage-flow__num -->
                                <div class="usage-flow__title">ご入会</div><!-- /.usage-flow__title -->
                            </div><!-- /.usage-flow__header -->
                            <div class="usage-flow__body">
                                <p class="usage-flow__text">お申込み完了後、レッスンがスタートします。</p>
                            </div><!-- /.usage-flow__body -->
                        </div><!-- /.usage-flow -->

                    </li>
                </ul>
            </section>

            <section>
                <h2 class="section__title">よくある質問</h2>

                <!-- accordion-wrapper -->
                <div class="accordion-wrapper">

                    <!-- accordion faq -->
                    <dl class="accordion faq">
                        <dt>
                            <button id="accordion1-toggle" class="accordion__toggle faq__question" aria-controls="accordion1-panel" aria-expanded="false">
                                <p class="faq__q-text">Engressはサラリーマンでも学習を続けられるでしょうか？</p>
                                <span class="faq__action"><span class="visually-hidden">回答パネルを開く</span></span>
                            </button>
                        </dt>
                        <dd id="accordion1-panel" class="accordion__panel" aria-hidden="true" aria-labelledby="accordion1-toggle">
                            <div class="faq__answer">
                                <div class="faq__a-text">
                                    <p>Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                                </div><!-- /.faq__a-text -->
                            </div><!-- /.faq__answer -->
                        </dd>
                    </dl>

                    <!-- accordion faq -->
                    <dl class="accordion faq">
                        <dt>
                            <button id="accordion2-toggle" class="accordion__toggle faq__question" aria-controls="accordion2-panel" aria-expanded="false">
                                <p class="faq__q-text">教材はオリジナルのものを使用しているのでしょうか？</p>
                                <span class="faq__action"><span class="visually-hidden">回答パネルを開く</span></span>
                            </button>
                        </dt>
                        <dd id="accordion2-panel" class="accordion__panel" aria-hidden="true" aria-labelledby="accordion2-toggle">
                            <div class="faq__answer">
                                <div class="faq__a-text">
                                    <p>答えのテキストが入ります答えのテキストが入ります答えのテキストが入ります答えのテキストが入ります</p>
                                </div><!-- /.faq__a-text -->
                            </div><!-- /.faq__answer -->
                        </dd>
                    </dl>

                    <!-- accordion faq -->
                    <dl class="accordion faq">
                        <dt>
                            <button id="accordion3-toggle" class="accordion__toggle faq__question" aria-controls="accordion3-panel" aria-expanded="false">
                                <p class="faq__q-text">講師に日本人はいますか？</p>
                                <span class="faq__action"><span class="visually-hidden">回答パネルを開く</span></span>
                            </button>
                        </dt>
                        <dd id="accordion3-panel" class="accordion__panel" aria-hidden="true" aria-labelledby="accordion3-toggle">
                            <div class="faq__answer">
                                <div class="faq__a-text">
                                    <p>答えのテキストが入ります答えのテキストが入ります答えのテキストが入ります</p>
                                </div><!-- /.faq__a-text -->
                            </div><!-- /.faq__answer -->
                        </dd>
                    </dl>

                    <!-- accordion faq -->
                    <dl class="accordion faq">
                        <dt>
                            <button id="accordion4-toggle" class="accordion__toggle faq__question" aria-controls="accordion4-panel" aria-expanded="false">
                                <p class="faq__q-text">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p>
                                <span class="faq__action"><span class="visually-hidden">回答パネルを開く</span></span>
                            </button>
                        </dt>
                        <dd id="accordion4-panel" class="accordion__panel" aria-hidden="true" aria-labelledby="accordion4-toggle">
                            <div class="faq__answer">
                                <div class="faq__a-text">
                                    <p>答えのテキストが入ります答えのテキストが入ります答えのテキストが入ります</p>
                                </div><!-- /.faq__a-text -->
                            </div><!-- /.faq__answer -->
                        </dd>
                    </dl>

                </div><!-- /.accordion-wrapper -->

            </section>


            <div class="section-2col-wrapper">

                <!-- grid -->
                <div class="grid grid-col2">

                    <!-- top-blog -->
                    <section class="top-blog">

                        <!-- heading -->
                        <h2 class="heading-lv2 align-left">ブログ</h2>

                        <!-- top-blog-list -->
                        <ul class="top-blog-list">

                            <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                );
                                $display_blog_posts = new WP_Query( $args );
                            ?>

                            <?php if ( $display_blog_posts->have_posts() ) : ?>
                                <?php while ( $display_blog_posts->have_posts() ) : $display_blog_posts-> the_post(); ?>


                                    <li class="top-blog-list__item">
                                        <article id="post-<?php the_ID(); ?>">
                                            <a class="top-blog-list__link" href="<?php the_permalink(); ?>">
                                                <div class="top-blog-list__inner">
                                                    <div class="top-blog-list__body">
                                                        <p class="top-blog-list__title">
                                                        <?php
                                                            if (mb_strlen($post->post_title, 'UTF-8') > 50) {
                                                                $title = mb_substr($post->post_title, 0, 40, 'UTF-8');
                                                                echo $title . '……';
                                                            } else {
                                                                echo $post -> post_title;
                                                            }
                                                        ?>
                                                        </p>
                                                        <time class="top-blog-list__date" datetime="<?php the_time( 'Y-m-d' ); ?>">
                                                            <?php
                                                                $time = get_the_time( 'Y-m-d' );
                                                                echo $time;
                                                            ?>
                                                        </time>
                                                    </div><!-- /.blog-list__body -->
                                                    <div class="top-blog-list__thumb">
                                                        <span class="tag top-blog-list__tag"><?php echo get_category_name(); ?></span>
                                                        <?php if (has_post_thumbnail()) : ?>
                                                            <?php the_post_thumbnail(); ?>
                                                        <?php else : ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_noimage.jpg" alt="">
                                                        <?php endif ?>
                                                    </div><!-- /.top-blog-list__thumb -->
                                                </div><!-- /.top-blog-list__inner -->
                                            </a>
                                        </article>
                                    </li><!-- /.top-blog-list__item -->

                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>

                        </ul>
                    </section>

                    <!-- top-information -->
                    <section class="top-information">

                        <!-- heading -->
                        <h2 class="heading-lv2 align-left">お知らせ</h2>

                        <?php
                            $args = array(
                                'post_type' => 'news',
                                'posts_per_page' => 3,
                            );
                            $news_query = new WP_Query( $args );
                        ?>

                        <!-- vertical-information-list -->
                        <ul class="vertical-information-list">

                            <?php if ( $news_query -> have_posts() ) : ?>
                                <?php while ( $news_query -> have_posts() ) : $news_query -> the_post(); ?>
                                    <li class="vertical-information-list__item">
                                        <time class="vertical-information-list__date"><?php the_time( 'Y-m-d' ); ?></time>
                                        <a class="vertical-information-list__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>

                        </ul>
                    </section>
                </div><!-- /.grid -->
            </div><!-- /.section-2col-wrapper -->


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