<?php include 'database.php'; ?>
<?php include 'top.html'; ?>

<main class="container">
    <?php

    var_dump($_GET);
    if (empty($_GET["categorie"])) {
        $category = 'home';
    } else {
        $category = $_GET["categorie"];
    }

    include $category . '.php';
    ?>
</main>

<?php include 'bottom.html'; ?>