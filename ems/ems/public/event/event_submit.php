<?php
require_once __DIR__.'/../../constants.php';
require_once BASE_PATH.'/config/autoload.php';
require_once BASE_PATH.'/config/db.config.php';
require_once BASE_PATH.'/includes/helper.php';

// create event
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (
        ! isset($_POST['organiser_name']) ||
        ! isset($_POST['title']) ||
        ! isset($_POST['description']) ||
        ! isset($_POST['banner']) ||
        ! isset($_POST['event_email']) ||
        ! isset($_POST['event_mobile']) || 
        ! isset($_POST['venue']) ||
        ! isset($_POST['start_time']) ||
        ! isset($_POST['end_time']) ||
        ! isset($_POST['accepted_policy'])
    ){
        response(['error', 'Please fill all field']);
    }
 
    $event = new Event();
    $res = $event->create($_POST);

    if ( ! $res ) {
        response(['error', 'Please try again, event can\t created']);
    }

    // upload banner
    $banner_uploaded = uploadImage($_FILES, $upload_file_name);


    response(['success', 'Event created']);
}
