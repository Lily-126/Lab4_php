<?php

$items = [
    ['label' => 'Pencil',   'price' => 0.5],
    ['label' => 'Notebook', 'price' => 2.25],
    ['label' => 'Backpack', 'price' => 19.99],
];
$user = htmlspecialchars($_GET['user'] ?? 'guest', ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Mini Shop</title></head>
<body>
<h1>Hi, <?= $user ?></h1>
<ul>
    <?php foreach ($items as $it): ?>
        <li><?= htmlspecialchars($it['label']) ?> — $<?= number_format((float)$it['price'], 2) ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>