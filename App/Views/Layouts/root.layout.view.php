<?php
/** @var string $contentHTML */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fitness denník</title>
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
</head>
<body>
<input type="checkbox" id="menu-toggle" aria-label="Zobraziť menu">

<header>
    <div>
        <label for="menu-toggle" class="hamburger">☰</label>
        <span class="logo"></span>
        <b>Fitness denník</b>
    </div>
    <div>Matúš <button type="button">Odhlásiť</button></div>
</header>

<div class="layout">
    <nav aria-label="Hlavná navigácia">
        <ul>
            <li><a href="<?= $link->url('home.index') ?>">Dashboard</a></li>
            <li><a href="<?= $link->url('workout.index') ?>">Tréning</a></li>
            <li><a href="#">Jedálniček</a></li>
            <li><a href="#">Katalóg cvikov</a></li>
            <li><a href="#">Merania a progres</a></li>
            <li><a href="#">Klienti</a></li>
            <li><a href="#">Admin</a></li>
        </ul>
    </nav>

    <main>
        <?= $contentHTML ?>
    </main>
</div>

<footer>© 2026 Matúš Motyka</footer>
</body>
</html>