<div class="col-sm-6 col-md-4 col-xl-3 wow fadeInUp">
    <article class="post-classic">
        <div class="heading-3 post-classic-time">
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('M d, Y'); ?></time>
        </div>
        <a class="post-classic-figure" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
        <h5 class="post-classic-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
        <p class="post-classic-text"><?php the_excerpt(); ?></p>
    </article>
</div>