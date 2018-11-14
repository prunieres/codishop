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
