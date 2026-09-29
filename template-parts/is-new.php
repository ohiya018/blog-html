<article class="is-new">
    <span class="new">NEW</span>
    <img src="<?php echo esc_url(get_theme_file_uri('/images/blogImage.png')); ?>" alt="">
    <h3>
        <?php the_content(); ?>
    </h3>
    <div class="tags">
        <?php the_tags('', '', ''); ?>
    </div>
</article>