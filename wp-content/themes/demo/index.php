<?php get_header();?>
    <div class="primary">
        <main id="main" class="site-main mt-5" role="main">
            <?php if(have_posts()):?>
                <div class="container">

                    <?php if(is_home() && !is_front_page()):?>
                        <h1><?php single_post_title();?></h1>
                    <?php endif;?>
                    <div class="row">
                        <?php while(have_posts()):?>
                            <?php get_template_part("templates/content-post");?>
                        <?php endwhile;?>
                    </div>
                </div>
            <?php endif;?>
            <?php if(paginate_links()):?>
                <div class="pagination container mb-4">
                     <?php
                        echo paginate_links([
                            "show_all" => true,
                            "pref_next" => true
                        ]);
                     ?>
                </div>
            <?php endif;?>
        </main>
    </div>
<?php get_footer();?>

   