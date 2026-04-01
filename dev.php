<h1>DEV</h1>


<?php
$sql = 'SELECT item.slug, item.label, category.slug as category_slug FROM item JOIN category ON category.id = item.category_id;';
$stmt = $pdo->query($sql);
echo '<section>';
while ($row = $stmt->fetch()) {
    // var_dump($row);
    echo '<article class="' . $row['category_slug'] . '"><a href="index.php?item=' . $row['slug'] . '">' . $row['label'] . '</a></article>';
}
echo '</section>';

?>