<?php

#-------------------------------------------------------------------------------#
#  WP Job Manager - Remove Deadline Markup from Listing
#-------------------------------------------------------------------------------#
        
    global $job_manager_application_deadline;
    remove_filter( 'job_listing_meta_end', array( $job_manager_application_deadline, 'display_the_deadline' ));
