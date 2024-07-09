<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo the_title(); ?></title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/styles/global.css">
</head>

<body <?php body_class() ?>>
    <?php wp_body_open() ?>

    <header>
        <div class="flex items-center justify-between md:px-28 px-5 py-4 md:gap-0 gap-20">
            <figure>
                <a href="/">
                    <img width="180" class="md:w-[180px] w-[100px]" src="<?php echo get_template_directory_uri() ?>/media/oxford-logo.png" alt="">
                </a>
                <figcaption></figcaption>
            </figure>
            <figure>
                <a href="/">
                    <img class="md:w-[120px] w-[80px]" src="<?php echo get_template_directory_uri() ?>/media/logo.jpg" alt="">
                </a>
                <figcaption></figcaption>
            </figure>
        </div>
    </header>

    <main>