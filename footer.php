<!-- footer -->
<footer class="footer">
    <div class="footer__inner">
        <div class="footer__box">
            <nav class="footer__nav">

                <!-- ftmenu -->
                <ul class="ftmenu">
                    <li class="ftmenu__item">
                        <a href="<?php echo esc_url(home_url()); ?>" class="ftmenu__link">ホーム</a>
                    </li>
                    <li class="ftmenu__item">
                        <a href="<?php echo esc_url(home_url('/news')); ?>" class="ftmenu__link">お知らせ</a>
                    </li>
                    <li class="ftmenu__item">
                        <a href="<?php echo esc_url(home_url('/recent')); ?>" class="ftmenu__link">ブログ</a>
                    </li>
                    <li class="ftmenu__item">
                        <a href="<?php echo esc_url(home_url('/fee')); ?>" class="ftmenu__link"> コース・料金</a>
                    </li>
                </ul>

            </nav>
            <div class="footer__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Engress" width="197" height="58">
            </div> <!-- /.footer__logo -->
        </div><!-- /.footer__box -->

        <!-- calling -->
        <div class="calling footer__calling">
            <div class="calling__num">
                0123-456-7890
            </div><!-- /.tel-inquiry__num -->
            <div class="calling__hour">
                平日08:00~20:00
            </div><!-- /.calling__hour -->
        </div><!-- /.calling -->

    </div><!-- /.footer__inner -->

    <!-- copyright -->
    <div class="copyright">
        <div class="copyright__inner">
            <p><small lang="en">&copy; 2020 Engress. </small></p>
        </div><!-- /.copyright__inner -->
    </div><!-- /.copyright -->

</footer>

<?php wp_footer(); ?>

<script>
    new ScrollHint('.js-scrollable');
</script>

</body>

</html>