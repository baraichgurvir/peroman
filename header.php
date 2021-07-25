<html>
<head lang="en">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php wp_head() ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .PeromanTopbarNavigation {
            width: 100%;
            height: auto;
            max-height: 71px;
            z-index: 999 !important;
        }

        .PeromanTopbarNavigation ul {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            background: #2d3436;
            width: 100%;
            height: 75px;
            list-style: none;
        }

        .PeromanTopbarNavigation ul li {
            margin-left: 25px;
        }

        .PeromanTopbarNavigation ul li a {
            color: #fff;
            padding: 10px;
            text-decoration: none;
            transition: 0.5ms;
            border-radius: 5px;
        }

        .PeromanTopbarNavigation ul li a:hover {
            background: #fff;
            color: #2d3436;
        }

        .jumbotron {
            border-radius: none !important;
        }
    </style>
    <title><?php bloginfo('name') ?></title>
</head>

<body>
<?php  wp_nav_menu( array(
    'theme_location' => 'Peroman_Top_Menu',
    'container_class' => 'PeromanTopbarNavigation' ) ); ?>

<div id="peroman_header" class="jumbotron">
    <h1><?php bloginfo('name') ?></h1>
    <p><?php bloginfo('description') ?>.</p>
</div>
<div class="container">