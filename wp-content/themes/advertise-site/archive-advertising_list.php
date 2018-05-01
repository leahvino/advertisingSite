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
	
	      <?php
        $my_query = new WP_Query( 'cat=1' ); // I used a category id 1 as an example
        ?>
        <?php if ( $my_query->have_posts() ) : ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <h1 class="entry-title"><?php the_title(); ?></h1> <!-- Queried Post Title -->
            <div class="entry-content">
                <?php the_excerpt(); ?> <!-- Queried Post Excerpts -->
            </div><!-- .entry-content -->

        <?php endwhile; //resetting the post loop ?>

        </div><!-- #post-<?php the_ID(); ?> -->

        <?php
        wp_reset_postdata(); //resetting the post query
        endif;
        ?>
        <div class="row">
            <div class="col-lg-10  col-md-8">
                <div class="breadcrumbs">
                    <a href="index.html" class="breadcrumbs__item">Home</a>
                    <a href="subcat.html" class="breadcrumbs__item">Cars</a>
                    <span class="breadcrumbs__item  current">BMW</span>
                </div>
            </div>
            <div class="col-lg-2  col-md-4">
                <div class="select">
                    <select name="sort" id="sort">
                        <option value="all" selected>All</option>
                        <option value="today">Today (1215)</option>
                        <option value="yesterday">Yesterday (1698)</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">

                <!-- Filter -->
                <div class="filter" id="filter">
                    <button class="filter__close" type="button" id="filter_close">Close filter</button>
                
                    <form class="form--inline" action="/" method="post">
                        <div class="form__group">
                            <div class="input__wrapper">
                                <input class="input" type="text" placeholder="Price from">
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="input__wrapper">
                                <input class="input" type="text" placeholder="Price to">
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="input__wrapper">
                                <div class="select">
                                    <select name="year_from" id="year_from">
                                        <option value="0" selected>Year from</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="input__wrapper">
                                <div class="select">
                                    <select name="year_to" id="year_to">
                                        <option value="0" selected>Year to</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="input__wrapper">
                                <div class="select">
                                    <select name="capacity_from" id="capacity_from">
                                        <option value="0" selected>Capacity from</option>
                                        <option value="6.0">6.0</option>
                                        <option value="5.0">5.0</option>
                                        <option value="4.0">4.0</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="input__wrapper">
                                <div class="select">
                                    <select name="capacity_to" id="capacity_to">
                                        <option value="0" selected>Capacity to</option>
                                        <option value="6.0">6.0</option>
                                        <option value="5.0">5.0</option>
                                        <option value="4.0">4.0</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="input__wrapper">
                                <div class="select  select--sm">
                                    <select name="engine" id="engine">
                                        <option value="0" selected>Engine</option>
                                        <option value="diesel">Diesel</option>
                                        <option value="petrol">Petrol</option>
                                        <option value="gas">Gas</option>
                                        <option value="electric">Electric</option>
                                        <option value="hybrid">Hybrid (petrol/electric)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="input__wrapper">
                                <div class="select  select--sm">
                                    <select name="gearbox" id="gearbox">
                                        <option value="0" selected>Gearbox</option>
                                        <option value="mechanic">Mechanic</option>
                                        <option value="automatical">Automatical</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="input__wrapper">
                                <div class="select  select--sm">
                                    <select name="vehicle_type" id="vehicle_type">
                                        <option value="0" selected>Type</option>
                                        <option value="Saloon">Saloon</option>
                                        <option value="Estate">Estate</option>
                                        <option value="Cabriolet">Cabriolet</option>
                                        <option value="Coupe">Coupe</option>
                                        <option value="Minibus">Minibus</option>
                                        <option value="Small">Small</option>
                                        <option value="Pickup">Pickup</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="input__wrapper">
                                <div class="select  select--sm">
                                    <select name="color" id="color">
                                        <option value="0" selected>Color</option>
                                        <option value="Red">Red</option>
                                        <option value="Black">Black</option>
                                        <option value="Yellow">Yellow</option>
                                        <option value="Brown">Brown</option>
                                        <option value="Gray">Gray</option>
                                        <option value="Blue">Blue</option>
                                        <option value="Orange">Orange</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <button class="btn  btn--red  btn--s" type="submit">Search</button>
                        </div>
                    </form>
                </div><!-- /.filter -->

                <a class="filter__show" href="#" id="js-show-filter"><i class="fa fa-bars"></i>Show filter</a>

            </div><!-- /.col-xs-12 -->
        </div><!-- /.row -->

        <div class="table__wrapper">
            <table class="table  table--hover  sortable" data-sortable>
                <thead>
                    <tr>
                        <th data-sortable="false">Photo</th>
                        <th data-sortable="false">Title</th>
                        <th data-sortable="false">Model</th>
                        <th>Year</th>
                        <th>Capacity</th>
                        <th>Mileage</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr onclick="location.href='ads_inner.html'">
                        <td class="ads-list__photo">
                            <img src="http://placehold.it/50" width="50" height="50" alt="">
                        </td>
                        <td class="ads-list__title">BMW 530 Best car for you Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, nisi, vitae. Repellat blanditiis expedita quae amet magni earum aut vel vitae, laudantium odit minima voluptate pariatur non. Eius, sequi, sint.</td>
                        <td>530</td>
                        <td>2008</td>
                        <td>3.0D</td>
                        <td>162000</td>
                        <td>$10900</td>
                    </tr>
                    <tr onclick="location.href='ads_inner.html'">
                        <td class="ads-list__photo">
                            <img src="http://placehold.it/50" width="50" height="50" alt="">
                        </td>
                        <td class="ads-list__title">BMW 330 Best car for you</td>
                        <td>330</td>
                        <td>2010</td>
                        <td>3.0D</td>
                        <td>111500</td>
                        <td>$14900</td>
                    </tr>
                    <tr class="ads-list__special" onclick="location.href='ads_inner.html'">
                        <td class="ads-list__photo">
                            <img src="http://placehold.it/50" width="50" height="50" alt="">
                        </td>
                        <td class="ads-list__title">BMW 320 Best car for you. Special ads with yellow background</td>
                        <td>320</td>
                        <td>2007</td>
                        <td>2.0</td>
                        <td>95500</td>
                        <td>$8900</td>
                    </tr>
                    <tr onclick="location.href='ads_inner.html'">
                        <td class="ads-list__photo">
                            <img src="http://placehold.it/50" width="50" height="50" alt="">
                        </td>
                        <td class="ads-list__title">BMW 530 Best car for you</td>
                        <td>530</td>
                        <td>2008</td>
                        <td>3.0D</td>
                        <td>162000</td>
                        <td>$10900</td>
                    </tr>
                    <tr onclick="location.href='ads_inner.html'">
                        <td class="ads-list__photo">
                            <img src="http://placehold.it/50" width="50" height="50" alt="">
                        </td>
                        <td class="ads-list__title">BMW 330 Best car for you</td>
                        <td>330</td>
                        <td>2010</td>
                        <td>3.0D</td>
                        <td>111500</td>
                        <td>$14900</td>
                    </tr>
                </tbody>
            </table>
        </div><!-- /.table__wrapper -->

        <div class="pagination">
            <a href="#" class="pagination__item  pagination__item--disabled" aria-label="Previous"><i class="fa fa-angle-double-left"></i></a>
            <a href="#" class="pagination__item  pagination__item--current">1</a>
            <a href="#" class="pagination__item">2</a>
            <a href="#" class="pagination__item">3</a>
            <a href="#" class="pagination__item" aria-label="Next"><i class="fa fa-angle-double-right"></i></a>
        </div>

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

