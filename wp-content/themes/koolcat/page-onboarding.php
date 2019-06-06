<?php
/**
 * Template Name: Onboarding Template
 */

get_header();
?>

<div class="onboarding-page">

    <form action="" method="post">

        <div class="onboarding-form form-2" id="form-2">
            <h1 class="h2">Billing Information</h1>
            <div class="text">
                All fields are required.
            </div>
            <div class="row">
                <div class="col-12 input-wrap">
                    <label for="business-name">Business Name</label>
                    <input required id="business-name" name="business-name" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="tax">Tax Number</label>
                    <input required id="tax" name="tax" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="activity">Activity</label>
                    <input required id="activity" name="phone" type="activity">
                </div>
            </div>
            <h2 class="h2">Location</h2>
            <div class="row">
                <div class="col-12 input-wrap">
                    <label for="street-l">Street</label>
                    <input required id="street-l" name="street-l" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="city-l">City</label>
                    <input required id="city-l" name="city-l" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="state-l">State/Province</label>
                    <input required id="state-l" name="state-l" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="country-l">Country</label>
                    <input required id="country-l" name="country-l" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="code-l">Postal Code</label>
                    <input required id="code-l" name="code-l" type="text">
                </div>
            </div>
            <h2 class="h2">Information</h2>
            <div class="text">
                All fields are required.
            </div>
            <div class="row">
                <div class="col-12 col-md-6 input-wrap">
                    <label for="first-name">First Name</label>
                    <input required id="first-name" name="first-name" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="last-name">Last Name</label>
                    <input required id="last-name" name="last-name" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="email">Email</label>
                    <input required id="email" name="email" type="email">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="phone">Phone Number</label>
                    <input required id="phone" name="phone" type="tel">
                </div>
            </div>
            <h2 class="h2">Billing Address</h2>
            <div class="row" id="billing-address">
                <div class="col-12 input-wrap">
                    <input type="checkbox" name="same" id="same">
                    <label for="same">The same as location information.</label>
                </div>
                <div class="col-12 input-wrap">
                    <label for="street">Street</label>
                    <input required id="street" name="street" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="city">City</label>
                    <input required id="city" name="city" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="state">State/Province</label>
                    <input required id="state" name="state" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="country">Country</label>
                    <input required id="country" name="country" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="code">Postal Code</label>
                    <input required id="code" name="code" type="text">
                </div>
            </div>
            <div class="row billing-row">
                <div class="col-12">
                    <h2 class="h2">Billing Information</h2>
                    <div class="text">
                        All fields are required.
                    </div>
                </div>
                <div class="col-12 input-wrap">
                    <label for="card-number">Card Number</label>
                    <input required id="card-number" name="card-number" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="card-name">Cardholder Name</label>
                    <input required id="card-name" name="card-name" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="month">Expiration Month</label>
                    <input required id="month" name="month" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="year">Expiration Year</label>
                    <input required id="year" name="year" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="cvv">CVV/CVV2 (located on the back of the card)</label>
                    <input required id="cvv" name="cvv" type="text">
                </div>
            </div>

            <input type="submit" class="next-step" value="continue">

        </div>

        <div class="onboarding-form form-3" id="form-3">
            <h2 class="h2"><?php the_field('step_3_title'); ?></h2>
            <div class="text">
                <p><?php the_field('step_3_desc'); ?>
                </p>
            </div>
        </div>
    </form>

</div>


<?php get_footer(); ?>
