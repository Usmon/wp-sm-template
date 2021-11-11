<section class="section novi-background bg-cover section-xl bg-white parallax-scene-js" id="about">
    <div class="container">
        <div class="row row-50 align-items-center justify-content-md-between">
            <div class="col-md-4 col-lg-5">
                <div class="row row-40 row-md-60">
                    <?php
                        $items = get_posts_by_type('service', 'ASC', 4);

                        if ($items->have_posts()) :
                            while ($items->have_posts()) {
                                $items->the_post();
                                get_template_part('parts/contents/service-item');
                            }
                            wp_reset_postdata();
                        endif;
                    ?>
                </div>
            </div>
            <div class="col-md-7 col-lg-6">
                <div class="inset-xl-left-35">
                    <h3 class="wow fadeInRight"> <?php pll_e('about_title'); ?>
                    <h6 class="title-style-1 wow fadeInRight" data-wow-delay=".05s"><?php pll_e('about_connect_info');?></h6>
                    <div class="form-style-1 context-dark wow blurIn">
                        <!-- RD Mailform-->
                        <form class="recarc-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="#">
                            <div class="form-wrap">
                                <label class="form-label" for="name"><?php pll_e('input_name'); ?></label>
                                <input class="form-input" id="name" type="text" name="name" data-constraints="@Required">
                            </div>
                            <div class="form-wrap">
                                <label class="form-label" for="email"><?php pll_e('input_email'); ?></label>
                                <input class="form-input" id="email" type="email" name="email" data-constraints="@Required @Email">
                            </div>
                            <div class="form-wrap">
                                <label class="form-label" for="message"><?php pll_e('input_phone'); ?></label>
                                <input class="form-input" id="message" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                            </div>
                            <div class="form-button">
                                <button class="button button-jerry button-primary" id="buttonid" type="submit"><?php pll_e('submit');?><span class="button-jerry-line"></span><span class="button-jerry-line"></span><span class="button-jerry-line"></span><span class="button-jerry-line"></span> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layer-wrap layer-1">
        <div class="layer" data-depth="0.4"><img src="<?php echo get_resource_full_url('images/bg/index-7-694x539.png'); ?>" alt="" width="694" height="539"/> </div>
    </div>
</section>