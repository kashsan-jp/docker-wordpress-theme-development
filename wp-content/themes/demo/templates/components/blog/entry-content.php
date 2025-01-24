<div class="content">
    <h2><?php the_title();?></h2>
    <!-- single.phpの時 -->
    <?php if(is_single()):?>
        <!-- 記事本文の表示 -->
        <?php the_content();?> 
        <!-- 改ページボタンの標示 -->
        <?php wp_link_pages([
            "pagelink" => "<button class='btn btn-info'>%</button>"
        ]);?>
    <div class="mt-4 mb-4">
        <?php previous_post_link();?>
        <?php next_post_link();?>
    </div>
    <!-- single.phpの以外の時 -->
    <?php else:?>
        <?php the_excerpt()?>
    <?php endif;?>
</div>