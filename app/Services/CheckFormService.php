<?php

namespace App\Service;

class checkFormService
{
    public static function checkGender($contact){

        if($contact->gender === 0){
            $gender = '男性';
        } else {
            $gender = '女性';
        }

        return $gender;
    }


    public static function checkAge($contact){

    }
}
