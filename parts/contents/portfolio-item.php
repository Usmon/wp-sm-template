<article class="project-mary">
    <div class="project-mary-figure"><img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title() ?>" />
        <div class="project-mary-link-wrap"><a class="project-mary-link fa fa-search" data-lightgallery="item" href="<?php the_post_thumbnail_url('full'); ?>"><img src="<?php the_post_thumbnail_url('full'); ?>" alt="" /></a></div>
    </div>
    <div class="project-mary-content">
        <ul class="project-mary-panel">
            <li class="project-mary-panel-item">
                <time class="project-mary-time" datetime="2019-03-15"><?php the_time('M d, Y'); ?></time>
            </li>
            <li class="project-mary-panel-item">
                <div class="project-mary-tag"><?php the_category(); ?></div>
            </li>
        </ul>
        <h3 class="project-mary-title"><a href="#"><?php the_title() ?></a></h3>
        <p class="project-mary-text"><?php the_excerpt(); ?></p>
    </div>
</article>