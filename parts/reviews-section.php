<section class="section novi-background bg-cover section-xl section-inset-2 bg-gray-800 bg-image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg-image-1.html)">
    <div class="container">
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-style-2" data-loop="true" data-autoplay="true" data-items="1" data-margin="30" data-dots="true" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut">
            <?php
                $items = get_posts_by_type('testimonial');

                if($items->have_posts()) :
                    while ($items->have_posts()) {
                        $items->the_post();
                        get_template_part( 'parts/contents/review-item');
                    }
                    wp_reset_postdata();
                endif;
            ?>
        </div>
        <div class="inset-md-left-custom-1 text-sm-left">
            <h5 class="title-style-2">Trusted by</h5>
            <div class="clients-classic-wrap wow fadeInUp">
                <a class="clients-classic" href="#"><img src="<?php echo get_resource_full_url('images/clients/clients-1-87x54.png'); ?>" alt="" width="87" height="54"></a>
                <a class="clients-classic" href="#"><img src="<?php echo get_resource_full_url('images/clients/clients-2-112x45.png'); ?>" alt="" width="112" height="45"></a>
                <a class="clients-classic" href="#"><img src="<?php echo get_resource_full_url('images/clients/clients-3-146x28.png'); ?>" alt="" width="146" height="28"></a>
                <a class="clients-classic" href="#"><img src="<?php echo get_resource_full_url('images/clients/clients-4-84x47.png'); ?>" alt="" width="84" height="47"></a>
                <a class="clients-classic" href="#"><img src="<?php echo get_resource_full_url('images/clients/clients-5-131x29.png'); ?>" alt="" width="131" height="29"></a>
            </div>
        </div>
    </div>
</section>