<?php

/**
 * "Online Shop" Block Template.
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
$className = 'w-os';

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
$list = get_field('list');
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <?php if($list) : ?>
        <div class="row">
            <?php foreach($list as $item) : ?>
            <div class="col-lg-4 items">
                <div class="item">
                    <?php if($item['icon']) : ?>
                    <div class="icon">
                        <img src="<?= esc_url($item['icon']['url']) ?>" alt="<?= esc_attr($item['icon']['alt']) ?>">
                    </div>
                    <?php endif; ?>
                    <?php if($item['number']) : ?>
                        <h3><span class="num"><?= $item['number'] ?></span><span>+</span></h3>
                    <?php endif; ?>
                    <?= ($item['name']) ? '<span class="title">'.$item['name'].'</span>' : '' ?>
                    <?= ($item['desc']) ? '<p>'.$item['desc'].'</p>' : '' ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif;
add_action( 'wp_footer', 'osscript', 99, 1 );
if (!function_exists('osscript'))   {
    function osscript() { ?>
        <script async>
            ( function ( $ ) {
                $('.w-os .items').each((index, elem)=>{
                    console.log($(elem).find('.num').html())
                    var start = 0; // số bắt đầu từ 0
                    var end = Number($(elem).find('.num').html()) 
                    var duration = 3000;

                    var numberElement = document.getElementById("number");

                    var range = end - start; // Tính khoảng cách từ số bắt đầu đến số kết thúc
                    var current = start; // Khởi tạo giá trị hiện tại là số bắt đầu
                    var increment = end > start ? 1 : -1; // Xác định hướng tăng hoặc giảm của số
                    var stepTime = Math.abs(Math.floor(duration / range)); // Tính thời gian bước

                    var timer = setInterval(function() {
                        current += increment; // Tăng hoặc giảm giá trị hiện tại
                        $(elem).find('.num').html(current) // Cập nhật giá trị vào thẻ span
                        if (current == end) { // Nếu đạt đến số kết thúc
                            clearInterval(timer); // Dừng đếm
                        }
                    }, stepTime);
                })
            }( jQuery ) );
        </script>
    <?php }
}