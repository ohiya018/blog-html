<?php
// パスワード保護されている記事の場合は何も表示せずに終了する
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php
    $args = array(
        'title_reply' => 'コメント欄',
        'logged_in_as' => '',
        'comment_notes_before' => '',
        'comment_notes_after'  => '',
        'fields' => array(
            'author' =>
            '<p class="comment-form-author"><label for="author">Name</label><input id="author" name="author" type="text" value="" autocomplete="name"></p>',
            'email' =>
            '<p class="comment-form-email"><label for="email">Email Address</label><input id="email" name="email" type="email" value="" aria-describedby="email-notes" autocomplete="email"></p>',
            'url' =>
            '',
            'cookies' => '',
        ),
        'comment_field' =>
        '<p class="comment-form-comment"><label for="comment">Comment</label><textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea></p>',
        'submit_button' =>
        '<input name="submit" type="submit" id="submit" class="submit" value="Submit">',
    );

    comment_form($args);
    ?>

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">コメント一覧</h2>

        <!-- コメント一覧の出力 -->
        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',    // olタグでリストを出力
                'short_ping'  => true,    // ピンバックとトラックバックを短く表示
                'avatar_size' => 50,      // アバター画像のサイズ
            ));
            ?>
        </ol>
    <?php endif; ?>

</div>