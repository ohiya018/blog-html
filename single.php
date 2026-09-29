    <?php get_header(); ?>
    <main>
        <div class="single-inner">
            <section class="Blog" id="blog">

                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        get_template_part('template-parts/single', 'post');
                    endwhile; ?>

                    <div class="post-comments">
                        <?php
                        // コメントが開いているか、コメントが1件以上ある場合に表示
                        if (comments_open() || get_comments_number()):
                            comments_template();
                        endif;
                        ?>
                    </div>
                <?php
                    get_template_part('template-parts/related', 'post');
                    get_template_part('template-parts/nav', 'single');
                else:
                    get_template_part('template-parts/loop', 'not');
                endif;
                ?>
            </section>
            <a href="#" class="pagetop">↑</a>
        </div>
    </main>
    <?php get_footer(); ?>