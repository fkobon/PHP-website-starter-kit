<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title ?? getenv('app.meta.title') ?></title>
<?php
echo load_meta_tags($metaTags ?? []);
?>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script src="/js/index.js"></script>
</head>
<body>
