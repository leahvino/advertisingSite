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


    <!-- Content -->
    <main class="content  container">

        <div class="balance">
            <form action="/" method="post">
                <div class="form__group text-center">
                    <h3>Your Balance: $20</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="form__group">
                    <input class="input" type="text" name="email_phone" id="email_phone" placeholder="Add funds">
                </div>
                <div class="form__group">
                    <button class="btn  btn--red  btn--full" type="submit">Go to checkout</button>
                </div>
            </form>
        </div><!-- /.balance -->

        <h3>Payments history</h3>

        <div class="table__wrapper">
            <table class="table  sortable" data-sortable>
                <thead>
                    <tr>
                        <th data-sorted="true" data-sorted-direction="descending">№</th>
                        <th data-sortable="false">Operation</th>
                        <th>Sum</th>
                        <th>Date</th>
                        <th class="actions" data-sortable="false">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Deposit</td>
                        <td class="text-green">+$10</td>
                        <td>10.12.2016</td>
                        <td class="actions">
                            <button class="btn  btn--xs  btn--green">Save PDF</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>New add</td>
                        <td class="text-red">-$5</td>
                        <td>20.12.2016</td>
                        <td class="actions">
                            <button class="btn  btn--xs  btn--green">Save PDF</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>New banner</td>
                        <td class="text-red">-$3</td>
                        <td>25.12.2016</td>
                        <td class="actions">
                            <button class="btn  btn--xs  btn--green">Save PDF</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="pagination">
                <a href="#" class="pagination__item  pagination__item--disabled" aria-label="Previous"><i class="fa fa-angle-double-left"></i></a>
                <a href="#" class="pagination__item  pagination__item--current">1</a>
                <a href="#" class="pagination__item">2</a>
                <a href="#" class="pagination__item">3</a>
                <a href="#" class="pagination__item" aria-label="Next"><i class="fa fa-angle-double-right"></i></a>
            </div>
        </div><!-- /.table__wrapper -->

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



<!-- Modals -->
<div class="remodal" id="logout_modal" role="dialog">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h3 class="remodal__title">Logout?</h3>
    <div class="remodal__text">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>

    <button data-remodal-action="cancel" class="btn  btn--deep-orange">Cancel</button>
    <button data-remodal-action="confirm" class="btn  btn--green">OK</button>
</div>




<!-- JS -->
<!-- JS -->
<script src="assets/js/main.js"></script>

</body>
</html>