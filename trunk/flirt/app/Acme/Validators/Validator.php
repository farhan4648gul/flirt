<?php namespace Acme\Validators;

abstract class Validator {

    protected $errors;

    public function isValid($inputs){
        $v = \Illuminate\Support\Facades\Validator::make($inputs, static::$rules);

        if($v->fails())
        {
            $this->errors = $v->messages();
            return false;
        }

        return true;
    }

    public function isValidAuth($inputs)
    {
        $v = \Illuminate\Support\Facades\Validator::make($inputs, static::$authRules);

        if($v->fails())
        {
            $this->errors = $v->messages();
            return false;
        }

        return true;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}