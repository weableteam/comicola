<?php

/**
 * "Rank" Block Template.
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
$className = 'w-rank';

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
$left = get_field('left');
$right = get_field('right');



?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="row justify-content-between">
            <?php if($left) : ?>
            <div class="col-lg-6">
                <?= ($left['title']) ? '<h2>'.$left['title'].'</h2>' : ' ' ?>
                <?= ($left['small_title']) ? '<h3>'.$left['small_title'].'</h3>' : ' ' ?>
                <?= ($left['subtitle']) ? '<span>'.$left['subtitle'].'</span>' : ' ' ?>
                <?= ($left['description']) ? '<p>'.$left['description'].'</p>' : ' ' ?>
                <?php if($left['awards']) : ?>
                <div class="row mt-5">
                    <?php foreach($left['awards'] as $item) : ?>
                    <div class="col-lg-4 col-6">
                        <div class="item">
                            <?php if($item['image']) : ?>
                            <div class="image">
                                <img src="<?= esc_url($item['image']['url']) ?>" alt="<?= esc_attr($item['image']['alt']) ?>">
                            </div>
                            <?php endif; ?>
                            <div class="content">
                                <?= ($item['name']) ? '<h4>'.$item['name'].'</h4>' : '' ?>
                                <?= ($item['detail']) ? '<span>'.$item['detail'].'</span>' : '' ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if($right) : ?>
            <div class="col-lg-5">
               <div class="title text-center">
                    <?= ($right['title']) ? '<h3>'.$right['title'].'</h3>' : '' ?>
                    <?= ($right['subtitle']) ? '<span>'.$right['subtitle'].'</span>' : '' ?>
               </div>
               <?php if($right['list']) : ?>
               <div class="slider">
                    <?php foreach($right['list'] as $item) : ?>
                    <div class="item">
                        <?php if($item['image']) : ?>
                        <div class="img-wrap">
                            <img src="<?= esc_url($item['image']['url']) ?>" alt="<?= esc_attr($item['image']['alt']) ?>">
                        </div>
                        <?php endif; ?>
                            <?= ($item['name']) ? '<div class="name">'.$item['name'].'</div>' : '' ?>
                            <?= ($item['rank']) ? '<div class="rank">'.$item['rank'].'</div>' : '' ?>
                    </div>
                    <?php endforeach; ?>
               </div>
               <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif;
add_action( 'wp_footer', 'rankscript', 99, 1 );
if (!function_exists('rankscript'))   {
    function rankscript() { ?>
        <script async>
            ( function ( $ ) {
                
                $('.w-rank .slider').slick({
                infinite: true,
                slidesToShow: 2,
                arrow: false,
                prevArrow: `<button type='button' class='slick-prev slick-arrow'><img src="/wp-content/uploads/2023/04/custom-arrow.webp" alt=""></button>`,
                nextArrow: `<button type='button' class='slick-next slick-arrow'><img src="/wp-content/uploads/2023/04/custom-arrow.webp" alt=""></button>`,
                slidesToScroll: 1
                });
            }( jQuery ) );
        </script>
    <?php }
}