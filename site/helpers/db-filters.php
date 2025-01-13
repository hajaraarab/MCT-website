<?php

require_once kirby()->root('site') . '/helpers/db-queries.php';


function getCoursesPerYear($filter)
{
    $filter = get('filter');
    $query = [];

    if ($filter == "firstyear") {
        $query = ['year' => 1];
    } elseif ($filter == "secondyear") {
        $query = ['year' => 2];
    } elseif ($filter == "thirdyear") {
        $query = ['year' => 3];
    }

    $data = getClasses($query);
    return $data; 
}

function getProfile($profileId) {
    if (!$profileId) {
        return null; // Als er geen profiel-ID is, geef niets terug
    }

    // Query om het profiel op te halen
    $profile = Db::first('profiles', ['profile'], ['id' => $profileId]);

    return $profile ? $profile->profile : null;
}
