<?php get_header();?>
    <div class="primary">
        <main id="main" class="site-main mt-5" role="main">
            <?php if(have_posts()):?>
                <div class="container">

                        <h1><?php single_post_title();?></h1>
                    <?php endif;?>
                    <div class="row">
                        <?php while(have_posts()):?>
                            <?php get_template_part("templates/content-post");?>
                        <?php endwhile;?>
                    </div>
                </div>
            
        </main>
    </div>
<?php get_footer();?>

   