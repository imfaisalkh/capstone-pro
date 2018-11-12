// Get paramter by name
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

jQuery(document).ready( function($) {

    'use strict';

    // Functions Object
    var woocommerce = {
        
        activeClass: function() {

            // add `active` class on load
            $('ul.job_packages li.job-package, ul.job_packages li.user-job-package, ul.resume_packages li.resume-package, ul.resume_packages li.user-resume-package').each(function(){
                let isChecked = $('input[type="radio"]', this).is(':checked');
                if (isChecked) {
                    $(this).addClass('active');
                }
            });

            // add `active` class on click upon package
            $('ul.job_packages li.job-package input[type="radio"], ul.job_packages li.user-job-package input[type="radio"], ul.resume_packages li.resume-package input[type="radio"], ul.resume_packages li.user-resume-package input[type="radio"]').change(function(){
                if ($(this).is(':checked')) {
                    $('ul.job_packages li.job-package, ul.job_packages li.user-job-package, ul.resume_packages li.resume-package, ul.resume_packages li.user-resume-package').removeClass('active');
                    $(this).parents('li').addClass('active');
                    // $(this).parents('li.user-job-package').addClass('active');
                }
            });
            
            // check radio box on click upon package
            $('ul.job_packages li.job-package, ul.job_packages li.user-job-package, ul.resume_packages li.resume-package, ul.resume_packages li.user-resume-package').on('click', function () {
                $('input[type="radio"]', this).prop('checked', true);
                $('input[type="radio"]', this).change();
            });
        },

        changeHeading: function () {
            $('#job_package_selection .job_listing_packages_title h2').html('Select a package above and click the button.');
        },

        checkoutDOM: function () {
            // wrap order summary section wih an extra dic
            $('.woocommerce-checkout-review-order-table').wrap('<div class="order-summary"></div>');
            $('.order-summary').prepend('<h3 class="title">Order Summary</h3>');

            // shift coupon form position
            $('.woocommerce-form-coupon').detach().insertAfter('.order-summary');
        
            // shift submit button position
            $('.woocommerce-checkout-payment .place-order').detach().insertAfter('.payment-info-fields');
            
            // insert a span for each payment option
            $('body').on('updated_checkout', function() {
                $('ul.wc_payment_methods li.wc_payment_method').each(function(){
                    // $('input[type="radio"]', this).append('<span></span>');
                    $('label', this).prepend('<span></span>');
                });
            });
        },

        autoSelectPackage: function () {
            let hasPackage = getParameterByName('package');
            let pricingWCPage = $('#job_package_selection').length;

            if (pricingWCPage && hasPackage) {
                let packageID = 'package-' + hasPackage;
                $('input#' + packageID).trigger('click');
                $('#job_package_selection .job_listing_packages_title input[type="submit"]').trigger('click');
            }
        },

    }  

    $(window).on('load', function() {
        woocommerce.activeClass();
        woocommerce.changeHeading();
        woocommerce.checkoutDOM();
        woocommerce.autoSelectPackage();
    });

});