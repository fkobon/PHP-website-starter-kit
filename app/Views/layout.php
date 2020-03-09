<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title ?? getenv('app.meta.title') ?></title>
<?= load_meta_tags($metaTags ?? []) ?>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script src="/js/index.js"></script>
</head>
<body>


<?= $this->renderSection('main') ?>


<?php if(getenv('CI_ENVIRONMENT') == 'development'): ?>
<!-- BrowserSync -->
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>
<?php endif; ?>
</body>
</html>