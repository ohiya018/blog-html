<div class="pages">
    <div class="page">
        <?php
        # argument(引数)
        $arg = array(
            'prev_text' => '<',
            'next_text' => '>',
            'mid_size' => 1,
        );
        the_posts_pagination($arg);
        ?>
    </div>
</div>