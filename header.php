<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php wp_title();?></title>
    <meta name="viewport" content="width=device-width" />
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <div class="container">
        <div class="sidebar">
            <div class="header">
                <?php the_custom_logo();?>
                <h1 class="title"><?php echo get_bloginfo("name");?></h1>
            </div>
            <div class="nav">
                <?php wp_nav_menu(
                    array(
                        "theme_location" => "main-menu",
                    ),
                );?>
            </div>
            <a class="hide-nav" href="#">&nbsp;X&nbsp;</a>
            <div class="foot">
                <?php
                    if(is_active_sidebar('footer-area')) {
                        dynamic_sidebar('footer-area');
                    }
                ?>
            </div>
        </div>
        <div class="main">