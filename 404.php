    <?php get_header(); ?>
    <main>
        <div class="contents">
            <div class="post-all">
                <h2>404 Not Found</h2>
                <p>お探しのページは見つかりませんでした。<br>URLが間違っているか、ページが移動または削除された可能性があります。</p>
                <p><a href="<?php echo esc_url(home_url('/')); ?>">トップページへ戻る</a></p>
                <div class="nav-page">
                    <ul>
                        <li><?php previous_post_link('%link', '←prev'); ?></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">一覧に戻る</a></li>
                        <li><?php next_post_link('%link', 'next→'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>