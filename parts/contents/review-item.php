<article class="quote-classic">
    <div class="quote-classic-text">
        <div class="q"><?php the_content(); ?></div>
    </div>
    <div class="unit unit-spacing-md align-items-center text-left d-inline-flex">
        <div class="unit-left">
            <div class="quote-classic-figure"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" width="80" height="80"/> </div>
        </div>
        <div class="unit-body">
            <div class="quote-classic-author"><?php the_title(); ?></div>
            <div class="quote-classic-status"><?php the_excerpt(); ?></div>
        </div>
    </div>
    <div class="quote-classic-decor-wrap">
        <div class="quote-classic-decor"></div>
        <div class="quote-classic-decor"></div>
    </div>
</article>