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
            <h3 class="text-center">Signup</h3>

            <div class="tabs" id="tabs1">
                <div class="tabs__nav" data-tabs-for="#tabs1" role="tablist">
                    <a class="tabs__nav-item  active" href="#individual" role="tab">Individual</a>
                    <a class="tabs__nav-item" href="#entity" role="tab">Entity</a>
                </div>
                <div class="tabs__content">
                    <div class="tabs__item  active" id="individual" role="tabpanel">
                        <form action="/" method="post">
                            <div class="form__group">
                                <input class="input" type="text" name="ind_firstname" id="ind_firstname" placeholder="First Name">
                            </div>
                            <div class="form__group">
                                <input class="input" type="text" name="ind_secondname" id="ind_secondname" placeholder="Second Name">
                            </div>
                            <div class="form__group">
                                <input class="input" type="email" name="ind_email" id="ind_email" placeholder="Email">
                            </div>
                            <div class="form__group">
                                <input class="input" type="tel" name="ind_phone" id="ind_phone" placeholder="Phone number">
                            </div>
                            <div class="form__group">
                                <div class="select">
                                    <select name="ind_country" id="ind_country">
                                        <option value="0" selected disabled>Country</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form__group">
                                <input class="input" type="password" name="ind_password" id="ind_password" placeholder="Password">
                            </div>
                            <div class="form__group">
                                <input class="input" type="password" name="ind_confirm_password" id="ind_confirm_password" placeholder="Confirm Password">
                            </div>
                            <div class="form__group">
                                <button class="btn  btn--red  btn--full" type="submit">Signup</button>
                                <div class="form__hint  text-center">By registering you agree with our <a href="#rules_modal" data-toggle="modal">rules &amp; conditions</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="tabs__item" id="entity" role="tabpanel">
                        <form action="/" method="post">
                            <div class="form__group">
                                <input class="input" type="text" name="ent_firstname" id="ent_firstname" placeholder="First Name">
                            </div>
                            <div class="form__group">
                                <input class="input" type="text" name="ent_secondname" id="ent_secondname" placeholder="Second Name">
                            </div>
                            <div class="form__group">
                                <input class="input" type="email" name="ent_email" id="ent_email" placeholder="Email">
                            </div>
                            <div class="form__group">
                                <input class="input" type="tel" name="ent_phone" id="ent_phone" placeholder="Phone number">
                            </div>
                            <div class="form__group">
                                <div class="select">
                                    <select name="ent_country" id="ent_country">
                                        <option value="0" selected disabled>Country</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form__group">
                                <input class="input" type="text" name="ent_company" id="ent_company" placeholder="Company name">
                            </div>
                            <div class="form__group">
                                <input class="input" type="text" name="ent_address" id="ent_address" placeholder="Address">
                            </div>
                            <div class="form__group">
                                <input class="input" type="text" name="ent_zip" id="ent_zip" placeholder="ZIP code">
                            </div>
                            <div class="form__group">
                                <input class="input" type="text" name="ent_vat" id="ent_vat" placeholder="VAT number">
                            </div>
                            <div class="form__group">
                                <input class="input" type="password" name="ent_password" id="ent_password" placeholder="Password">
                            </div>
                            <div class="form__group">
                                <input class="input" type="password" name="ent_confirm_password" id="ent_confirm_password" placeholder="Confirm Password">
                            </div>
                            <div class="form__group">
                                <button class="btn  btn--red  btn--full" type="submit">Signup</button>
                                <div class="form__hint  text-center">By registering you agree with our <a href="#rules_modal" data-toggle="modal">rules &amp; conditions</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.tab -->
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



<!-- Rules modal -->
<div class="remodal" id="rules_modal" role="dialog">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h3>Rules &amp; conditions</h3>
    <ul class="list">
        <li class="list__item">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
        <li class="list__item">Eaque quibusdam facilis explicabo autem aut voluptas omnis consequatur ad sit quod praesentium, hic laudantium assumenda reiciendis asperiores iure unde temporibus consectetur.</li>
        <li class="list__item">Lorem ipsum dolor sit amet hic laudantium assumenda reiciendis asperiores iure unde temporibus consectetur.</li>
        <li class="list__item">Lorem ipsum dolor sit amet hic laudantium assumenda reiciendis asperiores iure unde temporibus consectetur.</li>
        <li class="list__item">Lorem ipsum dolor sit amet hic laudantium assumenda reiciendis asperiores iure unde temporibus consectetur.</li>
    </ul>
    <br>
    <button data-remodal-action="cancel" class="btn  btn--green">Close</button>
</div>


<!-- JS -->
<!-- JS -->
<script src="assets/js/main.js"></script>

</body>
</html>