<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Header</h1>
<?php
if (isset($text)) :?>
    <?php foreach ($text as $item): ?>
        <h2><a href="index.php?id="<?= $item['id']; ?>"><?= $item['title'] ?></a></h2>
        <p><?= $item['description'] ?></p>
    <?php endforeach; ?>
<?php endif; ?>
<h6>Footer</h6>
</body>
</html>
