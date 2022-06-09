<?php

    $to = "colletta.baker13@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "New Interested Viewer

    $fields = array();
    $fields{"firstName"}    = "First Name";
    $fields{"lastName"}    = "Last Name";
    $fields{"email"}    = "Email";

    $send = mail($to, $subject, $headers);

?>