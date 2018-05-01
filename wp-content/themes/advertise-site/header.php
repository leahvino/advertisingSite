<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">	  
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow, noodp">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons for all devices -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/i/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/i/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/i/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="assets/i/favicons/manifest.json">
    <meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
    <title>Light Ads Dashboard</title>
</head>
<body>


<div class="page">

    <!-- Header -->
    <header class="header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="container">
    
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                        <a class="navbar__toggle" href="#" id="js-nav-burger">
                            <span></span>
                        </a>
                        <a class="logo" href="index.html">
                            <img class="img" src="assets/i/ads-logo.jpg" width="80" height="35" alt="Ads Dashboard">
                        </a>
                        <div class="navbar__wrapper" id="js-nav">
                            <div class="header__profile">
                                <div class="header__profile-item"><a href="balance.html"><i class="fa fa-credit-card"></i>Balance: $20</a></div>
                                <div class="header__profile-item"><a href="profile.html"><i class="fa fa-user"></i>Simon Smith</a></div>
                            </div>
    
                            <ul class="navbar__nav  navbar__nav--left" role="menubar">
                                <li class="navbar__item" role="menuitem">
                                    <a class="navbar__link" href="add_ads.html" itemprop="url">add new advert</a>
                                </li>
                                <li class="navbar__item" role="menuitem">
                                    <a class="navbar__link" href="my_ads.html" itemprop="url">My ads</a>
                                </li>
                                <li class="navbar__item" role="menuitem">
                                    <a class="navbar__link" href="banner_list.html" itemprop="url">My banners</a>
                                </li>
                                <li class="navbar__item" role="menuitem">
                                    <a class="navbar__link" href="search.html" itemprop="url">Extend Search</a>
                                </li>
                                <li class="navbar__item" role="menuitem">
                                    <a class="navbar__link" href="pages.html" itemprop="url">Pages</a>
                                </li>
                            </ul>
                            <ul class="navbar__nav  navbar__nav--right" role="menubar">
                                <li class="navbar__item" role="menuitem">
                                    <a class="navbar__link" href="#" data-toggle="modal" data-target="#logout_modal" role="button">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                </div>
            </div><!-- /.row -->
    
        </div><!-- /.container -->
    
        <div class="header__intro">
            <form class="header__search" action="/" method="post">
                <input class="input" type="text" placeholder="Keyword + enter">
                <button class="btn  btn--red" type="submit">Search</button>
            </form>
        </div>
    </header><!-- /.header -->
