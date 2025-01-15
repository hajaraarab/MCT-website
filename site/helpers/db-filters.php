<?php

require_once kirby()->root('site') . '/helpers/db-queries.php';


function filterPerYear($filter)
{
    $filter = get('filter');
    $query = [];

    if ($filter == "firstyear") 
    {
        $query = ['year' => 1];
    } 
    elseif ($filter == "secondyear") 
    {
        $query = ['year' => 2];
    } 
    elseif ($filter == "thirdyear") 
    {
        $query = ['year' => 3];
    }

    $data = getClasses($query);
    return $data; 
}

function filterPerProfile($filter)
{
    $filter = get('filter'); // Haal de filter op uit de URL
    $query = [];

    if ($filter == "av") 
    {
        $query = ['profile_id' => '1'];
    } 
    elseif ($filter == "web") 
    {
        $query = ['profile_id' => '2'];
    } 
    elseif ($filter == "3D") 
    {
        $query = ['profile_id' => '3'];
    } 
    elseif ($filter == "general") 
    {
        $query = ['profile_id' => '4'];
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

