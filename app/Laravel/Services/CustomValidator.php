<?php

namespace App\Laravel\Services;

use App\Laravel\Models\{User};
use Illuminate\Validation\Validator;

use Hash,PhoneNumber;

class CustomValidator extends Validator{
    
    public function validateNameFormat($attribute, $value, $parameters){
        return preg_match('/^[a-zA-Z0-9.\-\s]+$/', $value);
    }

    public function validateUniquePhone($attribute, $value, $parameters){
      
    }

    public function validatePasswordFormat($attribute, $value, $parameters){
        return preg_match(("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-.]).{8,}$/"), $value);
    }

    public function validateCurrentPassword($attribute, $value, $parameters){
        if ($parameters) {
            $user_id = (is_array($parameters) and isset($parameters[0])) ? $parameters[0] : "0";
            $user = User::find($user_id);

            return Hash::check($value, $user->password);
        }

        return false;
    }

    public function validateNewPassword($attribute, $value, $parameters){
        $user_id = (is_array($parameters) and isset($parameters[0])) ? $parameters[0] : "0";
        
        $user = User::find($user_id);

        return !Hash::check($value, $user->password) ? true : false;
    }
}
