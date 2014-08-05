<?php

namespace Acme\Validators;

use Validator;

abstract class Validator {

    protected $errors;

    public function isValid($inputs) {
        $v = Validator::make($inputs, static::$rules);

        if ($v->fails()) {
            $this->errors = $v->messages();
            return false;
        }

        return true;
    }

    public function isValidAuth($inputs) {
        $v = Validator::make($inputs, static::$authRules);

        if ($v->fails()) {
            $this->errors = $v->messages();
            return false;
        }

        return true;
    }

    public function getErrors() {
        return $this->errors;
    }

}
