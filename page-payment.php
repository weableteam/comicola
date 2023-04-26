<?php

/**
 * Template Name: Page Payment (Full width)
 * Description: Page template full width
 *
 */

get_header();
?>
<div class="wyswyg">
    <!-- step-1 -->
    <section class="w-step">
        <div class="w-step__number">
            <span class="is-active">1</span>
            <span><img src="<?= get_stylesheet_directory_uri() . '/assets/images/Line 5.png' ?>" alt=""></span>
            <span>2</span>
            <span><img src="<?= get_stylesheet_directory_uri() . '/assets/images/Line 5.png' ?>" alt=""></span>
            <span>3</span>
        </div>
        <h1>ỦNG HỘ “DỰ ÁN HOẠT HÌNH CON THỎ”</h1>
        <div class="w-step__telephone">
            <p>Vui lòng nhập số điện thoại của bạn</p>
            <input type="text" placeholder="Số điện thoại">
        </div>
        <a href="#" class="w-step__btn-verify">Nhận mã xác minh</a>
    </section>
    <!-- end step-1 -->

    <!-- step-2 -->
    <section class="w-step">
        <div class="w-step__number">
            <span class="is-active">1</span>
            <span><img src="<?= get_stylesheet_directory_uri() . '/assets/images/Line 5.png' ?>" alt=""></span>
            <span>2</span>
            <span><img src="<?= get_stylesheet_directory_uri() . '/assets/images/Line 5.png' ?>" alt=""></span>
            <span>3</span>
        </div>
        <h1>ỦNG HỘ “DỰ ÁN HOẠT HÌNH CON THỎ”</h1>
        <div class="w-step__telephone w-step__sms">
            <p>Nhập mã OTP nhận được tự tin nhắn SMS</p>
            <input type="text" placeholder="Nhập mã OTP">
        </div>
        <a href="#" class="w-step__btn-verify">Nhận mã xác minh</a>
    </section>
    <!-- end step-2 -->
    <!-- step-end -->
    <section class="w-step w-step-pb  mt-2">
        <div class="container">
            <div class="w-step-end">
                <h1 class="w-step__thas">Cảm ơn bạn đã tham gia ủng hộ dự án của chúng tôi!</h1>
                <p class="w-step__title">Dưới đây là thông tin ủng hộ của bạn, nếu bạn cần hỗ trợ vui lòng liên hệ
                    hotline
                    0236.345.6789</p>
                <div class="w-step__info-wrapper">
                    <div class="w-step__info">
                        <span><span>Họ tên bạn:</span> <span class="w-step__name">Nguyễn Thị tường vy</span></span>
                        <span><span>Số điện thoại</span> <span>09123456789</span></span>
                    </div>
                    <div class="w-step__info">
                        <span><span>Số tiền ủng hộ</span> <span>1.500.00đ</span></span>
                        <span><span>Thời gian:16:20, ngày 25/04/2023</span></span>
                    </div>
                </div>
                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/Group.png' ?>" alt="">
            </div>
        </div>
    </section>
    <!-- end step-end -->
</div>

<?php
get_footer();