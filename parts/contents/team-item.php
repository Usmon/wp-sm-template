<article class="team-classic wow fadeInUp" data-wow-delay=".1s">
    <div class="team-classic-figure"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" width="290" height="284"/> </div>
    <div class="team-classic-body">
        <h5 class="team-classic-name"><a href="#"><?php the_title() ?></a></h5>
    </div>
    <div class="team-classic-footer">
        <div class="team-classic-status"><?php the_excerpt(); ?></div>
        <div class="team-classic-list-panel">
            <ul class="team-classic-list-social list-inline">
                <li><a class="icon novi-icon fa fa-facebook" href="<?php echo get_field_by_post_id(get_the_ID(), 'facebook') ?>"></a></li>
                <li><a class="icon novi-icon fa fa-instagram" href="<?php echo get_field_by_post_id(get_the_ID(), 'instagram') ?>"></a></li>
                <li><a class="icon novi-icon fa fa-youtube-play" href="<?php echo get_field_by_post_id(get_the_ID(), 'youtube') ?>"></a></li>
            </ul>
            <div class="heading-1 team-classic-placeholder"><?php echo get_first_name(get_the_title()) ?></div>
        </div>
    </div>
</article>