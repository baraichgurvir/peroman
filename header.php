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
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
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
            margin-right: 25px;
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
            position: fixed;
            top: 75px;
            left: 0;
            right: 0;
            z-index: 998;
            border-radius: 0 !important;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            background: #2f3640;
        }

        .jumbotron h1,
        .jumbotron h4{
            width: 100%;
            text-align: center !important;
        }

        .containerBox {
            margin-top: 295px;
            width: 100%;
            height: 100%;
            background: #34495e;
        }

        .container {
            padding: 3em;
            color: #ffffff;
        }

        .container a {
            color: #ffffff;;
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
    <h4><?php bloginfo('description') ?>.</h4>
</div>
<div class="containerBox">
    <div class="container">
