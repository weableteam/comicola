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
    <!-- step-3-->
    <div class="container w-payment-box ">
        <div class="row">
            <div class="col-12 my-5 ">
                <div class="w-step__number  justify-content-center ">
                    <span class="is-active">1</span>
                    <span><img src="<?= get_stylesheet_directory_uri() . '/assets/images/Line 5.png' ?>" alt=""></span>
                    <span>2</span>
                    <span><img src="<?= get_stylesheet_directory_uri() . '/assets/images/Line 5.png' ?>" alt=""></span>
                    <span>3</span>
                </div>
            </div>
        </div>
        <h3 class="w-pay_h3 text-uppercase text-center d-block">ỦNG HỘ “DỰ ÁN HOẠT HÌNH CON THỎ”</h3>
        <div class="row">
            <div class="col-8 mx-auto mb-4 w-payment-content">
                <p class="mb-3">Vui lòng điền thông tin của bạn và tiến hành thanh toán qua hệ thống ngân hàng, cảm ơn
                    bạn.</p>
                <form class="">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 mb-3">
                            <input type="text" class="form-control w-payment-input-item" placeholder="Họ và tên bạn">
                        </div>
                        <div class="col-xl-6 col-md-6 mb-3">
                            <input type="text" class="form-control w-payment-input-item" placeholder="Địa chỉ email">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-8 mx-auto mb-4 w-payment-content">
                <p class="mb-3">Chọn số tiền muốn ủng hộ.</p>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12">
                        <button class="w-pay-money d-block w-100 mb-2">100K VNĐ</button>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <button class="w-pay-money d-block w-100 mb-2">500K VNĐ</button>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <button class="w-pay-money d-block w-100 mb-2">1.000K VNĐ</button>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <button class="w-pay-money d-block w-100 mb-2">SỐ TIỀN KHÁC</button>
                    </div>
                </div>
            </div>
            <div class="col-8 mx-auto mb-5 w-payment-content">
                <form class="">
                    <div class="row">

                        <div class="col">
                            <input type="text" class="form-control w-payment-input-item" placeholder="Nhập số tiền ">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-8 mx-auto mb-5 w-payment-content">
                <p class="mb-3">Chọn phương thức thanh toán</p>
                <img class="payment-img" src="<?= get_stylesheet_directory_uri() . '/assets/images/image 5.png' ?>"
                    alt="">
            </div>
        </div>
    </div>
    <!-- end step-3 -->
    <!-- step-4 -->
    <section class="w-step">
        <div class="w-step__number">
            <span class="is-active">1</span>
            <span><img src="<?= get_stylesheet_directory_uri() . '/assets/images/Line 5.png' ?>" alt=""></span>
            <span>2</span>
            <span><img src="<?= get_stylesheet_directory_uri() . '/assets/images/Line 5.png' ?>" alt=""></span>
            <span>3</span>
        </div>
        <h1>ỦNG HỘ “DỰ ÁN HOẠT HÌNH CON THỎ”</h1>
        <!--  -->
        <p class="w-step__qr-title">Xin chào <span style="font-weight: 700;">084*****9999</span>, mời bạn quyét
            mã QR
            bên
            dưới để ủng hộ cho dự án
            này, ID của
            bạn là 316.</p>
        <img class="w-step__img" src="<?= get_stylesheet_directory_uri() . '/assets/images/Rectangle 91.png' ?>" alt="">
        <!--  -->
        <a href="#" class="w-step__btn-verify">TÔI ĐÃ THANH TOÁN</a>
    </section>
    <!-- end step-4 -->
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