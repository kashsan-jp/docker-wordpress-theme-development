<?php
$post_author = get_the_author();
?>

<div class="categories">
            カテゴリー一覧：<?php the_category(",");?>
</div>
<!-- タグの取得 -->
<div class="tags">
    <?php the_tags("タグ一覧:");?>
</div>

<div class="author">
    <h6>
        投稿者：<?php echo $post_author; ?>
    </h6>
</div>