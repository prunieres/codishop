<!DOCTYPE html>
<html lang="fr">
<?php
function debug($array){
     echo '<pre>';
     print_r($array);
     echo  '</pre>';
 }
 ?>

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
                    $pages = get_pages(array('sort_order' => 'asc','post_type' => 'page','exclude'=>[14,19,21,2,42]));
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


        </header>

<?php
// wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
?>
