<?php
get_header();
?>
<div class="nav-catalog">
    <?php
    get_template_part( 'templates/nav' );
    ?>
</div>

<?php
woocommerce_content();
?>

    <a href="#" class="show">SHOW ALL</a>
<?php
get_footer();
 ?>
