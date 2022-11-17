<?php
$cvs = json_decode(file_get_contents('../data/old_cv.json'));


$search_term = !empty($_GET['s']) ? $_GET['s'] : null;
$final_cvs = array();

foreach ($cvs as $cv) {
    if (strpos($cv->description, $search_term) !== false) {
        $cvs[] = $cv;
    }
}
