<?php
$lang = explode('/', trim($_SERVER['REQUEST_URI'], '/'))[0] ?? 'hu';
$page = $page ?? 'home';

$L = require __DIR__ . "/../lang/$lang.php";

$title = $L["$page.title"] ?? $L['site.name'];
$desc  = $L["$page.desc"]  ?? '';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="utf-8">
  <title><?= $title ?></title>
  <meta name="description" content="<?= $desc ?>">

  <link rel="alternate" hreflang="hu" href="/hu/<?= $page ?>.php">
  <link rel="alternate" hreflang="en" href="/en/<?= $page ?>.php">

  <style>
    body { font-family: sans-serif; padding: 40px; }
    nav a { margin-right: 10px; text-decoration: none; }
    .lang a.active { font-weight: bold; text-decoration: underline; }
  </style>
</head>
<body>
