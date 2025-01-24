    <div class="bg-light col-lg-4 col-md-6 col-sm-12">
        <!-- 投稿の取得 -->
        <?php the_post();?>

        
        
        <article id="post-<?php the_id();?>" <?php post_class("mb-5");?>>
            <!-- タイトルの表示 -->
            <!-- <?php the_title();?> -->
            <!-- 本文の表示 -->
            <!-- <?php the_content();?> -->

            <?php get_template_part("templates/components/blog/entry-header");?>
            <?php get_template_part("templates/components/blog/entry-meta");?>
            <?php get_template_part("templates/components/blog/entry-content");?>
            <?php get_template_part("templates/components/blog/entry-footer");?>
        </article>
        
    </div>