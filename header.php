<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Woo Zero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
</head>
<body>
    <div class="container-fluid">
        <header>
            <nav>
                <h1>CODISHOP</h1>
                <ul>
                    <?php
                    $pages = get_pages(['include' => ['14','42','47','45']]);
                    foreach ($pages as $page) {
                        ?>
                        <li>
                            <a href="<?php echo $page->guid ?>"><?php echo $page->post_title ?></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <div class="fa-header">
                    <i class="far fa-user"></i>
                    <i class="fas fa-shopping-bag"></i>
                    <i class="fas fa-search"></i>
                </div>
            </nav>
            <div class="slider">
                <div class="image">

                </div>
                <div class="block-text">
                    <h5>A beautiful little wooden table</h5>
                    <p>Single, Clean and Easy to Use. Made in france </p>
                    <button type="button" name="button">LEARN MORE</button>
                </div>
            </div>
        </header>

        <nav class="second">
            <ul>
                <?php
                $pages = get_pages(['include' => ['14','42','47','45']]);
                foreach ($pages as $page) {
                    ?>
                    <li>
                        <a href="<?php echo $page->guid ?>"><?php echo $page->post_title ?></a>
                    </li>
                    <?php
                }
                ?>
            </ul>

        </nav>
    </div>
