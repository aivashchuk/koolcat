<?php
/**
 * Template Name: Onboarding Template
 */

get_header();
?>

<div class="onboarding-page">
    <div class="onboarding-line">
        <div class="line"></div>
        <div class="row justify-content-between">
            <a class="step step-1 active">
                <span class="number d-flex align-items-center justify-content-center">1</span>
                <span class="text"><?php the_field('step_1_text'); ?></span>
            </a>

            <a class="step step-2">
                <span class="number d-flex align-items-center justify-content-center">2</span>
                <span class="text"><?php the_field('step_2_text'); ?></span>
            </a>

            <a class="step step-3 disable">
                <span class="number d-flex align-items-center justify-content-center">3</span>
                <span class="text"><?php the_field('step_3_text'); ?></span>
            </a>
        </div>
    </div>

    <form action="" method="post">

        <div class="onboarding-form form-1" id="form-1">
            <h1 class="h2"><?php the_field('step_1_title'); ?></h1>
            <div class="text">
                <p><?php the_field('step_1_desc'); ?></p>
            </div>
            <div class="input-group">
                <input id="input_1" name="SelectedPackage" type="radio" value="Essential">
                <label for="input_1" class="option active">
                    <div class="plan"><?php the_field('plan_name_1','12'); ?></div>
                    <div class="price">
                        <?php the_field('plan_price_1','12'); ?> $/month
                    </div>
                    <p> <?php the_field('plan_text_1','12'); ?></p>
                </label>
            </div>

            <div class="input-group">
                <input id="input_2" name="SelectedPackage" type="radio" value="Accelerate">
                <label for="input_2" class="option">
                    <div class="plan"><?php the_field('plan_name_2','12'); ?></div>
                    <div class="price">
                        <?php the_field('plan_price_2','12'); ?> $/month
                    </div>
                    <p> <?php the_field('plan_text_2','12'); ?></p>
                </label>
            </div>

            <div class="input-group">
                <input id="input_3" name="SelectedPackage" type="radio" value="Ultimate">
                <label for="input_3" class="option">
                    <div class="plan"><?php the_field('plan_name_3','12'); ?></div>
                    <div class="price">
                        <?php the_field('plan_price_3','12'); ?> $/month
                    </div>
                    <p> <?php the_field('plan_text_3','12'); ?></p>
                </label>
            </div>

            <label class="next-step" id="next-step-1">
                continue
            </label>

        </div>

        <div class="onboarding-form form-2" id="form-2">
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
            <h2 class="h2">Billing Addressn</h2>
            <div class="row">
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
