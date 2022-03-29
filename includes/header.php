<?php wp_body_open(); ?>

<header class="ly_header">
    <div class="ly_header_inner">
        <!-- ここに書いてください -->
        <a href='#' class="ly_headerLogo">yamachan</a>

        <nav class="bl_nav">
            <ul class="bl_navList">
                <li>
                    <a href="#" class="bl_navLink">
                        <span>about</span><span>自己紹介</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="bl_navLink">
                        <span>works</span><span>制作物一覧</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="bl_navLink">
                        <span>service</span><span>サービス</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_template_directory_uri(); ?>/contact.php" class="bl_navLink">
                        <span>contact</span><span>お問い合わせ</span>
                    </a>
                </li>

            </ul><!-- /.bl_navList -->
        </nav>

        <div class="el_hamburger" id="hamburger">
            <span class="el_hamburgerBar"></span>
            <span class="el_hamburgerBar"></span>
            <span class="el_hamburgerBar"></span>
        </div>
    </div><!-- /.ly_header_inner -->
</header>