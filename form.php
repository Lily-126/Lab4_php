<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Form</title></head>
<body>
<form method="post" action="form.php">
    <label>Name: <input name="name"></label>
    <button>Say Hi</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    echo "<p>Hello, {$name}</p>";
}
?>
</body>
</html>
