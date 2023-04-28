<?php

/**
 * "Banner Hero" Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'w-block-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'w-banner';

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

$isFullWidth = false;
if (!empty($block['align'])) {
    $isFullWidth = $block['align'] === 'full' ? true : false;
    $className .= ' align-' . $block['align'];
}

// Check preview image not empty
if (isset($block['data']['preview'])) :
    echo '<img src="' . $block['data']['preview'] . '" style="width:100%; height:auto;">';
else :


// Load values and assign defaults.
$type = get_field('type');
$content = get_field('content');

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <div class="w-banner__container">
        <?php if($type == 'video') : ?>
            <?php if($video = get_field('video')) : ?>
            <video class="w-banner__video" autoplay="" muted="" loop="">
                <source src="<?= $video ?>">
            </video>
            <?php endif; ?>
        <?php endif; ?>
        <?php if($type == 'image') : ?>
            <?php if($image = get_field('image')) : ?>
            <div class="w-banner__video">
                <img src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>">
            </div>
            <?php endif; ?>
        <?php endif; ?>
        <div class="w-banner__link">
            <a href="#">
                <img class="w-banner__image"
                    src="<?= get_stylesheet_directory_uri() . '/assets/images/thobaymau_call_to_action_btn_resize.png' ?>"
                    alt="Hoạt hình con thỏ kêu gọi vốn cộng đồng">
            </a>
        </div>
        <?php if($content) : ?>
        <div class="w-banner__text">
            <div class="container">
                <div class="w-banner__marquee">
                    <span class="w-banner__icon"><i class="bi bi-broadcast-pin"></i></span>
                    <span class="w-banner__run" data-period="1000"
                        data-type='[ "<?= $content ?>", "<?= $content ?>" ]'>
                        <span class="wrap"> </span>
                    </span>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif;
add_action('wp_footer', 'bannerScripts', 99, 1);
if (!function_exists('bannerScripts')) {
    function bannerScripts()
    { ?>
<script async>
(function($) {

}(jQuery));
</script>
<?php }
}