			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page)
				if ( is_single() || is_archive() ) :
			?>
			</div><!-- /.col -->

			<?php
						// get_sidebar();
					?>

			</div><!-- /.row -->
			<?php
				endif;
			?>
			</main><!-- /#main -->
			<footer id="footer">
				<section class="footer">
					<div class="container">
						<div class="list-footer">
							<div class="row">
								<div class="col-lg-4">
									<div class="content-foo">
										<h6>đơn vị chủ quản</h6>
										<div class="logo-foo">
											<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tech-icons/image 3 (4).webp' ?>" alt="">
										</div>
										<ul> 
											<li>
												<a href="">Công ty Cổ phần Comicola </a>
											</li>
											<li>
												<a href="mailto:contact@comicola.com">Email: contact@comicola.com</a>
											</li>
											<li>
												<a href="tel:0388.888.262">Phone: 0388.888.262</a>
											</li>
										</ul>
									</div>
								</div>

								<div class="col-lg-4 col-sm-6">
									<div class="content-foo">
										<h6>thông tin chủ quản</h6>
										<ul> 
											<li>
												<a href="">Báo chí nói về chúng tôi</a>
											</li>
											<li>
												<a href="">Hướng dẫn thanh toán</a>
											</li>
											<li>
												<a href="">Các vấn đề pháp lý </a>
											</li>
										</ul>
									</div>
								</div>

								<div class="col-lg-4 col-sm-6">
									<div class="content-foo">
										<h6>thông tin hữu ích</h6>
										<ul> 
											<li>
												<a href="">Báo chí nói về chúng tôi</a>
											</li>
											<li>
												<a href="">Hướng dẫn thanh toán</a>
											</li>
											<li>
												<a href="">Các vấn đề pháp lý </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			    <section class="align-full copyright">
			        <div class="container">
			            <p>© 2023 Comicola JSC. All Rights Reserved.</p>
			        </div>
			    </section>
			</footer>
			<?php
		wp_footer();
	?>
			</body>

			</html>