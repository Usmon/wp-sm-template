<?php
/*
Template Name: News page template
Template Post Type: post, page, event
*/
get_header();
?>
<section class="section novi-background bg-cover section-xl bg-white text-center decoration-1">
    <div class="container">
        <h3 class="wow fadeInRight"><?php pll_e('post_title'); ?></h3>
        <h6 class="title-style-1 wow fadeInLeft"><?php pll_e('post_content'); ?></h6>
        <div class="row row-xl row-30 justify-content-center justify-content-xl-between">
            <?php
            query_posts('showposts=3');
            if (have_posts() ) :
            while (have_posts() ) : the_post();
            ?>
            <div class="col-sm-6 col-md-4 col-xl-4 wow fadeInUp" data-wow-delay=".05s">
                <article class="post-classic">
                    <div class="heading-3 post-classic-time">
                        <time datetime="2019-06-19"><?php the_time('M d, Y'); ?></time>
                    </div>
                    <a class="post-classic-figure" href="#"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" width="270" height="182"/></a>
                    <h5 class="post-classic-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
                    <p class="post-classic-text"><?php the_excerpt(); ?></p>
                </article>
            </div>
            <?php endwhile;
            endif;
            ?>
        </div>
    </div>
    <?php echo paginate_links() ?>
</section>
<?php
get_footer();
?>
