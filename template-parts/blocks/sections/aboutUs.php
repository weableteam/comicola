<?php

/**
 * "About Us Block Template.
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
$className = 'w-au';

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


    // Load values and assign defaults
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="text-center">
            <h2 class="w-au__heading">Báo chí nói gì về chúng tôi?</h2>
            <p class="w-au__title">Một vài bí kíp nho nhỏ đến từ kinh nghiệm quản lý dự án crowdfunding của chúng tôi.
            </p>
        </div>
        <div class="w-au__slider">
            <div class="w-au__item">
                <span><i class="bi bi-chat-left-quote"></i></span>
                <p class="w-au__desc">"Điều thú vị là khi thực hiện gây quỹ cộng đồng, bên cạnh các cuốn sách về giới
                    trẻ, tình yêu được
                    độc giả đón nhận, ban điều hành của Comicola đã nhận ra người Việt trẻ không hề quay lưng với các đề
                    tài lịch sử, vốn bị cho là khô khan, kén người đọc."
                </p>
                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/image 2.png' ?>" alt="">
            </div>
            <div class="w-au__item">
                <span><i class="bi bi-chat-left-quote"></i></span>
                <p class="w-au__desc">"Điều thú vị là khi thực hiện gây quỹ cộng đồng, bên cạnh các cuốn sách về giới
                    trẻ, tình yêu được
                    độc giả đón nhận, ban điều hành của Comicola đã nhận ra người Việt trẻ không hề quay lưng với các đề
                    tài lịch sử, vốn bị cho là khô khan, kén người đọc."
                </p>
                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/image 2.png' ?>" alt="">
            </div>
        </div>
    </div>

</section>
<?php endif;
add_action('wp_footer', 'ap3script', 99, 1);
if (!function_exists('ap3script')) {
    function ap3script()
    { ?>
<script async>
(function($) {
    console.log(123)
    $(document).ready(function() {
        $(".w-au__slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            draggable: true,
            //   prevArrow: `<button type='button' class='slick-prev slick-arrow'><i class="fa-solid fa-chevron-left"></i></button>`,
            //   nextArrow: `<button type='button' class='slick-next slick-arrow'><i class="fa-solid fa-chevron-right"></i></button>`,
            dots: true,
            responsive: [{
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 1,
                        draggable: true,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                        infinite: true,
                        draggable: true,
                        dots: false,
                    },
                },
            ],
            // autoplay: true,
            // autoplaySpeed: 1000,
        });
    });
}(jQuery));
</script>
<?php }
}