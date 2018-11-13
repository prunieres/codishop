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

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $products = wc_get_products( array( 'limit' => 6, ) );
                    $active = 'active';
                    foreach ($products as $product) {
                        ?>
                        <div class="carousel-item <?php echo $active ?>">
                            <img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url($product->get_id()) ?>" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php the_title(); ?></h5>
                            </div>
                        </div>
                        <?php
                        $active = '';
                    }?>
                </div>
            </div>
        </header>



        <?php
        // $query = new WC_Product_Query( array('limit' => 2,) );
        // $products = $query->get_products();
        // foreach ($products as $product) {
        // }
        ?>

    </div>
    <!-- container -->
