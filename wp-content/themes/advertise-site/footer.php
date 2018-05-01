<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage advertising Site
 * @since advertising Site 1.0
 */
?>

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

<?php wp_footer(); ?>
</body>
</html>
