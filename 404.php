    <?php get_header(); ?>
    <main>
        <div class="inner">
            <div class="contents">
                <div class="post-all">
                    <h1 class="post-title">404 Not Found</h1>
                    <p>
                        お探しのページは見つかりませんでした。<br>
                        URLが間違っているか、ページが移動または削除された可能性があります。<br>
                        また、制作者がこのページをまだ作成してないことがございます。その場合、更新を待っていただければ幸いです。
                    </p>
                    <p class="backtoppage"><a href="<?php echo esc_url(home_url('/')); ?>">トップページへ戻る</a></p>
                    <div class="nav-page">
                        <ul>
                            <li><?php previous_post_link('%link', '←prev'); ?></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">一覧に戻る</a></li>
                            <li><?php next_post_link('%link', 'next→'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>