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

        <h1 class="page__title">הוספת מודעה</h1>

        <div class="alert  alert--red">
            <p>Example of error alert</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima suscipit hic, aperiam ipsum repellat quod aliquam ad quisquam quis consequatur accusamus, itaque quibusdam accusantium veritatis odio ab libero tempora asperiores.</p>
            <button class="alert__button" type="button"><i class="fa fa-close"></i></button>
        </div>

        <div class="alert  alert--green">
            <p>Example of success alert</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima suscipit hic, aperiam ipsum repellat quod aliquam ad quisquam quis consequatur accusamus, itaque quibusdam accusantium veritatis odio ab libero tempora asperiores.</p>
            <button class="alert__button" type="button"><i class="fa fa-close"></i></button>
        </div>


        <form action="/" method="post">
            <fieldset class="form__fieldset">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form__group">
                            <label class="label" for="type_1">Type</label>
                            <div class="select">
                                <select name="type_1" id="type_1">
                                    <option value="free">Free</option>
                                    <option value="paid">Paid ($1)</option>
                                    <option value="vip">Paid VIP ($1.5 - yellow background)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form__group">
                            <label class="label" for="section_1">Section</label>
                            <div class="select">
                                <select name="section_1" id="section_1">
                                    <option value="Work and business">Work and business</option>
                                    <option value="Transport">Transport</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Building">Building</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Clothes, Shoes">Clothes, Shoes</option>
                                    <option value="For Home">For Home</option>
                                    <option value="Manufacturing">Manufacturing</option>
                                    <option value="For children">For children</option>
                                    <option value="Animals">Animals</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Activities, hobbies">Activities, hobbies</option>
                                </select>
                            </div>
                        </div>
                        <div class="form__group">
                            <label class="label" for="category_1">Category</label>
							<?php wp_list_categories($args);?>
                            <div class="select">
                                <select name="category_1" id="category_1">
                                    <option value="Jobs">Jobs</option>
                                    <option value="Looking for job">Looking for job</option>
                                    <option value="Courses, education">Courses, education</option>
                                    <option value="Business contacts">Business contacts</option>
                                    <option value="Lawyer services">Lawyer services</option>
                                    <option value="Financial services">Financial services</option>
                                    <option value="Translations">Translations</option>
                                    <option value="Internet Services">Internet Services</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- /.col-lg-4  col-md-6 -->
                    <div class="col-lg-8">
                        <div class="form__group">
                            <label class="label" for="text_1">Text*</label>
                            <textarea class="textarea" name="text_1" id="text_1"></textarea>
                        </div>
                    </div>
                </div><!-- /.row -->
            </fieldset>
            <div class="row">
                <div class="col-lg-4">
                    <button class="btn  btn--green  btn--full" type="submit">Submit</button>					

                </div>
            </div><!-- /.row -->
        </form>


        <br>
        <br>
        <br>


        <h1 class="page__title">אפשרויות נוספות</h1>

        <form action="" method="post">
            <fieldset class="form__fieldset">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form__group">
                            <label class="label" for="type">סוג</label>
                            <div class="select">
                                <select name="type" id="type">
                                    <option value="free">חינם</option>
                                    <option value="paid">Paid ($1)</option>
                                    <option value="vip">Paid VIP ($1.5 - yellow background)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form__group">
                            <label class="label" for="section">Section</label>
                            <div class="select">
                                <select name="section" id="section">
                                    <option value="Work and business">Work and business</option>
                                    <option value="Transport" selected>Transport</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Building">Building</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Clothes, Shoes">Clothes, Shoes</option>
                                    <option value="For Home">For Home</option>
                                    <option value="Manufacturing">Manufacturing</option>
                                    <option value="For children">For children</option>
                                    <option value="Animals">Animals</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Activities, hobbies">Activities, hobbies</option>
                                </select>
                            </div>
                        </div>
                        <div class="form__group">
                            <label class="label" for="category">קטגוריות</label>
                            <div class="select">
                                <select name="category" id="category">
                                    <option value="Jobs">Cars</option>
                                    <option value="Looking for job">Trucks</option>
                                    <option value="Courses, education">Moto</option>
                                    <option value="Business contacts">Bicycles</option>
                                    <option value="Lawyer services">Cars Exchange</option>
                                    <option value="Financial services">Repair and Parts</option>
                                    <option value="Translations">Transportation</option>
                                    <option value="Internet Services">Transport Rentals</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form__group">
                            <label class="label" for="model">Model</label>
                            <div class="select">
                                <select name="model" id="model">
                                    <option value="Alfa Romeo">Alfa Romeo</option>
                                    <option value="Audi">Audi</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Cadillac">Cadillac</option>
                                    <option value="Chevrolet">Chevrolet</option>
                                    <option value="Chrysler">Chrysler</option>
                                    <option value="Citroen">Citroen</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="form__group">
                            <label class="label" for="year">Year*</label>
                            <input class="input" type="text" name="year" id="year">
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="form__group">
                                    <label class="label" for="gearbox">Gearbox</label>
                                    <div class="select">
                                        <select name="gearbox" id="gearbox">
                                            <option value="automatic">Automatic</option>
                                            <option value="mechanic">Mechanic</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form__group">
                                    <label class="label" for="mileage">Mileage</label>
                                    <input class="input" type="text" name="mileage" id="mileage">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form__group">
                                    <label class="label" for="engine">Engine</label>
                                    <div class="select">
                                        <select name="engine" id="engine">
                                            <option value="diesel">Diesel</option>
                                            <option value="petrol">Petrol</option>
                                            <option value="gas">Gas</option>
                                            <option value="electric">Electric</option>
                                            <option value="hybrid">Hybrid (petrol/electric)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form__group">
                                    <label class="label" for="capacity">Capacity</label>
                                    <input class="input" type="text" name="capacity" id="capacity">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form__group">
                                    <label class="label" for="car_type">Type</label>
                                    <div class="select">
                                        <select name="car_type" id="car_type">
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
                            <div class="col-md-5">
                                <div class="form__group">
                                    <label class="label" for="capacity">Color</label>
                                    <div class="select">
                                        <select name="color" id="color">
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
                        </div>
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="form__group">
                            <label class="label" for="vin_code">VIN code*</label>
                            <input class="input" type="text" name="vin_code" id="vin_code">
                        </div>
                        <div class="form__group">
                            <label class="label" for="inspection">Inspection*</label>
                            <input class="input" type="text" name="inspection" id="inspection">
                        </div>
                    </div>
                </div><!-- /.row -->
            </fieldset>

            <fieldset class="form__fieldset">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form__group">
                            <label class="label">Extras</label>
                        </div>
                    </div>
                </div><!-- /.row -->

                <div class="row">
                    <div class="col-lg-3  col-md-6">
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_1" id="checkbox_1">
                            <label class="checkbox__label" for="checkbox_1">
                                Air conditioning
                            </label>
                        </div>
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_2" id="checkbox_2">
                            <label class="checkbox__label" for="checkbox_2">
                                Climate control
                            </label>
                        </div>
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_3" id="checkbox_3">
                            <label class="checkbox__label" for="checkbox_3">
                                Cruise control
                            </label>
                        </div>
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_4" id="checkbox_4">
                            <label class="checkbox__label" for="checkbox_4">
                                Luke
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-6">
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_5" id="checkbox_5">
                            <label class="checkbox__label" for="checkbox_5">
                                Sports package
                            </label>
                        </div>
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_6" id="checkbox_6">
                            <label class="checkbox__label" for="checkbox_6">
                                Keyless Go
                            </label>
                        </div>
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_7" id="checkbox_7">
                            <label class="checkbox__label" for="checkbox_7">
                                ABS
                            </label>
                        </div>
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_8" id="checkbox_8">
                            <label class="checkbox__label" for="checkbox_8">
                                Air-bag
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-6">
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_9" id="checkbox_9">
                            <label class="checkbox__label" for="checkbox_9">
                                ESP
                            </label>
                        </div>
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_10" id="checkbox_10">
                            <label class="checkbox__label" for="checkbox_10">
                                ASR
                            </label>
                        </div>
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_11" id="checkbox_11">
                            <label class="checkbox__label" for="checkbox_11">
                                MP3
                            </label>
                        </div>
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_12" id="checkbox_12">
                            <label class="checkbox__label" for="checkbox_12">
                                USB
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-6">
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_13" id="checkbox_13">
                            <label class="checkbox__label" for="checkbox_13">
                                Navigation
                            </label>
                        </div>
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_14" id="checkbox_14">
                            <label class="checkbox__label" for="checkbox_14">
                                Hands-free
                            </label>
                        </div>
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_15" id="checkbox_15">
                            <label class="checkbox__label" for="checkbox_15">
                                Bluetooth
                            </label>
                        </div>
                        <div class="checkbox">
                            <input class="checkbox__input" type="checkbox" name="checkbox_16" id="checkbox_16">
                            <label class="checkbox__label" for="checkbox_16">
                                Subwoofer
                            </label>
                        </div>
                    </div>
                </div><!-- /.row -->
            </fieldset>

            <fieldset class="form__fieldset">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form__group">
                            <label class="label" for="text">Ads text</label>
                            <textarea class="textarea" name="text" id="text" placeholder="Ads text"></textarea>
                        </div>
                    </div>
                </div><!-- /.row -->
            </fieldset>

            <fieldset class="form__fieldset">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form__group">
                            <label class="label" for="files">Upload ads images</label>
                            <label class="upload" for="files">
                                <input type="file" name="files" id="files">
                                <span class="upload__text">
                                    Drag and drop images here <br>
                                    or click to choose from computer <br>
                                    max. file size 1MB
                                </span>
                            </label>
                        </div>
                    </div>
                </div><!-- /.row -->
            </fieldset>

            <div class="row">
                <div class="col-lg-4">
                    <button class="btn  btn--green  btn--full" name=""advSubmit"" type="submit">Submit</button>
					<input type="hidden" name="adv-submission" value="1" />

                </div>
            </div><!-- /.row -->
        </form>

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





