<?php
    function get_profiles(){
        $profilesjson = file_get_contents('data.json');
        $profile = json_decode($profilesjson, true);

        return $profile;
    }

    function get_works($my_file){
        $workjson = file_get_contents("$my_file.json");
        $workpre = json_decode($workjson, true);

        return $workpre;
    }
?>
