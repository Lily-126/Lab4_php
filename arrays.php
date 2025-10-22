<?php
$colors = ['red','green','blue'];
$user = ['name' => 'Aisha', 'role' => 'editor'];
?>
<!DOCTYPE html>
<ul>
    <?php foreach ($colors as $c): ?>
        <li><?= htmlspecialchars($c) ?></li>
    <?php endforeach; ?>
</ul>

<table border="1" cellpadding="6">
    <?php foreach ($user as $k => $v): ?>
        <tr><th><?= htmlspecialchars($k) ?></th><td><?= htmlspecialchars($v) ?></td></tr>
    <?php endforeach; ?>
</table>
