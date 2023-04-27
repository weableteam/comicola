<?php

/**
 * "Projects" Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'w-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'w-pj';

if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

$isFullWidth = false;
if( !empty($block['align']) ) {
    $isFullWidth = $block['align'] === 'full' ? true : false;
    $className .= ' align-' . $block['align'];
}

// Check preview image not empty
if( isset( $block['data']['preview'] )  ) : 
    echo '<img src="'. $block['data']['preview'] .'" style="width:100%; height:auto;">'; 
else :



?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
   <div class="projects" style="background: F5F5F5;"> 
        <div class="container">
            <div class="pj-top">
                <div class="name">
                    <h3>DỰ ÁN ĐANG DIỄN RA</h3>
                    <p>Các dự án tiêu biểu đang trong quá trình crowdfunding trên Comicola</p>
                </div>

                <div class="bg-img">
                    <div class="icon-heart">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <div class="title-des">
                        <h5>DỰ ÁN HOẠT HÌNH CON THỎ</h5>
                        <p>Coolmate góp 250 triệu đồng giúp Thỏ Bảy Màu lội ngược dòng ngoạn mục: Trở thành phim hoạt hình Việt Nam đầu tiên gọi vốn cộng đồng thành công</p>
                        <div class="progress-container progress-primary"><span class="progress-badge"></span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                            </div>
                        </div>
                        <p>Đã ủng hộ 1.550.000.000đ / 3.000.000.000đ</p>
                    </div>
                </div>
            </div>

            <div class="pj-content">
                <div class="row">
                    <div class="col-md-6">
                        <a href="" class="item">
                            <div class="image-box">
                                <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tech-icons/Rectangle 9.webp' ?>" alt="">
                                <span><i class="bi bi-heart"></i></span>
                            </div>

                            <div class="box-right">
                                <div class="text-box">
                                    <h5>DỰ ÁN HOẠT HÌNH CON THỎ</h5>
                                    <p>Coolmate góp 250 triệu đồng giúp Thỏ Bảy Màu lội ngược dòng ngoạn mục: Trở thành phim hoạt hình Việt Nam đầu tiên gọi vốn cộng đồng thành công</p>
                                </div>
                                <div class="box-bottom">
                                    <p>Đã kết thúc</p>
                                    <div class="progress-container progress-primary"><span class="progress-badge"></span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="" class="item">
                            <div class="image-box">
                                <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tech-icons/Rectangle 11.webp' ?>" alt="">
                                <span><i class="bi bi-heart"></i></span>
                            </div>

                            <div class="box-right">
                                <div class="text-box">
                                    <h5>DỰ ÁN HOẠT HÌNH CON THỎ</h5>
                                    <p>Coolmate góp 250 triệu đồng giúp Thỏ Bảy Màu lội ngược dòng ngoạn mục: Trở thành phim hoạt hình Việt Nam đầu tiên gọi vốn cộng đồng thành công</p>
                                </div>
                                <div class="box-bottom">
                                    <p>Đã ủng hộ 1.550.000.000đ / 3.000.000.000đ</p>
                                    <div class="progress-container progress-primary"><span class="progress-badge"></span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="" class="item">
                            <div class="image-box">
                                <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tech-icons/Rectangle 14.webp' ?>" alt="">
                                <span><i class="bi bi-heart"></i></span>
                            </div>

                            <div class="box-right">
                                <div class="text-box">
                                    <h5>DỰ ÁN HOẠT HÌNH CON THỎ</h5>
                                    <p>Coolmate góp 250 triệu đồng giúp Thỏ Bảy Màu lội ngược dòng ngoạn mục: Trở thành phim hoạt hình Việt Nam đầu tiên gọi vốn cộng đồng thành công</p>
                                </div>
                                <div class="box-bottom">
                                    <p>Đã ủng hộ 1.550.000.000đ / 3.000.000.000đ</p>
                                    <div class="progress-container progress-primary"><span class="progress-badge"></span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="" class="item">
                            <div class="image-box">
                                <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/tech-icons/Rectangle 15.webp' ?>" alt="">
                                <span><i class="bi bi-heart"></i></span>
                            </div>

                            <div class="box-right">
                                <div class="text-box">
                                    <h5>DỰ ÁN HOẠT HÌNH CON THỎ</h5>
                                    <p>Coolmate góp 250 triệu đồng giúp Thỏ Bảy Màu lội ngược dòng ngoạn mục: Trở thành phim hoạt hình Việt Nam đầu tiên gọi vốn cộng đồng thành công</p>
                                </div>
                                <div class="box-bottom">
                                    <p>Đã ủng hộ 1.550.000.000đ / 3.000.000.000đ</p>
                                    <div class="progress-container progress-primary"><span class="progress-badge"></span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary aos-init aos-animate" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="view-all">
                    <a href="/page-projects/">xem toàn bộ </a>
                </div>
            </div>
        </div>
   </div>
   
</section>
<?php endif;
add_action( 'wp_footer', 'ap2script', 99, 1 );
if (!function_exists('ap2script'))   {
    function ap2script() { ?>
        <script async>
            ( function ( $ ) {
              
            }( jQuery ) );
        </script>
    <?php }
}