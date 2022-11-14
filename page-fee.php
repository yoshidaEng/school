<?php get_header(); ?>

    <!-- main-contents -->
    <main class="main-contents">

        <!-- page-header -->
        <div class="page-header _fee">
            <h1 class="page-header__title">コース・料金</h1>
        </div><!-- /.page-header -->

        <!--パンくずリスト-->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- container -->
        <div class="container">

            <!-- fee-structure -->
            <section class="fee-structure">

                <!-- heading -->
                <h2 class="heading-lv2">料金体系</h2>

                <div class="fee-structure__lead">
                    <div class="fee-structure__box">入会金 39,800円</div><!-- /.fee-structure__box -->

                    <!-- plus -->
                    <div class="plus"></div><!-- /.plus -->

                    <div class="fee-structure__box">月額費用</div><!-- /.fee-structure__box -->
                </div><!-- /.fee-structure__lead -->

                <p class="fee-structure__text">
                    Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
                </p><!-- /.fee-structure__text -->

            </section>

            <!-- fee-schedule -->
            <section class="fee-schedule mt-90 mb-60">

                <!-- heading -->
                <h2 class="heading-lv2">料金表</h2>

                <!-- plan-list -->
                <ul class="plan-list js-scrollable">

                    <?php $basic_plan = get_field('basic_plan'); ?>

                    <li class="plan-list__item">
                        <div class="plan-list__inner">
                            <h3 class="plan-list__title"> 基礎プラン</h3>
                            <div class="plan-list__body">
                                <p class="plan-list__price"><?php echo $basic_plan['fee'] ?></p>
                                <div class="plan-list_p-disc">*月額（税抜価格）</div>
                                <ul class="plan-contents">
                                    <li class="plan-contents__item">カリキュラム作成</li>
                                    <li class="plan-contents__item">TOEFL学習サポート</li>
                                    <li class="plan-contents__item">週一回のビデオMTG</li>
                                </ul>
                            </div><!-- /.plan-list__body -->
                        </div><!-- /.plan-list__inner -->
                    </li>

                    <?php $practice_plan = get_field('practice_plan'); ?>

                    <li class="plan-list__item">
                        <div class="plan-list__inner">
                            <h3 class="plan-list__title">演習プラン</h3>
                            <div class="plan-list__body">
                                <p class="plan-list__price"><?php echo $practice_plan['fee'] ?></p>
                                <div class="plan-list_p-disc">*月額（税抜価格）</div>
                                <ul class="plan-contents">
                                    <li class="plan-contents__item">カリキュラム作成</li>
                                    <li class="plan-contents__item">TOEFL学習サポート</li>
                                    <li class="plan-contents__item">週一回のビデオMTG</li>
                                    <li class="plan-contents__item">月二回の模試（解説付き）</li>
                                </ul>
                            </div><!-- /.plan-list__body -->
                        </div><!-- /.plan-list__inner -->
                    </li>
                    <li class="plan-list__item">

                        <?php $recommend_plan = get_field('recommend_plan'); ?>

                        <div class="plan-list__inner">
                            <h3 class="plan-list__title _recommend"><span>おすすめ</span>志望校対策プラン</h3>
                            <div class="plan-list__body">
                                <p class="plan-list__price _recommend"><?php echo $recommend_plan['fee'] ?></p>
                                <div class="plan-list_p-disc">*月額（税抜価格）</div>
                                <ul class="plan-contents">
                                    <li class="plan-contents__item">カリキュラム作成</li>
                                    <li class="plan-contents__item">TOEFL学習サポート</li>
                                    <li class="plan-contents__item">週一回のビデオMTG</li>
                                    <li class="plan-contents__item">月二回の模試（解説付き）</li>
                                    <li class="plan-contents__item">週一の英語面接対策</li>
                                </ul>
                            </div><!-- /.plan-list__body -->
                        </div><!-- /.plan-list__inner -->
                    </li>
                    <li class="plan-list__item">

                        <?php $flex_plan = get_field('flex_plan'); ?>

                        <div class="plan-list__inner">
                            <h3 class="plan-list__title">フレックスプラン</h3>
                            <div class="plan-list__body">
                                <p class="plan-list__price"><?php echo $flex_plan['fee'] ?></p>
                                <div class="plan-list_p-disc">*月額（税抜価格）</div>
                                <ul class="plan-contents">
                                    <li class="plan-contents__item">＊別途ご相談ください</li>
                                </ul>
                            </div><!-- /.plan-list__body -->
                        </div><!-- /.plan-list__inner -->
                    </li>
                </ul>

            </section>

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