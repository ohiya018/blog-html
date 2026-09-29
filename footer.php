<footer>
    <div class="inner">
        <h2><img src="<?php echo esc_url(get_theme_file_uri('/images/footerLogo.png')); ?>" alt=""></h2>
        <article>
            <nav class="fnav">
                <ul class="nav1">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
                    <li><a href="<?php echo esc_url(home_url('/archive/')); ?>">Archive</a></li>
                </ul>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/profile/')); ?>">Profile</a></li>
                    <li><a href="<?php echo esc_url(home_url('/category/')); ?>">Category</a></li>
                </ul>
            </nav>
            <p>Ⓒ Ohiya - Theme by Yuito Imaizumi</p>
        </article>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>