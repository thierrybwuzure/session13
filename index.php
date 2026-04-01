<?php include 'database.php'; ?>

<main class="container">
    <?php

    var_dump($_GET);
    if (empty($_GET["detail"])) {
        $page = 'catalog';
    } else {
        $page = 'detail';
    }

    include $page . '.php';
    ?>
</main>