<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{
    public static function fullname($name, $middlename,$lastname){
        $fullname = '';
        if(!empty($name)) {
            $fullname = $name;
            if(!empty($lastname)) {
                $fullname = $name . " " . $lastname;
                if (!empty($middlename)) {
                    $fullname = $name . " " . $middlename;
                }
            }
        }
        return $fullname;
    }
}