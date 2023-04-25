<?php

/**
 * "posts" Block Template.
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
$className = 'w-posts';

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


// Load values and assign defaults.

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
  <div class="container">
        <div class="w-posts-box">
            <div class="w-post-title text-center d-block mb-5 ">
                <h3 class="w-post-h3 text-uppercase">Tin tức mới cập nhập</h3>
            <p class="">Sau khi ra mắt trên Comicola Crowdfunding, các dự án đã có tiến triển như thế nào?</p>
            </div>
            
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <a class="card w-posts-box-item " >
                       <div class="w-post-box-item-image">
                            <img class="card-img-top imgae_item_post" src="<?=get_stylesheet_directory_uri() . '/assets/images/image_item.png' ?>" alt="Card image cap">
                       </div>
                        <div class="card-body">
                            <p class="card-text text-dark font-weight-bold mb-2">Cuốn sách Dệt Nên Triều Đại được trưng bày tại sảnh chính Bảo tàng Quốc gia Nghệ thuật Châu Á Hoa Kỳ, thủ đô Washington DC</p>
                            <span class="w-posts-time">Thứ 2, ngày 13 tháng 06 năm 2023</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <a class="card w-posts-box-item " >
                       <div class="w-post-box-item-image">
                            <img class="card-img-top imgae_item_post" src="<?=get_stylesheet_directory_uri() . '/assets/images/image_item.png' ?>" alt="Card image cap">
                       </div>
                        <div class="card-body">
                            <p class="card-text text-dark font-weight-bold mb-2">Cuốn sách Dệt Nên Triều Đại được trưng bày tại sảnh chính Bảo tàng Quốc gia Nghệ thuật Châu Á Hoa Kỳ, thủ đô Washington DC</p>
                            <span class="w-posts-time">Thứ 2, ngày 13 tháng 06 năm 2023</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <a class="card w-posts-box-item " >
                       <div class="w-post-box-item-image">
                            <img class="card-img-top imgae_item_post" src="<?=get_stylesheet_directory_uri() . '/assets/images/image_item.png' ?>" alt="Card image cap">
                       </div>
                        <div class="card-body">
                            <p class="card-text text-dark font-weight-bold mb-2">Cuốn sách Dệt Nên Triều Đại được trưng bày tại sảnh chính Bảo tàng Quốc gia Nghệ thuật Châu Á Hoa Kỳ, thủ đô Washington DC</p>
                            <span class="w-posts-time">Thứ 2, ngày 13 tháng 06 năm 2023</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <a class="card w-posts-box-item " >
                       <div class="w-post-box-item-image">
                            <img class="card-img-top imgae_item_post" src="<?=get_stylesheet_directory_uri() . '/assets/images/image_item.png' ?>" alt="Card image cap">
                       </div>
                        <div class="card-body">
                            <p class="card-text text-dark font-weight-bold mb-2">Cuốn sách Dệt Nên Triều Đại được trưng bày tại sảnh chính Bảo tàng Quốc gia Nghệ thuật Châu Á Hoa Kỳ, thủ đô Washington DC</p>
                            <span class="w-posts-time">Thứ 2, ngày 13 tháng 06 năm 2023</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <a class="card w-posts-box-item " >
                       <div class="w-post-box-item-image">
                            <img class="card-img-top imgae_item_post" src="<?=get_stylesheet_directory_uri() . '/assets/images/image_item.png' ?>" alt="Card image cap">
                       </div>
                        <div class="card-body">
                            <p class="card-text text-dark font-weight-bold mb-2">Cuốn sách Dệt Nên Triều Đại được trưng bày tại sảnh chính Bảo tàng Quốc gia Nghệ thuật Châu Á Hoa Kỳ, thủ đô Washington DC</p>
                            <span class="w-posts-time">Thứ 2, ngày 13 tháng 06 năm 2023</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <a class="card w-posts-box-item " >
                       <div class="w-post-box-item-image">
                            <img class="card-img-top imgae_item_post" src="<?=get_stylesheet_directory_uri() . '/assets/images/image_item.png' ?>" alt="Card image cap">
                       </div>
                        <div class="card-body">
                            <p class="card-text text-dark font-weight-bold mb-2">Cuốn sách Dệt Nên Triều Đại được trưng bày tại sảnh chính Bảo tàng Quốc gia Nghệ thuật Châu Á Hoa Kỳ, thủ đô Washington DC</p>
                            <span class="w-posts-time">Thứ 2, ngày 13 tháng 06 năm 2023</span>
                        </div>
                    </a>
                </div>
                
                
            </div>
        </div>
  </div>
</section>
<?php endif;
add_action( 'wp_footer', 'addressScript', 99, 1 );
if (!function_exists('addressScript'))   {
    function addressScript() { ?>
        <script async>
            ( function ( $ ) {
                
            }( jQuery ) );
        </script>
    <?php }
}