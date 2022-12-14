jQuery(function ($) {

    //ハンバーガーメニュー
    //--------------------------------------------

    //ハンバーガーボタンを $triggerに格納
    const $trigger = $('#hamburger');
    //ハンバーガーボタンのテキストを $btnTxtに格納
    const $btnTxt = $('.hamburger__txt');
    //SPメニュー $navに格納
    const $nav = $('#spmenu');
    //ヘッダーのブレイクポイントを point_headerに格納
    const point_header = window.matchMedia('screen and (min-width: 768px)');

    //ハンバーガーメニューボタンがクリックされた時
    $trigger.on('click', function () {
        const expanded = $(this).attr('aria-expanded');
        if (expanded === 'false') {
            openMenu();
        } else {
            closeMenu();
        }
    });

    function openMenu() { //メニューを開く操作
        $trigger.attr('aria-expanded', true).attr('aria-label', 'メニューを閉じる');
        $btnTxt.text('Close');
        $nav.attr('aria-hidden', false).fadeIn();
        bodyScrollLock.disableBodyScroll($nav);//スクロール不可
    }
    function closeMenu() { //メニューを閉じる操作
        $trigger.attr('aria-expanded', false).attr('aria-label', 'メニューを開く');
        $btnTxt.text('Menu');
        $nav.attr('aria-hidden', true).fadeOut();
        bodyScrollLock.enableBodyScroll($nav);//スクロール解除
    }

    // //ブレイクポイントをまたいだときの挙動
    function checkBreakPoint() {
        if (point_header.matches) {
            closeMenu(); //ハンバーガーメニューをリセット
        }
    }
    point_header.addListener(checkBreakPoint);

    // アコーディオン
    //--------------------------------------------
    function accordion() {
        $('[aria-controls^="accordion"]').stop().on('click', function (e) {
            const $self = $(e.currentTarget);
            const expanded = $self.attr('aria-expanded');
            const $target = $('#' + $self.attr('aria-controls'));

            if (expanded === 'false') {
                $self.attr('aria-expanded', true);
                $target.attr('aria-hidden', false).slideDown();
            } else {
                $self.attr('aria-expanded', false);
                $target.attr('aria-hidden', true).slideUp();
            }
        });
    }
    accordion();

    //style="width: "を削除
    function removeStyle() {
        $("[style^='width']").removeAttr('style');
    }
    removeStyle();


})