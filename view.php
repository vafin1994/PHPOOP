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
        <h2><?=$text['title'] ?></h2>
        <p><?= $text['text'] ?></p>
<?php endif; ?>
<h6>Footer</h6>
</body>
</html>
