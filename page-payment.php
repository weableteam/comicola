<?php
/**
 * Template Name: Page Payment (Full width)
 * Description: Page template full width
 *
 */

get_header();
?>
	<div class="wyswyg">
		

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
				<p class="mb-3">Vui lòng điền thông tin của bạn và tiến hành thanh toán qua hệ thống ngân hàng, cảm ơn bạn.</p>
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
			</div>
		</div>
	</div>
	</div>

<?php
get_footer();
