<?php

/**
 * "Featured" Block Template.
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
$className = 'w-featured';

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
        <div class="w-featured-box">
            <div class="w-featured-title text-center d-block mb-5 ">
                <h3 class="w-featured-h3 ">Làm sao để có được dự án crowdfunding thành công?</h3>
                <p class="">Sau khi ra mắt trên Comicola Crowdfunding, các dự án đã có tiến triển như thế nào?</p>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6  mb-4">
                    <div class="w-featured-item d-flex  align-items-center">
                        <img src="<?=get_stylesheet_directory_uri() . '/assets/images/item_group.png' ?>" alt="">
                        <div class="w-featured-content ml-4">
                            <h4>Hợp tác hỗ trợ</h4>
                            <p class="mb-0">Hãy xem những người ủng hộ như đối tác tiềm năng của bạn</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="w-featured-item d-flex  align-items-center">
                        <img src="<?=get_stylesheet_directory_uri() . '/assets/images/item_group.png' ?>" alt="">
                        <div class="w-featured-content ml-4">
                            <h4>Hợp tác hỗ trợ</h4>
                            <p class="mb-0">Hãy xem những người ủng hộ như đối tác tiềm năng của bạn</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="w-featured-item d-flex  align-items-center">
                        <img src="<?=get_stylesheet_directory_uri() . '/assets/images/item_group.png' ?>" alt="">
                        <div class="w-featured-content ml-4">
                            <h4>Hợp tác hỗ trợ</h4>
                            <p class="mb-0">Hãy xem những người ủng hộ như đối tác tiềm năng của bạn</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="w-featured-item d-flex  align-items-center">
                        <img src="<?=get_stylesheet_directory_uri() . '/assets/images/item_group.png' ?>" alt="">
                        <div class="w-featured-content ml-4">
                            <h4>Hợp tác hỗ trợ</h4>
                            <p class="mb-0">Hãy xem những người ủng hộ như đối tác tiềm năng của bạn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;
add_action( 'wp_footer', 'featuredScript', 99, 1 );
if (!function_exists('featuredScript'))   {
    function featuredScript() { ?>
        <script async>
            ( function ( $ ) {
              
            }( jQuery ) );
        </script>
    <?php }
}