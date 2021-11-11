<section class="section novi-background bg-cover bg-white section-inset-1 parallax-scene-js" id="contacts">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 d-none d-lg-block wow fadeInLeft"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index-6-538x694.png" alt="" width="538" height="694"/> </div>
            <div class="col-md-8 col-lg-6">
                <div class="inset-xl-left-35 section-sm">
                    <h3 class="wow fadeInRight"><?php pll_e('contact_title'); ?></h3>
                    <h6 class="title-style-1 wow fadeInRight" data-wow-delay=".05s"><?php pll_e('contact_content'); ?></h6>
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
                                <button class="button button-jerry button-primary" id="buttonid" type="submit"><?php pll_e('contact_link_title'); ?><span class="button-jerry-line"></span><span class="button-jerry-line"></span><span class="button-jerry-line"></span><span class="button-jerry-line"></span> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layer-wrap layer-3">
        <div class="layer" data-depth="0.4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bg/index-9-1047x531.png" alt="" width="1047" height="531"/> </div>
    </div>
</section>