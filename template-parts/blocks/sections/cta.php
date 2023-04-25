<?php

/**
 * "CTA" Block Template.
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
$className = 'w-cta';

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
$list = get_field('list');
$imageBg = get_field('image_background');
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <?= ($title) ? '<h2>'.$title.'</h2>' : '' ?>
        <?php if($list) : ?>
        <div class="list">
            <?php foreach($list as $item) : ?>
            <div class="item">
                <div class="row">
                    <?php if($item['avatar']) : ?>
                    <div class="col-lg-3">
                        <div class="wrap">
                            <div class="image">
                                <img src="<?= esc_url($item['avatar']['url']) ?>" alt="<?= esc_attr($item['avatar']['alt']) ?>">
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($item['content']) : ?> 
                    <div class="col-lg-9">
                        <div class="content">
                            <?= ($item['content']['name']) ? '<h3>'.$item['content']['name'].'</h3>' : '' ?>
                            <?= ($item['content']['subtext']) ? '<span>'.$item['content']['subtext'].'</span>' : '' ?>
                            <?= ($item['content']['desc']) ? '<p>'.$item['content']['desc'].'</p>' : '' ?>
                            <div class="contact">
                                <div class="row">
                                    <?php if($item['content']['address']) : ?>
                                    <div class="col-lg-3 mb-lg-0 mb-3">
                                        <div class="box d-flex">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            <div class="detail">
                                                <?= $item['content']['address'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?> 
                                    <?php if($item['content']['phones']) : ?>
                                    <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="box d-flex">
                                            <i class="bi bi-telephone-fill"></i>
                                            <div class="detail">
                                                <?= $item['content']['phones'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($item['content']['follows']) : ?>
                                    <div class="col-lg-6 mb-lg-0 mb-3">
                                        <div class="listCont d-flex">
                                            <?php if($item['content']['follows']['skype']) : ?>
                                            <a href="<?= esc_url($item['content']['follows']['skype']['url']) ?>"><i class="bi bi-skype"></i></a>
                                            <?php endif; ?>
                                            <?php if($item['content']['follows']['skype']) : ?>
                                            <a href="<?= esc_url($item['content']['follows']['twitter']['url']) ?>"><i class="bi bi-twitter"></i></a>
                                            <?php endif; ?>
                                            <?php if($item['content']['follows']['skype']) : ?>
                                            <a href="<?= esc_url($item['content']['follows']['google']['url']) ?>"><i class="bi bi-google"></i></a>
                                            <?php endif; ?>
                                            <?php if($item['content']['follows']['skype']) : ?>
                                            <a href="<?= esc_url($item['content']['follows']['youtube']['url']) ?>"><i class="bi bi-youtube"></i></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if($item['content']['link']) : ?>
                                <a href="<?= esc_url($item['content']['link']['url']) ?>"><?= esc_attr($item['content']['link']['title']) ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- <div class="item">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="wrap">
                            <div class="image">
                                <img src="/wp-content/uploads/2023/04/home-instructor-2.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="content">
                            <h3>Danniel Craig</h3>
                            <span>Private online Principles of Accounts tutor</span>
                            <p>Perturbationes autem nulla naturae vi commoventur, omniaque ea sunt opiniones ac iudicia levitatis. Erat enim Polemonis. Nunc ita separantur, ut disiuncta sint, quo nihil potest esse perversius. Sed quanta sit alias, nunc tantum possitne esse tanta.</p>
                            <div class="contact">
                                <div class="row">
                                    <div class="col-lg-3 mb-lg-0 mb-3">
                                        <div class="box d-flex">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            <div class="detail">
                                                <p>164 Nguyen Xi, Binh Thanh</p>
                                                <p>Ho Chi Minh City, Vietnam</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="box d-flex">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            <div class="detail">
                                                <p>+123 456 789</p>
                                                <p>+123 456 7895</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-lg-0 mb-3">
                                        <div class="listCont d-flex">
                                            <a href=""><i class="bi bi-skype"></i></a>
                                            <a href=""><i class="bi bi-skype"></i></a>
                                            <a href=""><i class="bi bi-skype"></i></a>
                                            <a href=""><i class="bi bi-skype"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="">View Workflow</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <?php endif; ?>
    </div>
    <?php if($imageBg) : ?>
    <div class="bg imageContentt">
        <img src="<?= esc_url($imageBg['url']) ?>" alt="<?= esc_attr($imageBg['alt']) ?>">
    </div>
    <?php endif; ?>
</section>
<?php endif;
add_action( 'wp_footer', 'ctascript', 99, 1 );
if (!function_exists('ctascript'))   {
    function ctascript() { ?>
        <script async>
            ( function ( $ ) {
                $('.w-cta .list').slick({
                infinite: true,
                slidesToShow: 1,
                arrow: false,
                prevArrow: `<button type='button' class='slick-prev slick-arrow'><img src="/wp-content/uploads/2023/04/custom-arrow.webp" alt=""></button>`,
                nextArrow: `<button type='button' class='slick-next slick-arrow'><img src="/wp-content/uploads/2023/04/custom-arrow.webp" alt=""></button>`,
                slidesToScroll: 1
                });

                var image = $('.imageContentt')[0];
                document.addEventListener('mousemove', function(event) {
                var mouseX = event.clientX;
                var mouseY = event.clientY;
                var imageX = image.offsetLeft + (image.offsetWidth / 2);
                var imageY = image.offsetTop + (image.offsetHeight / 2);
                var distX = mouseX - imageX;
                var distY = mouseY - imageY;
                var transform = 'translate(' + (-distX / 3) + 'px,' + (distY / 40) + 'px)';
                image.style.transform = transform;
                });
            }( jQuery ) );
        </script>
    <?php }
}