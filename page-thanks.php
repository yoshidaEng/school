<?php get_header(); ?>

    <main>

        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- container -->
        <div class="container">

            <!-- message -->
            <div class="message">
                <div class="message__text">
                    <p>お問い合わせいただきありがとうございます。<br>
                        内容を確認した後、担当者よりご連絡いたします。</p>
                </div>
            </div>

            <!-- btn -->
            <div class="btn-center mt-80 mb-80">
                <a class="btn--back" href="<?php echo esc_url(home_url('')); ?>">ホームへ戻る</a>
            </div><!-- /.btn-center -->

        </div><!-- ./container -->

    </main>

    <?php get_footer(); ?>