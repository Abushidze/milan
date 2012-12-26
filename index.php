<!-- пока пишу разметку -- все в индексе без дополнительных шаблонов. Просто разобьем на дивы и зададим 
стили областям страницы -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
       
        <!--Все для WP-->
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/html" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_get_archives('type=monthly&format=link'); ?>
        <?php // comments_popup_script(); // по умолчанию выключен ?>
        <?php wp_head(); ?>

        <title>Малышковые откровения</title>
    </head>
    <body>
        <div id="outer">

            <div id="wrap" class="group">


                <div id="header" class="radiusblock">
                    <a href="#"><h1>Дневник маленького проказника</h1></a> <!-- проставить ссылку -->

                </div> <!-- header -->


                <div id="container" class="radiusblock">

                </div><!-- container -->

                <div id="sidebar" class="radiusblock">

                </div><!-- sidebar -->  
                
                <!-- div для прижатия footer вниз -->
                <div id="footerpalce">

                </div> <!-- footerpalce -->

            </div> <!-- wrap -->
            <div id="footer" class="radiusblock">

            </div> <!-- footer -->
        </div> <!-- outer -->

        <!--    ~~~     -->
    </body>
</html>