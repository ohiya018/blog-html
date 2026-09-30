<div class="about">
    <div class="profile">
        <h3><a href="<?php echo esc_url(home_url('/profile/')); ?>">Profile</a></h3>
        <img src="<?php echo esc_url(get_theme_file_uri('/images/profile.png')); ?>" alt="">
        <h4>今泉 結斗</h4>
        <p class="profile-lead">＜一言メモ＞</p>
        <p class="profile-text">
            最近はどうしたら気持ちよく寝れるか模索している
        </p>
        <div class="sns">
            <a href="https://x.com/ohiya_memory" target="_blank" rel="noopener noreferrer"
                aria-label="X"><img src="<?php echo esc_url(get_theme_file_uri('/images/logo-white.png')); ?>" alt=""></a>
            <a href="https://www.instagram.com/gazelle.5779539?stkn=MTY0bWpwaGVlajNsNg=="
                target="_blank" rel="noopener noreferrer" aria-label="Instagram"><img
                    src="<?php echo esc_url(get_theme_file_uri('/images/Instagram_Glyph_White.png')); ?>" alt=""></a>
        </div>
    </div>

    <div class="searchform">
        <aside class="side-search">
            <h2 class="side-title">Search</h2>
            <?php get_search_form(); ?>
        </aside>
    </div>

    <div class="categorys">
        <h3>Category</h3>
        <ul>
            <?php
            $arg = array(
                'title_li' => '',
                'show_count' => 1
            );
            wp_list_categories($arg);
            ?>
        </ul>
    </div>
    <div class="archivement">
        <h3>
            Archive</h3>
        <ul>
            <?php
            $arg = array(
                'show_post_count' => 1
            );
            wp_get_archives($arg);
            ?>
        </ul>
    </div>
</div>