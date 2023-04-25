<?php

/**
 * "team" Block Template.
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
$className = 'w-team';

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
        <div class="row align-items-center">
            <?php if($left) : ?>
            <div class="col-lg-6"> 
                <?= ($left['title']) ? '<h2>'.$left['title'].'</h2>' : '' ?>
                <?php if($left['content']) : ?>
                <div class="content">
                    <?= ($left['content']['desc']) ? '<p>'.$left['content']['desc'].'</p>' : '' ?>
                    <?= ($left['content']['small_title']) ? '<h4>'.$left['content']['small_title'].'</h4>' : '' ?>
                    <?php if($left['content']['links']) : ?>
                        <?php foreach( $left['content']['links'] as $item) : ?>
                            <?php if($item['link']) : ?>
                                <a href="<?= esc_url($item['link']['url']) ?>"><?= esc_attr($item['link']['title']) ?></a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if($right) : ?>
            <div class="col-lg-6">
                <?php if($right['list']) : ?>
                <div class="wrap">
                    <?php foreach($right['list'] as $item) : ?>
                    <div class="item">
                        <?php if($item['icon']) : ?>
                            <div class="itemIcon">
                                <img src="<?= esc_url($item['icon']['url']) ?>" alt="<?= esc_attr($item['icon']['alt']) ?>">
                            </div>
                        <?php endif; ?>
                        <?= ($item['name']) ? '<span>'.$item['name'].'</span>' : '' ?>
                        
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
add_action( 'wp_footer', 'teamScript', 99, 1 );
if (!function_exists('teamScript'))   {
    function teamScript() { ?>
        <script async>
            ( function ( $ ) {
                
            }( jQuery ) );
        </script>
    <?php }
}