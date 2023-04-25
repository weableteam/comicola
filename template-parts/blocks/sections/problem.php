<?php

/**
 * "problem" Block Template.
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
$className = 'w-problem';

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
$title = get_field('title');
$subtitle = get_field('subtitle');
$list = get_field('list');
$link = get_field('link');



?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?= ($title) ? '<h2>'.$title.'</h2>' : '' ?>
    <?= ($subtitle) ? '<span>'.$subtitle.'</span>' : '' ?>
    <?php if($list) : ?>
   <div class="list" >
        <div class="image1">
            <img src="/wp-content/uploads/2023/04/top-arrow.webp" alt="">
        </div>
        <div class="row ">
            <?php foreach($list as $item) : ?>
            <div class="item col-lg-3 col-6">
                <div class="content">
                    <?= ($item['number']) ? '<h5>'.$item['number'].'</h5>' : '' ?>
                    <?= ($item['name']) ? '<h4>'.$item['name'].'</h4>' : '' ?>
                    <?= ($item['detail']) ? '<p>'.$item['detail'].'</p>' : '' ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="image2">
            <img src="/wp-content/uploads/2023/04/bottom-arrow.webp" alt="">
        </div>
        <div class="image3">
            <img src="/wp-content/uploads/2023/04/bottom-arrow.webp" alt="">
        </div>
   </div >
   <?php endif; ?>
   <?php if($link) : ?>
        <a href="<?= esc_url($link['url']) ?>"><?= esc_attr($link['title']) ?></a>
   <?php endif; ?>
</section>
<?php endif;
add_action( 'wp_footer', 'problemscript', 99, 1 );
if (!function_exists('problemscript'))   {
    function problemscript() { ?>
        <script async>
            ( function ( $ ) {
                
            }( jQuery ) );
        </script>
    <?php }
}