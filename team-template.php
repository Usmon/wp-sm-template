<?php
/*
Template Name: Team page template
Template Post Type: post, page, event
*/
get_header();
?>
<section class="section novi-background bg-cover section-lg bg-gray-100 text-center" id="team">
    <div class="container">
        <h3 class="wow fadeInLeft"><?php pll_e('team_title'); ?></h3>
        <h6 class="title-style-1 wow fadeInRight"><?php pll_e('team_info_title'); ?></h6>
        <!-- Owl Carousel-->
        <div class="owl-carousel" data-items="1" data-sm-items="2" data-md-items="3" data-xl-items="4" data-margin="5" data-dots="true" data-mouse-drag="false">
            <?php
            $items = get_posts_by_type('team', 'DESC', -1);

            if($items->have_posts()) :
                while ($items->have_posts()) {
                    $items->the_post();
                    get_template_part( 'parts/contents/team-item');
                }
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
<?php
// get footer.php file
get_footer();
?>
