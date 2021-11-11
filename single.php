<?php
    get_header();
?>
<section class="section novi-background bg-cover section-xl bg-white text-center decoration-1">
    <div class="container">
        <h3 class="wow fadeInRight"><?php echo the_title() ?></h3>
        <h6 class="title-style-1 wow fadeInLeft">Post view</h6>
        <div class="row row-xl row-30 justify-content-center justify-content-xl-between">
        <div class="col-sm-12 wow fadeInUp">
            <article>
                <div class="heading-3 post-classic-time">
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('M d, Y'); ?></time>
                </div>
                <a class="post-classic-figure" href="#"><?php the_post_thumbnail('large'); ?></a>
                <p class="post-classic-text text-left"><?php the_content(); ?></p>
            </article>
        </div>
        </div>
    </div>
</section>
<?php
    get_footer();
?>
