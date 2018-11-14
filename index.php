<?php
get_header();
?>

<?php
// while ( have_posts() ) : the_post();
//             the_title();
//             the_content();
// endwhile;

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $products = wc_get_products( array( 'limit' => 6, ) );
                    $active = 'active';
                    foreach ($products as $product) {
                        ?>
                        <div class="carousel-item <?php echo $active ?>">
                            <img src="<?php echo get_the_post_thumbnail_url($product->get_id()) ?>" alt="">
                            <div class="text">
                                <h2><?php echo $product->get_title(); ?></h5>
                                <p>
                                    <?php echo $product->get_description(); ?>
                                </p>
                                <button>LEARN MORE</button>
                            </div>
                        </div>
                        <?php
                        $active = '';
                    }?>
                </div>
            </div>



        </div>

    </div>
    <nav>
        <ul>
            <?php
            $all_categories = get_categories( array	('taxonomy'=> 'product_cat','hide_empty'=> '0', 'exclude' =>'15'));
            // debug($all_categories);
            foreach ($all_categories as $cat) {?>
            <li><a href="<?php echo get_term_link($cat->term_id, 'product_cat'); ?>"><?php echo $cat->name; ?></a></li>
        <?php  } ?>
        <li>
            <a href="#">All products</a>
        </li>
        </ul>
    </nav>

    <div class="row">
        <?php
        $products = wc_get_products( array( 'limit' => 6, ) );
        foreach ($products as $product) {
            ?>
            <div class="col-md-4">
                <p>
                    <?php echo $product->get_image()?>
                </p>
                <h3><?php echo $product->get_name() ?></h3>
                <p>
                    <?php echo $product->get_price(); ?>€

                </p>
                <a href="<?php echo $product->get_permalink()?>">Voir plus</a>
            </div>
        <?php
        }
        ?>
    </div>
</div>


    <a href="#" class="show">SHOW ALL</a>

<?php
get_sidebar();
get_footer();
 ?>
