<?php
/**
 * Template Name: Onboarding Template
 */

get_header();
?>

<script src="https://js.stripe.com/v3/"></script>

<style>
    /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
    .StripeElement {
        box-sizing: border-box;

        height: 40px;

        padding: 10px 12px;

        border: 1px solid transparent;
        border-radius: 4px;
        background-color: white;

        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }
</style>



<div class="onboarding-page">

    <form action="https://api.mykoolcat.com/api/landing" method="post" id="payment-form">

        <div class="onboarding-form form-2" id="form-2">

            <h2 class="h2">Payment Details</h2>
            <div class="text">
                All fields are required.
            </div>
            <div class="row">
                <div class="col-12 col-md-6 input-wrap">
                    <label for="first_name">First Name</label>
                    <input required id="first_name" name="first_name" type="text">
                </div>
                <div class="col-12 col-md-6 input-wrap">
                    <label for="last_name">Last Name</label>
                    <input required id="last_name" name="last_name" type="text">
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
<!--                <div class="col-12 col-md-6 input-wrap">-->
<!--                    <label for="card_name">Name on Card</label>-->
<!--                    <input required id="card_name" name="card_name" type="text">-->
<!--                </div>-->
<!--                <div class="col-12 col-md-6 input-wrap">-->
<!--                    <label for="card_number">Card Number</label>-->
<!--                    <input required id="card_number" name="card_number" type="text">-->
<!--                </div>-->
<!--                <div class="col-12 col-md-6 input-wrap">-->
<!--                    <label for="expiry">Expiry</label>-->
<!--                    <input required id="expiry" name="expiry" type="text" placeholder="mm/yyyy">-->
<!--                </div>-->
<!--                <div class="col-12 col-md-6 input-wrap">-->
<!--                    <label for="cvv">CVV/CVV2 (located on the back of the card)</label>-->
<!--                    <input required id="cvv" name="cvv" type="text">-->
<!--                </div>-->
                <div class="col-12">
                    <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>
                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>

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

<script>
    // Create a Stripe client.
    var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: '#32325d',
            fontSmoothing: 'antialiased',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }
</script>


<?php get_footer(); ?>
