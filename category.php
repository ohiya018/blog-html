<?php get_header(); ?>
<main>
    <div class="inner">
        <p class="archive-title">
            <!-- カテゴリー名 -->

            <?php if (is_category()): ?>
                <?php single_cat_title(); ?>の記事一覧
            <?php elseif (is_tag()): ?>
                <?php single_tag_title(); ?>の記事一覧
            <?php elseif (is_month()): ?>
                <?php the_time('Y年n月'); ?>の記事一覧
            <?php elseif (is_search()): ?>
                「<?php echo get_search_query(); ?>」の検索結果
            <?php else: ?>
                過去の記事一覧
            <?php endif; ?>
        </p>
    </div>

    <section class="Blog" id="blog">
        <!-- 記事一覧 -->
        <div class="inner">
            <div class="archives">
                <div class="posts">
                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            get_template_part('template-parts/post', 'loop');
                        endwhile; ?>
                </div>
            <?php
                        get_template_part('template-parts/posts', 'pages');
                    endif;
            ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>