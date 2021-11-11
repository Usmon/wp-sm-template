<section class="section novi-background bg-cover section-horace">
    <div class="section-horace-left bg-gray-800">
        <div class="section-horace-left-content text-center">
            <article class="project-classic project-classic-2">
                <div class="project-classic-title" style="font-size: 35px; text-align: center">
                    <?php echo str_replace(' ', '<br>', (get_locale() == 'uz_UZ' ? get_header_field('main_title_uz') : get_header_field('main_title'))) ?>
                </div>
                <h6 class="project-classic-text" style="font-weight: 100; text-transform: inherit;">
                    <?php echo (get_locale() == 'uz_UZ' ? get_header_field('slogan_uz') : get_header_field('slogan')) ?>
                </h6>
                <a class="button button-jerry button-primary-outline" href="<?php echo (get_locale() == 'uz_UZ' ? get_permalink(137) : get_permalink(33)) ?>">
                    <?php pll_e('contact_link_title'); ?>
                    <span class="button-jerry-line"></span><span class="button-jerry-line"></span><span class="button-jerry-line"></span><span class="button-jerry-line"></span></a> </article>
        </div>
        <div class="section-horace-left-panel">
            <div class="swiper-custom-nav">
                <!-- Swiper Navigation-->
                <div class="swiper-button-prev fa fa-arrow-left" id="swiper-prev"></div>
                <div class="swiper-button-next fa fa-arrow-right" id="swiper-next"></div>
            </div>
        </div>
    </div>
    <!-- Swiper-->
    <div class="swiper-container swiper-slider swiper-slider-1" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-custom-prev="#swiper-prev" data-custom-next="#swiper-next" data-slide-effect="fade">
        <div class="swiper-wrapper text-center">
            <?php
                $items = get_posts_by_type('slide');

                if($items->have_posts()) :
                    while ($items->have_posts()) {
                        $items->the_post();
                        get_template_part( 'parts/contents/slide-item');
                    }
                    wp_reset_postdata();
                endif;
            ?>
        </div>
        <div class="project-modern-counter"><?php echo (get_locale() == 'uz_UZ' ? get_header_field('works_uz') : get_header_field('works_ru')) ?></div>
    </div>
</section>