<?php
/*
* Template Name: Contact page template
*/
get_header();
?>
<section class="section novi-background bg-cover bg-white section-inset-1 parallax-scene-js" id="contacts">
    <div class="container">
        <div class="row justify-content-center">
            <!-- <div class="col-lg-6 d-none d-lg-block wow fadeInLeft"><img src="images/index-6-538x694.png" alt="" width="538" height="694"/> </div> -->
            <div class="col-md-8 col-lg-6">
                <div class="inset-xl-left-35 section-sm">
                    <!--            <h3 class="wow fadeInRight">Get in touch with<br>-->
                    <!--              our team</h3>-->
                    <!--            <h6 class="title-style-1 wow fadeInRight" data-wow-delay=".05s">Let’s work together!</h6>-->
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
                                <button class="button button-jerry button-primary" id="buttonid" type="submit"><?php pll_e('contact_link_title'); ?><<span class="button-jerry-line"></span><span class="button-jerry-line"></span><span class="button-jerry-line"></span><span class="button-jerry-line"></span> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layer-wrap" style="width:100%; height: 100%;">
        <div style="width: 100%"><iframe width="100%" height="800" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=800&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+()&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="http://www.gps.ie/">vehicle gps</a></iframe></div>
    </div>
    <!--        <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPpX5GM_5rL6btAS4JNf5Cjrmi6re1e9E&callback=initMap&libraries=&v=weekly"></script>-->
    <!-- <div class="layer" data-depth="0.4"><img src="images/bg/index-9-1047x531.png" alt="" width="1047" height="531"/> </div> -->
</section>
<?php
get_footer();
?>
