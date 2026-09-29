    <?php get_header(); ?>
    <main>
        <section class="mainvisual">
            <div class="bubble-area"></div>
            <div class="lead">
                <p class="big">Ohiya Blog</p>
                <p>~Where Ideas Flow~</p>
            </div>
            <a href="#blog" class="scroll">
                <span>Scroll</span>
                <span class="arrow">↓</span>
            </a>
        </section>

        <section class="Blog" id="blog">
            <div class="inner">
                <div class="archives">
                    <h2>Latest Archive</h2>
                    <div class="posts">
                        <?php
                        if (have_posts()):
                            while (have_posts()):
                                the_post();
                                get_template_part('template-parts/post', 'loop');
                            endwhile;
                        else:
                            get_template_part('template-parts/loop', 'not');
                        endif;
                        ?>
                    </div>
                    <?php get_template_part('template-parts/posts', 'pages'); ?>
                    <div class="pages">
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>">View more →</a>
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </section>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="pagetop">↑</a>
    </main>
    <?php get_footer(); ?>