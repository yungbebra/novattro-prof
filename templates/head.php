<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#009f79">
    <title><?= e($title) ?> — Novattro PROF</title>
    <meta name="description" content="<?= e($description) ?>">
    <meta property="og:title" content="<?= e($title) ?> — Novattro PROF">
    <meta property="og:description" content="<?= e($description) ?>">
    <meta property="og:type" content="website">
    <link rel="icon" href="<?= e(url('src/icons/favicon.svg')) ?>" type="image/svg+xml">
    <link rel="preload" href="<?= e(url('src/fonts/montserrat-cyrillic.woff2')) ?>" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= e(url('src/fonts/montserrat-latin.woff2')) ?>" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="<?= e(url('css/main.css')) ?>">
    <script src="<?= e(url('js/main.js')) ?>" defer></script>
</head>
<body>
<a class="skip-link" href="#main">Перейти к содержанию</a>
