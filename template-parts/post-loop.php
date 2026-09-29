<article class="is-new">
    <span class="new">NEW</span>
    <div class="thumbnail">
        <?php
        if (has_post_thumbnail()):
            the_post_thumbnail('thumbnail');
        else:
        ?>
            <img src="<?php echo esc_url(get_theme_file_uri('/images/blogImage.png')); ?>" alt="">
        <?php endif; ?>
    </div>
    <h3><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></h3>
    <p class="post-date">
        <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
            <?php echo the_date('Y年n月j日'); ?>
        </time>
    </p>
    <div class="tags">
        <?php the_tags('', '', ''); ?>
    </div>
</article>