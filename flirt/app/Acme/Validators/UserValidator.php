<?php namespace Acme\Validators;


class UserValidator extends Validator{

    protected static $rules = array(
        'email' => 'required|email|unique:users,email',
        'username' => 'required',
        'password' => 'required'
    );

    protected static $authRules = array(
        'username' => 'required',
        'password' => 'required'
    );
} 