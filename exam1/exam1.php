

<?php

class SectionArea
{
    public static function partsBySection ($data)
    {
        $data = array
        (
            "Assembly" => array("Battery","Magnet"),
            "ITS" => "Tablet"
        );
   
        return str_replace('Array','',print_r($data,true));
    }
}

$data = array
(
    "Battery" => "Assembly",
    "Tablet" => "ITS",
    "Magnet" => " Assembly "
);

print_r(SectionArea:: partsBySection ($data));
    