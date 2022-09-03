<?php
class EmployeeNames
{
    public static function unique_names($array1, $array2)
    {
        $names = array_unique(
            array_merge(
                $array1,
                $array2
            )
        );
        return $names;
    }
}

//Do not change this part

$empnames = EmployeeNames::unique_names(["jack", "marwan", "balato"], ["balato", "arniel", "Ivana"]);

echo join(', ', $empnames); // should print jack, marwan, balato, Arniel,Ivana

