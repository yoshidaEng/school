<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Engress">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css">
    <script src="https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/body-scroll-lock/3.1.5/bodyScrollLock.min.js" integrity="sha512-HowizSDbQl7UPEAsPnvJHlQsnBmU2YMrv7KkTBulTLEGz9chfBoWYyZJL+MUO6p/yBuuMO/8jI7O29YRZ2uBlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <?php
        if ( is_page( 'contact' ) ) {
            remove_filter('the_content', 'wpautop');
        }
    ?>

    <!-- header -->
    <header class="header">
        <div class="header__inner">
            <div class="logo header__logo">
                <a href="<?php echo esc_url(home_url('')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_header.svg" alt="Engress" width="136" height="27"></a>
            </div><!-- /.header__logo -->

            <!-- gnav For PC -->
            <nav id="gnav" class="gnav" aria-label="メインメニュー">
                <ul class="gnav__list">
                    <li class="gnav__item">
                        <a href="<?php echo esc_url(home_url()); ?>" class="gnav__link">ホーム</a>
                    </li>
                    <li class="gnav__item">
                        <a href="<?php echo esc_url(home_url('/news')); ?>" class="gnav__link">お知らせ</a>
                    </li>
                    <li class="gnav__item">
                        <a href="<?php echo esc_url(home_url('/recent')); ?>" class="gnav__link">ブログ</a>
                    </li>
                    <li class="gnav__item">
                        <a href="<?php echo esc_url(home_url('/fee')); ?>" class="gnav__link">コース・料金</a>
                    </li>
                </ul>
            </nav>

            <!-- calling -->
            <div class="calling calling--black header__calling">
                <div class="calling__hour">
                    平日08:00~20:00
                </div>
                <div class="calling__num">
                    0123-456-7890
                </div><!-- /.tel-inquiry__num -->
            </div><!-- /.calling -->

            <div class="header__btn-box">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="request-btn">資料請求</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="contact-btn">お問い合わせ</a>
            </div><!-- /.header__btn-box -->

        </div><!-- /.header__inner -->

    </header>

    <!-- for SP -->
    <!-- hamburger -->
    <button id="hamburger" class="hamburger" aria-label="メニューを開く" aria-controls="spmenu" aria-expanded="false">
        <span class="hamburger__line" aria-hidden="true"></span>
        <span class="hamburger__txt">Menu</span>
    </button>

    <!-- spmenu -->
    <nav id="spmenu" class="spmenu" aria-label="スマホ用メニュー">
        <div class="spmenu__inner">
            <ul class="spmenu__list">
                <li class="spmenu__item"><a href="<?php echo esc_url(home_url()); ?>" class="spmenu__link">ホーム</a></li>
                <li class="spmenu__item"><a href="<?php echo esc_url(home_url('/news')); ?>" class="spmenu__link">お知らせ</a></li>
                <li class="spmenu__item"><a href="<?php echo esc_url(home_url('/recent')); ?>" class="spmenu__link">ブログ</a></li>
                <li class="spmenu__item"><a href="<?php echo esc_url(home_url('fee')); ?>" class="spmenu__link">コース・料金</a></li>
            </ul>
        </div>
    </nav>