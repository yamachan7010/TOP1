<?php wp_body_open(); ?>

<div class="loading">
    <div class="animation"></div>
</div>

<header class="ly_header" id="header">
    <div class="ly_header_inner">
        <!-- ここに書いてください -->
        <a href='<?php echo home_url(); ?>' class="ly_headerLogo">yamachan</a>

        <div id="nav-wrapper" class="nav-wrapper">

            <div class="el_hamburger" id="js-hamburger">
                <span class="el_hamburgerBar"></span>
                <span class="el_hamburgerBar"></span>
                <span class="el_hamburgerBar"></span>
                <span class="el_hamburger_label">MENU</span>
            </div>

            <nav class="bl_nav">
                <ul class="bl_navList">
                    <li>
                        <a href="<?php echo home_url(); ?>#about" class="bl_navLink">
                            <span>about</span><span>自己紹介</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>#works" class="bl_navLink">
                            <span>works</span><span>制作物一覧</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>#service" class="bl_navLink">
                            <span>service</span><span>サービス</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/contact/" class="bl_navLink">
                            <span>contact</span><span>お問い合わせ</span>
                        </a>
                    </li>

                </ul><!-- /.bl_navList -->
            </nav>

        </div>
    </div><!-- /.ly_header_inner -->
</header>