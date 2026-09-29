<article id="post-<?php the_ID(); ?> <?php post_class('post'); ?>">
    <h1 class="post-title"><?php the_title(); ?></h1>
    <p class="post-date">
        <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
            公開日: <?php the_time('Y.m.d'); ?> / <?php echo do_shortcode('[rt_reading_time]'); ?> min read
        </time>
    </p>
    <div class="thumbnail">
        <?php
        if (has_post_thumbnail()):
            the_post_thumbnail('large');
        else:
        ?>
            <img src="<?php echo esc_url(get_theme_file_uri('/images/blogImage.png')); ?>" alt="">
        <?php
        endif;
        ?>
    </div>
    <div class="post-contents">
        <?php the_content(); ?>
    </div>
    <div class="post-info">
        <ul>
            <li class="post-category">Category: <?php the_category(' / '); ?></li>
            <li class="post-tag">Tag: <?php the_tags('', ' / '); ?></li>
        </ul>
    </div>
</article>