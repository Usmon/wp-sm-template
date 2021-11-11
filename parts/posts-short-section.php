<section class="section novi-background bg-cover section-xl bg-white text-center decoration-1">
    <div class="container">
        <h3 class="wow fadeInRight"><?php pll_e('post_title'); ?></h3>
        <h6 class="title-style-1 wow fadeInLeft"><?php pll_e('post_content'); ?></h6>
        <div class="row row-xl row-30 justify-content-center justify-content-xl-between">
            <?php
                $items = get_posts_by_type('post', 'DESC', 3);

                if($items->have_posts()) :
                    while ($items->have_posts()) {
                        $items->the_post();
                        get_template_part( 'parts/contents/post-item');
                    }
                    wp_reset_postdata();
                endif;
            ?>
        </div>
    </div>
</section>