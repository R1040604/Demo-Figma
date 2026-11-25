<?php
require_once __DIR__ . '/classes/Shape.php';

$shape = new Shape('red', 20, 30);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figma</title>
    <style>
        .shape {
            position: absolute;
            left: <?= $shape->getX() ?>px;
            top: <?= $shape->getY() ?>px;
            width: 100px;
            height: 100px;
            background-color: <?= htmlspecialchars($shape->getColor(), ENT_QUOTES, 'UTF-8') ?>;
        }
    </style>
</head>
<body>
    <div class="shape"></div>
</body>
</html>