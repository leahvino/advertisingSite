<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<div class="page">
<?php get_header(); ?>   
    <!-- Content -->	
    <main class="content  container">
        <div class="row">
            <div class="col-lg-10  col-md-8">
                <div class="breadcrumbs">
				<?php echo(types_render_field( 'evacuation',array()));?>
                    <a href="index.html" class="breadcrumbs__item">Home</a>
                    <a href="subcat.html" class="breadcrumbs__item">Cars</a>
                    <span class="breadcrumbs__item  current">BMW</span>
                </div>
            </div>        
        </div>

          <div class="col-lg-4">
                <div class="ads__info">
                    <div class="table__wrapper">
                        <table class="table  table--separate-cols">
                            <tr>
                                <td>שנת בניה/תאריך שיפוץ אחרון</td>
                                <td>   <?php echo(types_render_field( 'construction_renewal')); ?></td>
                            </tr>
                            <tr>
                                <td> סוג הנכס</td>
                                <td> <?php echo(types_render_field( 'property-type')); ?> </td>
                            </tr>
                            <tr>
                                <td>מצב הנכס</td>
                                <td> <?php echo(types_render_field( 'property_status')); ?> </td>
                            </tr>
                            <tr>
                                <td>מס' חדרים</td>
                                <td><?php echo(types_render_field( 'rooms_number')); ?> </td>
                            </tr>
                            <tr>
                                <td>מחיר למטר</td>
                                <td><?php echo(types_render_field( 'meter_price')); ?></td>
                            </tr>
                            <tr>
                                <td>תאריך פינוי</td>
                                <td><?php echo(types_render_field( 'evacuation')); ?></td>
                            </tr>
                            <tr>
                                <td>תמונה</td>
                                <td><?php echo(types_render_field( 'picture')); ?></td>
                            </tr>
                            <tr>
                                <td>Color</td>
                                <td>Red</td>
                            </tr>
                        </table>
                    </div><!-- /.table__wrapper -->

                    <div class="ads__price">Price: <span>$50 000</span></div>
                </div><!-- /.ads__info -->

    </main><!-- /.container -->
<?php get_footer(); ?>

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

