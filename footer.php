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
						<div class="row justify-content-between">
							<?php if($info = get_field('info','option')) : ?>
							<div class="col-lg-3 mb-lg-0 mb-4">
								<div class="box">
									<div class="top d-flex">
										<?= ($info['logo']) ? '<h1>'.$info['logo'].'</h1>' : ''  ?>
										<div class="detail">
											<?= ($info['name']) ? '<span>'.$info['name'].'</span>' : ''  ?>
											<?= ($info['sub']) ? '<span>'.$info['sub'].'</span>' : ''  ?>
										</div>

									</div>
									<?= ($info['detail']) ? '<p>'.$info['detail'].'</p>' : ''  ?>
								</div>
							</div>
							<?php endif; ?>
							<?php if($links = get_field('links','option')) : ?>
								<div class="col-lg-3 mb-lg-0 mb-4">
									<div class="box">
										<?= ($links['title']) ? '<h2>'.$links['title'].'</h2>' : ''  ?>
										<?php if($links['links']) : ?>
											<ul>
												<?php foreach($links['links'] as $item) : ?>
													<li>
														<i class="bi bi-circle-fill"></i> 
														<?php if($item['link']) : ?>
															<a href="<?= esc_url($item['link']['url']) ?>"><?= esc_attr($item['link']['title']) ?></a> 
														<?php endif; ?>
													</li>
												<?php endforeach ?>
											</ul>
										<?php endif; ?>
									</div>
								</div>
							<?php endif; ?>
							<?php if($contact = get_field('contact','option')) : ?>
							<div class="col-lg-3 mb-lg-0 mb-4">
								<div class="box contact">
									<?= ($contact['title']) ? '<h2>'.$contact['title'].'</h2>' : ''  ?>
									<ul>
										<?php if($hotline = get_field('hotline','option')) : ?>
										<li><i class="bi bi-telephone-fill"></i><?= $hotline ?></li>
										<?php endif; ?>
										<?php if($cty_add = get_field('cty_add','option')) : ?>
										<li><i class="bi bi-geo-alt-fill"></i><?= $cty_add ?></li>
										<?php endif; ?>
									</ul>
								</div>
							</div>
							<?php endif; ?>
							<?php if($follows = get_field('follows','option')) : ?>
								<div class="col-lg-3 mb-lg-0 mb-4">
									<div class="box">
										<?= ($follows['title']) ? '<h2>'.$follows['title'].'</h2>' : ''  ?>
										<div class="listCont d-flex">
											<?php if($follows['twitter']) : ?>
                                            	<a href="<?= esc_url($follows['twitter']['url']) ?>"><i class="bi bi-twitter"></i></a>
											<?php endif; ?>
											<?php if($follows['google']) : ?>
                                            	<a href="<?= esc_url($follows['google']['url']) ?>"><i class="bi bi-google"></i></a>
											<?php endif; ?>
											<?php if($follows['youtube']) : ?>
                                            	<a href="<?= esc_url($follows['youtube']['url']) ?>"><i class="bi bi-youtube"></i></a>
											<?php endif; ?>
											<?php if($follows['facebook']) : ?>
                                            	<a href="<?= esc_url($follows['facebook']['url']) ?>"><i class="bi bi-facebook"></i></a>
											<?php endif; ?>
                                        </div>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</section>
			    <section class="align-full copyright">
			        <div class="container">
			            <div class="row align-items-center">
			                <div class="col-lg-6">
			                    <p class="mt-lg-0">
			                        <?php printf( esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'weable' ), date_i18n( 'Y' ), get_bloginfo( 'name', 'display' ) ); ?>
			                    </p>
			                </div>
							<div class="col-lg-6">
								<?php if($linksCopy = get_field('links_copyright','option')) : ?>
									<ul class="d-flex justify-content-end">
										<?php foreach($linksCopy as $item) : ?>
											<li><a href="<?= esc_url($item['link']['url']) ?>"><?= esc_attr($item['link']['title']) ?></a></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
			                </div>
			            </div>
			        </div>
			    </section>
			</footer>
			<?php
		wp_footer();
	?>
			</body>

			</html>