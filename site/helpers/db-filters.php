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

function getProfile($profileId) 
{
    if (!$profileId) {
        return 'No profile'; 
    }

    $decodedProfileID = json_decode($profileId, true);

    if(is_array($decodedProfileID))
    {
        return 'All profiles'; 
    }
    $profile = Db::first('profiles', ['profile_name'], ['id' => $profileId]);

    if($profile) 
    {
        return $profile->profile_name; 
    }

}

