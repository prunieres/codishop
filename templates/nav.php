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
