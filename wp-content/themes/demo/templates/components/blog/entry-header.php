<div class="entry-header">
    <?php
        $the_post_id = get_the_ID();
        $has_post_thumbnail = get_the_post_thumbnail($the_post_id);
        if($has_post_thumbnail):
        //var_dump($has_post_thumbnail);
        //var_dump($the_post_id);
    
    ?>
    <div class="entry-image mb-3">
        <a href="<?php echo esc_url(get_permalink());?>">
            <?php $attr = ["class" => "img"];?>
            <?php the_post_thumbnail("thumbnail", $attr);?>
        </a>
    </div>
    <?php else:?>
        <div class="no-image">
            <a href="<?php echo esc_url(get_permalink());?>">   
                <img src="https://dummyimage.com/150X150/000/fff&text=画像がありません" alt="">
            </a>
        </div>
    <?php endif;?>
</div>