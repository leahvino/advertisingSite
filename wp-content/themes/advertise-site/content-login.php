<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.min.css">

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
                            <ul class="navbar__nav  navbar__nav--left" role="menubar">
                                <li class="navbar__item" role="menuitem">
                                    <a class="navbar__link" href="add_ads.html" itemprop="url">add new advert</a>
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
                                    <a class="navbar__link" href="login.html">Login</a>
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


    <!-- Content -->
    <main class="content  container">

        <div class="login">
            <form action="/" method="post">
                <div class="form__group">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="form__group">
                    <input class="input" type="text" name="email_phone" id="email_phone" placeholder="Email or phone number">
                </div>
                <div class="form__group">
                    <input class="input" type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="form__group">
                    <button class="btn  btn--red  btn--full" type="submit">Log in</button>
                </div>
                <div class="form__group text-center">
                    <div class="checkbox">
                        <input class="checkbox__input" type="checkbox" name="checkbox_4" id="checkbox_4" checked>
                        <label class="checkbox__label" for="checkbox_4">
                            Remember me
                        </label>
                    </div>
                </div>
                <div class="form__group text-center">
                    <a href="recover.html">Forgot password</a>
                </div>
            </form>
        </div><!-- /.login -->

    </main><!-- /.container -->


    <!-- Footer -->
    <footer class="footer" itemscope itemtype="http://schema.org/WPFooter">
        <div class="container">
    
            <ul class="footer__list footer__list--inline">
                <li class="footer__list-item">
                    <a href="rules.html">Rules &amp; conditions</a>
                </li>
                <li class="footer__list-item">
                    <a href="faq.html">FAQ</a>
                </li>
                <li class="footer__list-item">
                    <a href="contacts.html">Contact Us</a>
                </li>
                <li class="footer__list-item">
                    &copy; 2016 AdsDashboard.com
                </li>
            </ul>
    
        </div>
    </footer>

</div><!-- /.page -->


<!-- JS -->
<!-- JS -->
<script src="assets/js/main.js"></script>

</body>
</html>