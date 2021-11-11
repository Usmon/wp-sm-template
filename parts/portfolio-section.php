<section class="section novi-background bg-cover section-lg section-inset-2 bg-gray-100" id="portfolio">
    <div class="container">
        <div class="caption-classic">
            <div class="caption-classic-group">
                <h1 class="caption-classic-title wow fadeInLeft"><?php pll_e('porfolio_title'); ?></h1>
                <p class="caption-classic-text wow fadeInRight"><?php pll_e('porfolio_content'); ?></p>
            </div>
            <div class="caption-classic-decor wow blurIn"></div>
        </div>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-style-1" data-autoplay="false" data-items="1" data-margin="30" data-xl-margin="90" data-nav="true" data-dots="true" data-mouse-drag="false" data-smart-speed="600">
            <?php
                $items = get_posts_by_type('portfolio', 'DESC');

                if($items->have_posts()) :
                    while ($items->have_posts()) {
                        $items->the_post();
                        get_template_part( 'parts/contents/portfolio-item');
                    }
                    wp_reset_postdata();
                endif;
            ?>
        </div>
    </div>
</section>