<?php
require_once  getcwd() . '/inc/functions.php';

$page = page();

$page->addAsset('homepage', '
    <script type="text/javascript">
        
    </script>
');

if (strpos($page->currentPage(), 'portfolio_') !== false) {
    $page->addAsset('/js/portfolio.js');
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $page->title; ?></title>
        <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" />
        <meta name="keywords" content="<?php echo $page->metaKeywords; ?>"/>
        <meta name="description" content="<?php echo $page->metaDescription; ?>"/>

        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css" />

        <!-- ////////////////////////////////// -->
        <!-- //      Javascript Files        // -->
        <!-- ////////////////////////////////// -->
        <?php foreach($page->jsExternal() as $script => $scriptContent) : ?>
<script type="text/javascript" src="<?php echo $script; ?>"></script>
        <?php endforeach; ?>

        <!--[if IE 7]><link rel="stylesheet" type="text/css" href="/css/ie.css" /><![endif]-->
        <!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="/css/ie6.css" />
        <script type="text/javascript" src="/js/pngfix.js"></script>
        <script>
            DD_belatedPNG.fix('.topmenus ul li, #logo, #logo a, #design99, #submitBtn, a.buttonGray, a.buttonDarkBlue, img.pngfix, .feature_entry h3,  a#trigger_opener, a#toTop, #sitemap, #sitemap_bottom, .doubleround-top, .doubleround-bottom , .singleround, .singleround-top, .singleround-body');

            $(function() {
                $("ul.enhanceList > li").hover(function() {
                    $(this).addClass("hover");
                },function() {
                    $(this).removeClass("hover");
                });
            });
        </script>
        <![endif]-->
    </head>
    <body class="<?php echo $page->bodyClass(); ?>">
        <div id="color_line"></div>

        <?php component('header'); ?>

        <div id="page" class="<?php echo $page->pageClass(); ?>">
            <div id="page_container" class="page_container">
                <div id="page_container_wrapper" class="page_container_wrapper">
                    <div id="logo_container">
                        <div class="wrapper">
                            <div class="container">
                                <div id="logo"><a href="/" title="Crea8ivedesign.com"><span>Crea8ivedesign.com</span></a></div>
                                <div id="social_icons">
                                    <div id="social_icons_inner">
                                        <a href="http://www.facebook.com/group.php?gid=151300674901322&amp;v=wall"><img src="/img/icon_facebook.jpg" alt="crea8ivedesign on facebook"></a>
                                        <a href="http://twitter.com/crea8ivedesign"><img src="/img/icon_twitter.jpg" alt="fallow us on twitter"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ie-spacer"></div>
                    <div class="wrapper">
                        <div class="container">

                            <a name="top" id="top"></a>

                            <!-- page -->
                            <?php $page->display(); ?>
                            <!-- end of page -->

                            <div class="clear"></div>

                        </div>
                    </div><!-- end of .wrapper -->
                </div><!-- end of .page_container_wrapper -->
            </div><!-- end of .container -->
        </div><!-- end of .page -->

        <?php foreach($page->jsInline() as $scriptContent) : ?>
        <?php echo $scriptContent; ?>
        <?php endforeach; ?>

        <?php component('footer'); ?>

    </body>
</html>
