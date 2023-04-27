<?php
/**
 * Template Name: Page Contact (Full width)
 * Description: Page template full width
 *
 */

get_header();
?>
	<div class="page-contact">
		<div class="container">
			<h3>liên hệ</h3>

			<div class="main-content">
				<div class="row flex-lg-row flex-column-reverse">
					<div class="col-lg-4">
						<div class="input-contact">
							<ul>
								<li>
									<span><img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Vector (2).webp' ?>" alt=""></span>
									<a href=""><p>20 ngõ 7 Thái Hà,Đống Đa, Hà Nội</p></a>
								</li>
								<li>
									<span><img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Vector (3).webp' ?>" alt=""></span>
									<a href="tel:0388.888.262">
										<p>0388.888.262</p>
									</a>
								</li>
								<li>
									<span><img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Vector (4).webp' ?>" alt=""></span>
									<a href="mailto:contact@comicola.com"><p>contact@comicola.com</p></a>
								</li>
							</ul>

							<div class="contact-us">
								<h5>Liên hệ với chúng tôi</h5>
								<div class="list-input">
									<div class="row" style="gap:1rem 0">
										<div class="col-lg-6">
											 <input type="text" placeholder="Họ">
										</div>
										<div class="col-lg-6">
											 <input type="text" placeholder="Tên">
										</div>
										<div class="col-lg-12">
											 <input type="text" placeholder="Email">
										</div>
										<div class="col-lg-12">
											<textarea placeholder="Bình luận của bạn ..." class="w-100" cols="30" rows="5"></textarea>
										</div>
									</div>

									<div class="send">
										<a href="">Gởi liên hệ</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-8 p-0">
						<div class="map-contact">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.141026250588!2d108.1929584754518!3d16.006172541122243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421a33dab7a431%3A0x16c2dcbdab89389b!2zMzMgUGhvbmcgQuG6r2MgNiwgSMOyYSBUaOG7jSDEkMO0bmcsIEPhuqltIEzhu4csIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1682566325083!5m2!1svi!2s" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
