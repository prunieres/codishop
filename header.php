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
            <?php get_template_part( 'templates/nav' );  ?></header>

<?php
// wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
?>
