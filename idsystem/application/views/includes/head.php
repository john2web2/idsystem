<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CI Template</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome Icons -->
    <!-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> -->
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- google icons -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" /> -->
    <!-- CSS Files -->
    <link href="<?= base_url() ?>/assets/assets/node_modules/material-dashboard/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <!-- GLOBAL CSS -->
    <link href="<?= base_url() ?>/assets/global/css/global.css" rel="stylesheet" />
</head>

<body>
    <?php
    __load_assets__($__assets__, 'css');
    ?>